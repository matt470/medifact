<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210326111100 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acte DROP CONSTRAINT fk_9ec413262391866b');
        $this->addSql('ALTER TABLE facture DROP CONSTRAINT fk_fe8664102391866b');
        $this->addSql('ALTER TABLE patient DROP CONSTRAINT fk_1adad7eb2391866b');
        $this->addSql('DROP SEQUENCE praticien_id_seq CASCADE');
        $this->addSql('DROP TABLE praticien');
        $this->addSql('DROP INDEX idx_9ec413262391866b');
        $this->addSql('ALTER TABLE acte DROP praticien_id');
        $this->addSql('DROP INDEX idx_fe8664102391866b');
        $this->addSql('ALTER TABLE facture DROP praticien_id');
        $this->addSql('DROP INDEX idx_1adad7eb2391866b');
        $this->addSql('ALTER TABLE patient DROP praticien_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE praticien_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE praticien (id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, profession VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE acte ADD praticien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE acte ADD CONSTRAINT fk_9ec413262391866b FOREIGN KEY (praticien_id) REFERENCES praticien (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_9ec413262391866b ON acte (praticien_id)');
        $this->addSql('ALTER TABLE facture ADD praticien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT fk_fe8664102391866b FOREIGN KEY (praticien_id) REFERENCES praticien (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_fe8664102391866b ON facture (praticien_id)');
        $this->addSql('ALTER TABLE patient ADD praticien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT fk_1adad7eb2391866b FOREIGN KEY (praticien_id) REFERENCES praticien (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_1adad7eb2391866b ON patient (praticien_id)');
    }
}
