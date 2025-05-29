<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240319202257 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement ADD abonnement_actif TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE departements ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME DEFAULT NULL, DROP created, DROP updated');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement DROP abonnement_actif');
        $this->addSql('ALTER TABLE departements ADD updated DATETIME DEFAULT NULL, DROP created_at, CHANGE updated_at created DATETIME DEFAULT NULL');
    }
}
