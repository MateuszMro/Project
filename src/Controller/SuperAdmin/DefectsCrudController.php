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
            TextField::new('email'),
            IntegerField::new('defectNumber'),
            TextField::new('description'),
            TextField::new('numberPhone'),
            TextField::new('createdDate'),
            TextField::new('status'),
        ];
    }

}
