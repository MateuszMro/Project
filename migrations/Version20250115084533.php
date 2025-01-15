<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250115084533 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_specialist ADD COLUMN admin_comment VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__order_specialist AS SELECT id, name, surname, email, address, product_id, visit_number, visit_date, comments_order, number_phone, order_date, price, status, payment_status FROM order_specialist');
        $this->addSql('DROP TABLE order_specialist');
        $this->addSql('CREATE TABLE order_specialist (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, product_id INTEGER DEFAULT NULL, visit_number VARCHAR(255) DEFAULT NULL, visit_date VARCHAR(255) DEFAULT NULL, comments_order VARCHAR(255) DEFAULT NULL, number_phone VARCHAR(255) DEFAULT NULL, order_date VARCHAR(255) DEFAULT NULL, price VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, payment_status VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO order_specialist (id, name, surname, email, address, product_id, visit_number, visit_date, comments_order, number_phone, order_date, price, status, payment_status) SELECT id, name, surname, email, address, product_id, visit_number, visit_date, comments_order, number_phone, order_date, price, status, payment_status FROM __temp__order_specialist');
        $this->addSql('DROP TABLE __temp__order_specialist');
    }
}
