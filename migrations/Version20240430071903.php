<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240430071903 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement ADD prochain_forfait_id INT DEFAULT NULL, ADD tag VARCHAR(20) DEFAULT NULL');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB87555C1F FOREIGN KEY (prochain_forfait_id) REFERENCES offre_interne (id)');
        $this->addSql('CREATE INDEX IDX_351268BB87555C1F ON abonnement (prochain_forfait_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB87555C1F');
        $this->addSql('DROP INDEX IDX_351268BB87555C1F ON abonnement');
        $this->addSql('ALTER TABLE abonnement DROP prochain_forfait_id, DROP tag');
    }
}
