<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240308003619 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_departement (id INT AUTO_INCREMENT NOT NULL, user_id BIGINT UNSIGNED NOT NULL, departement_id INT NOT NULL, UNIQUE INDEX UNIQ_686D92F6A76ED395 (user_id), UNIQUE INDEX UNIQ_686D92F6CCF9E01E (departement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_departement ADD CONSTRAINT FK_686D92F6A76ED395 FOREIGN KEY (user_id) REFERENCES `wp_users` (id)');
        $this->addSql('ALTER TABLE user_departement ADD CONSTRAINT FK_686D92F6CCF9E01E FOREIGN KEY (departement_id) REFERENCES departements (id)');
        $this->addSql('DROP INDEX option_name ON wp_options');
        $this->addSql('DROP INDEX term_id_taxonomy ON wp_term_taxonomy');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_departement DROP FOREIGN KEY FK_686D92F6A76ED395');
        $this->addSql('ALTER TABLE user_departement DROP FOREIGN KEY FK_686D92F6CCF9E01E');
        $this->addSql('DROP TABLE user_departement');
        $this->addSql('CREATE UNIQUE INDEX option_name ON wp_options (option_name)');
        $this->addSql('CREATE UNIQUE INDEX term_id_taxonomy ON wp_term_taxonomy (term_id, taxonomy)');
    }
}
