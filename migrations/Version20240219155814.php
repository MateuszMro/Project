<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219155814 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__defects AS SELECT id, defect_number, email, description, created_date, number_phone FROM defects');
        $this->addSql('DROP TABLE defects');
        $this->addSql('CREATE TABLE defects (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, defect_number INTEGER NOT NULL, email VARCHAR(255) NOT NULL, description CLOB NOT NULL, created_date VARCHAR(255) NOT NULL, number_phone VARCHAR(16) NOT NULL)');
        $this->addSql('INSERT INTO defects (id, defect_number, email, description, created_date, number_phone) SELECT id, defect_number, email, description, created_date, number_phone FROM __temp__defects');
        $this->addSql('DROP TABLE __temp__defects');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__defects AS SELECT id, defect_number, email, description, created_date, number_phone FROM defects');
        $this->addSql('DROP TABLE defects');
        $this->addSql('CREATE TABLE defects (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, defect_number INTEGER NOT NULL, email VARCHAR(255) NOT NULL, description CLOB NOT NULL, created_date VARCHAR(255) NOT NULL, number_phone INTEGER NOT NULL)');
        $this->addSql('INSERT INTO defects (id, defect_number, email, description, created_date, number_phone) SELECT id, defect_number, email, description, created_date, number_phone FROM __temp__defects');
        $this->addSql('DROP TABLE __temp__defects');
    }
}