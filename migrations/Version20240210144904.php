<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240210144904 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('CREATE TEMPORARY TABLE __temp__clients AS SELECT id, email, roles, password, login, confirm_code, confirm_account FROM clients');
        $this->addSql('DROP TABLE clients');
        $this->addSql('CREATE TABLE clients (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles VARCHAR(100) NOT NULL, password VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, confirm_code VARCHAR(255) DEFAULT NULL, confirm_account VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO clients (id, email, roles, password, login, confirm_code, confirm_account) SELECT id, email, roles, password, login, confirm_code, confirm_account FROM __temp__clients');
        $this->addSql('DROP TABLE __temp__clients');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reset_password_request (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, selector VARCHAR(20) NOT NULL COLLATE "BINARY", hashed_token VARCHAR(100) NOT NULL COLLATE "BINARY", requested_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , expires_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES clients (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_7CE748AA76ED395 ON reset_password_request (user_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__clients AS SELECT id, email, login, roles, password, confirm_code, confirm_account FROM clients');
        $this->addSql('DROP TABLE clients');
        $this->addSql('CREATE TABLE clients (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, login VARCHAR(255) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL, confirm_code VARCHAR(255) DEFAULT NULL, confirm_account VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO clients (id, email, login, roles, password, confirm_code, confirm_account) SELECT id, email, login, roles, password, confirm_code, confirm_account FROM __temp__clients');
        $this->addSql('DROP TABLE __temp__clients');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C82E74E7927C74 ON clients (email)');
    }
}
