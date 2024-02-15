<?php

namespace App\Controller\PasswordController;

use App\Form\ChangePasswordForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;


class ChangePasswordController extends AbstractController
{


    #[Route('/change_password', name: 'app_change_password')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {


        //Aktualny user
        $users = $this->getUser();

        //Czy zalogowany user
        if (!$users){
            return $this->redirectToRoute('app_login');
        }

        //Formularz zmiany hasła

        $form = $this->createForm(ChangePasswordForm::class);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            //Dane z formularza
            $userPassToCheck = $form->get('plainPassword')->getData();
            $newUserPassword = $form->get('confirmPassword')->getData();
            $newConfirmUserPassword = $form->get('confirmNewPassword')->getData();


            // Sprawdzenie, czy hasło i powtórzone hasło są takie same i czy użytkownik podał prawidłowe aktualne hasło
            if (!$userPasswordHasher->isPasswordValid($users, $userPassToCheck) || $newUserPassword !== $newConfirmUserPassword) {
                // Hasła lub powtórzone hasła nie pasują
                $this->addFlash('error', 'Nieprawidłowe obecne hasło.');
                return $this->redirectToRoute('app_change_password');
            }
            elseif ($userPasswordHasher->isPasswordValid($users,$newUserPassword)){
                $this->addFlash('error', 'Nowe hasło musi być inne niż obecne.');
                return $this->redirectToRoute('app_change_password');
            }
            else{

                //Nowe hasło dla użytkownika
                $users->setPassword(
                    $userPasswordHasher->hashPassword(
                        $users,
                        $newUserPassword
                    )
                );

                //Zapisywanie zmian w bazie danych
                $entityManager->flush();

                return $this->render('info-pages/change_password_success.html.twig', [

                ]);
            }

        }

        return $this->render('reset-password/change_password.html.twig', [
            'changePasswordForm' => $form->createView(),
        ]);
    }
}
