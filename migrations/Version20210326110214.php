<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210326110214 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE praticien_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE praticien (id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, profession VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE acte ADD patient_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE acte ADD praticien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE acte ADD CONSTRAINT FK_9EC413266B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE acte ADD CONSTRAINT FK_9EC413262391866B FOREIGN KEY (praticien_id) REFERENCES praticien (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_9EC413266B899279 ON acte (patient_id)');
        $this->addSql('CREATE INDEX IDX_9EC413262391866B ON acte (praticien_id)');
        $this->addSql('ALTER TABLE facture ADD patient_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE facture ADD praticien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE facture ADD gestionnaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE facture ADD acte_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE8664106B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE8664102391866B FOREIGN KEY (praticien_id) REFERENCES praticien (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE8664106885AC1B FOREIGN KEY (gestionnaire_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE866410A767B8C7 FOREIGN KEY (acte_id) REFERENCES acte (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_FE8664106B899279 ON facture (patient_id)');
        $this->addSql('CREATE INDEX IDX_FE8664102391866B ON facture (praticien_id)');
        $this->addSql('CREATE INDEX IDX_FE8664106885AC1B ON facture (gestionnaire_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FE866410A767B8C7 ON facture (acte_id)');
        $this->addSql('ALTER TABLE patient ADD gestionnaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE patient ADD praticien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EB6885AC1B FOREIGN KEY (gestionnaire_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EB2391866B FOREIGN KEY (praticien_id) REFERENCES praticien (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_1ADAD7EB6885AC1B ON patient (gestionnaire_id)');
        $this->addSql('CREATE INDEX IDX_1ADAD7EB2391866B ON patient (praticien_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE acte DROP CONSTRAINT FK_9EC413262391866B');
        $this->addSql('ALTER TABLE facture DROP CONSTRAINT FK_FE8664102391866B');
        $this->addSql('ALTER TABLE patient DROP CONSTRAINT FK_1ADAD7EB2391866B');
        $this->addSql('DROP SEQUENCE praticien_id_seq CASCADE');
        $this->addSql('DROP TABLE praticien');
        $this->addSql('ALTER TABLE patient DROP CONSTRAINT FK_1ADAD7EB6885AC1B');
        $this->addSql('DROP INDEX IDX_1ADAD7EB6885AC1B');
        $this->addSql('DROP INDEX IDX_1ADAD7EB2391866B');
        $this->addSql('ALTER TABLE patient DROP gestionnaire_id');
        $this->addSql('ALTER TABLE patient DROP praticien_id');
        $this->addSql('ALTER TABLE acte DROP CONSTRAINT FK_9EC413266B899279');
        $this->addSql('DROP INDEX IDX_9EC413266B899279');
        $this->addSql('DROP INDEX IDX_9EC413262391866B');
        $this->addSql('ALTER TABLE acte DROP patient_id');
        $this->addSql('ALTER TABLE acte DROP praticien_id');
        $this->addSql('ALTER TABLE facture DROP CONSTRAINT FK_FE8664106B899279');
        $this->addSql('ALTER TABLE facture DROP CONSTRAINT FK_FE8664106885AC1B');
        $this->addSql('ALTER TABLE facture DROP CONSTRAINT FK_FE866410A767B8C7');
        $this->addSql('DROP INDEX IDX_FE8664106B899279');
        $this->addSql('DROP INDEX IDX_FE8664102391866B');
        $this->addSql('DROP INDEX IDX_FE8664106885AC1B');
        $this->addSql('DROP INDEX UNIQ_FE866410A767B8C7');
        $this->addSql('ALTER TABLE facture DROP patient_id');
        $this->addSql('ALTER TABLE facture DROP praticien_id');
        $this->addSql('ALTER TABLE facture DROP gestionnaire_id');
        $this->addSql('ALTER TABLE facture DROP acte_id');
    }
}
