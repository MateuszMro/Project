<?php

namespace App\Controller\Admin;

use App\Entity\Clients;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class ClientsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Clients::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('email'),
            TextField::new('login'),
            TextField::new('password'),
            TextField::new('confirmCode'),
            TextField::new('confirmAccount'),
            ArrayField::new('roles'),
            TextField::new('createdDate'),
        ];
    }

}
