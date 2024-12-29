<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241228143501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE return_product ADD COLUMN number_return VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__return_product AS SELECT id, order_number, name, surname, email, number_phone, reason_return, number_bank_account, create_return FROM return_product');
        $this->addSql('DROP TABLE return_product');
        $this->addSql('CREATE TABLE return_product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, order_number VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, surname VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, number_phone VARCHAR(255) DEFAULT NULL, reason_return VARCHAR(255) DEFAULT NULL, number_bank_account VARCHAR(255) DEFAULT NULL, create_return VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO return_product (id, order_number, name, surname, email, number_phone, reason_return, number_bank_account, create_return) SELECT id, order_number, name, surname, email, number_phone, reason_return, number_bank_account, create_return FROM __temp__return_product');
        $this->addSql('DROP TABLE __temp__return_product');
    }
}
