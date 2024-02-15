<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240205011029 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE clients ADD COLUMN login VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE clients ADD COLUMN confirm_code VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE clients ADD COLUMN confirm_account VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__clients AS SELECT id, email, roles, password FROM clients');
        $this->addSql('DROP TABLE clients');
        $this->addSql('CREATE TABLE clients (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO clients (id, email, roles, password) SELECT id, email, roles, password FROM __temp__clients');
        $this->addSql('DROP TABLE __temp__clients');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C82E74E7927C74 ON clients (email)');
    }
}
