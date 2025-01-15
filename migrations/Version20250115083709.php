<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250115083709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE order_specialist (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, product_id INTEGER DEFAULT NULL, visit_number VARCHAR(255) DEFAULT NULL, visit_date VARCHAR(255) DEFAULT NULL, comments_order VARCHAR(255) DEFAULT NULL, number_phone VARCHAR(255) DEFAULT NULL, order_date VARCHAR(255) DEFAULT NULL, price VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, payment_status VARCHAR(255) DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE order_specialist');
    }
}
