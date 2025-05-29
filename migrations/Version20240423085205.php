<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423085205 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE informations_facturation_utilisateur DROP FOREIGN KEY FK_CADA1A16A76ED395');
        $this->addSql('DROP INDEX UNIQ_CADA1A16A76ED395 ON informations_facturation_utilisateur');
        $this->addSql('ALTER TABLE informations_facturation_utilisateur CHANGE user_id profile_id BIGINT UNSIGNED NOT NULL');
        $this->addSql('ALTER TABLE informations_facturation_utilisateur ADD CONSTRAINT FK_CADA1A16CCFA12B8 FOREIGN KEY (profile_id) REFERENCES `wp_users` (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CADA1A16CCFA12B8 ON informations_facturation_utilisateur (profile_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE informations_facturation_utilisateur DROP FOREIGN KEY FK_CADA1A16CCFA12B8');
        $this->addSql('DROP INDEX UNIQ_CADA1A16CCFA12B8 ON informations_facturation_utilisateur');
        $this->addSql('ALTER TABLE informations_facturation_utilisateur CHANGE profile_id user_id BIGINT UNSIGNED NOT NULL');
        $this->addSql('ALTER TABLE informations_facturation_utilisateur ADD CONSTRAINT FK_CADA1A16A76ED395 FOREIGN KEY (user_id) REFERENCES wp_users (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CADA1A16A76ED395 ON informations_facturation_utilisateur (user_id)');
    }
}
