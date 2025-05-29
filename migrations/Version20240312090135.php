<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240312090135 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_unique_data DROP INDEX UNIQ_C26001FACCF9E01E, ADD INDEX IDX_C26001FACCF9E01E (departement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_unique_data DROP INDEX IDX_C26001FACCF9E01E, ADD UNIQUE INDEX UNIQ_C26001FACCF9E01E (departement_id)');
    }
}
