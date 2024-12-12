<?php

namespace App\Controller\SuperAdmin;


use App\Entity\OrderProduct;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class OrderProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OrderProduct::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('orderNumber'),
            TextField::new('productID'),
            TextField::new('quantity'),
            TextField::new('width'),
            TextField::new('height'),
            TextField::new('email'),
            TextField::new('name'),
            TextField::new('surname'),
            TextField::new('address'),
            TextField::new('numberPhone'),
            TextField::new('commentsOrder'),
            TextField::new('price'),
            TextField::new('paymentStatus'),
            TextField::new('status'),
            TextField::new('orderDate'),
        ];
    }

}
