<?php

namespace App\Controller\SuperAdmin;


use App\Entity\ReturnProduct;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class ReturnProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReturnProduct::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('numberReturn'),
            TextField::new('email'),
            TextField::new('orderNumber'),
            TextField::new('name'),
            TextField::new('surname'),
            TextField::new('numberPhone'),
            TextField::new('numberBankAccount'),
            TextField::new('reasonReturn'),
            TextField::new('returnStatus'),
            TextField::new('adminComment'),
            TextField::new('createReturn'),
        ];
    }

}
