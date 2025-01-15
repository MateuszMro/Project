<?php

namespace App\Controller\SuperAdmin;


use App\Entity\OrderSpecialist;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class OrderSpecialistCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OrderSpecialist::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('visitNumber'),
            TextField::new('name'),
            TextField::new('surname'),
            TextField::new('email'),
            TextField::new('numberPhone'),
            TextField::new('address'),
            IntegerField::new('productId'),
            TextField::new('visitDate'),
            TextField::new('price'),
            TextField::new('paymentStatus'),
            TextField::new('commentsOrder'),
            TextField::new('status'),
            TextField::new('orderDate'),
            TextField::new('adminComment'),
        ];
    }

}
