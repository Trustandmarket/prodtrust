<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240422111915 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE informations_facturation_utilisateur (id INT AUTO_INCREMENT NOT NULL, user_id BIGINT UNSIGNED NOT NULL, non_ou_societe VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(70) NOT NULL, code_postal VARCHAR(50) NOT NULL, pays VARCHAR(10) NOT NULL, numero_tva VARCHAR(100) DEFAULT NULL, UNIQUE INDEX UNIQ_CADA1A16A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE informations_facturation_utilisateur ADD CONSTRAINT FK_CADA1A16A76ED395 FOREIGN KEY (user_id) REFERENCES `wp_users` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE informations_facturation_utilisateur DROP FOREIGN KEY FK_CADA1A16A76ED395');
        $this->addSql('DROP TABLE informations_facturation_utilisateur');
    }
}
