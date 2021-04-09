<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330102253 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acte ADD gestionnaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE acte ADD CONSTRAINT FK_9EC413266885AC1B FOREIGN KEY (gestionnaire_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_9EC413266885AC1B ON acte (gestionnaire_id)');
        $this->addSql('DROP INDEX uniq_fe866410a767b8c7');
        $this->addSql('CREATE INDEX IDX_FE866410A767B8C7 ON facture (acte_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE acte DROP CONSTRAINT FK_9EC413266885AC1B');
        $this->addSql('DROP INDEX IDX_9EC413266885AC1B');
        $this->addSql('ALTER TABLE acte DROP gestionnaire_id');
        $this->addSql('DROP INDEX IDX_FE866410A767B8C7');
        $this->addSql('CREATE UNIQUE INDEX uniq_fe866410a767b8c7 ON facture (acte_id)');
    }
}
