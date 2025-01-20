<?php

namespace App\Controller\SuperAdmin;

use App\Entity\Defects;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class DefectsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Defects::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            IntegerField::new('defectNumber'),
            TextField::new('name'),
            TextField::new('surname'),
            TextField::new('email'),
            TextField::new('numberPhone'),
            TextField::new('visitNumber'),
            TextField::new('description'),
            TextField::new('createdDate'),
            TextField::new('status'),
            TextField::new('userComment'),
            TextField::new('adminComment'),
        ];
    }

}
