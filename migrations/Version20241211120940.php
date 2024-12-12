<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241211120940 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_product ADD COLUMN number_phone VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__order_product AS SELECT id, name, surname, email, address, product_id, quantity, width, height, order_number, comments_order, payment_status, order_date FROM order_product');
        $this->addSql('DROP TABLE order_product');
        $this->addSql('CREATE TABLE order_product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, surname VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, product_id VARCHAR(255) DEFAULT NULL, quantity VARCHAR(255) DEFAULT NULL, width VARCHAR(255) DEFAULT NULL, height VARCHAR(255) DEFAULT NULL, order_number VARCHAR(255) DEFAULT NULL, comments_order VARCHAR(255) DEFAULT NULL, payment_status VARCHAR(255) DEFAULT NULL, order_date VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO order_product (id, name, surname, email, address, product_id, quantity, width, height, order_number, comments_order, payment_status, order_date) SELECT id, name, surname, email, address, product_id, quantity, width, height, order_number, comments_order, payment_status, order_date FROM __temp__order_product');
        $this->addSql('DROP TABLE __temp__order_product');
    }
}
