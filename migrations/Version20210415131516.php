<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210415131516 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acte ALTER motif TYPE TEXT');
        $this->addSql('ALTER TABLE acte ALTER motif DROP DEFAULT');
        $this->addSql('ALTER TABLE facture ALTER descriptif TYPE TEXT');
        $this->addSql('ALTER TABLE facture ALTER descriptif DROP DEFAULT');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE acte ALTER motif TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE acte ALTER motif DROP DEFAULT');
        $this->addSql('ALTER TABLE facture ALTER descriptif TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE facture ALTER descriptif DROP DEFAULT');
    }
}
