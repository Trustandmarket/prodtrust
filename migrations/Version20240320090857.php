<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240320090857 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_unique_data ADD last_name VARCHAR(255) DEFAULT NULL, ADD first_name VARCHAR(255) DEFAULT NULL, ADD bdaytime VARCHAR(100) DEFAULT NULL, ADD sexe VARCHAR(30) DEFAULT NULL, ADD nationality_country VARCHAR(20) DEFAULT NULL, ADD residence_country VARCHAR(20) DEFAULT NULL, ADD billing_email VARCHAR(50) DEFAULT NULL, ADD telephone VARCHAR(100) DEFAULT NULL, ADD raison_sociale VARCHAR(255) DEFAULT NULL, ADD post_code VARCHAR(100) DEFAULT NULL, ADD siret VARCHAR(100) DEFAULT NULL, ADD pays_domicile VARCHAR(20) DEFAULT NULL, ADD numero_nom_rue_domicile VARCHAR(255) DEFAULT NULL, ADD code_postal_domicile VARCHAR(100) DEFAULT NULL, ADD ville_domicile VARCHAR(100) DEFAULT NULL, ADD pays_livraison VARCHAR(20) DEFAULT NULL, ADD numero_nom_rue_livraison VARCHAR(255) DEFAULT NULL, ADD code_postal_livraison VARCHAR(100) DEFAULT NULL, ADD ville_livraison VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_unique_data DROP last_name, DROP first_name, DROP bdaytime, DROP sexe, DROP nationality_country, DROP residence_country, DROP billing_email, DROP telephone, DROP raison_sociale, DROP post_code, DROP siret, DROP pays_domicile, DROP numero_nom_rue_domicile, DROP code_postal_domicile, DROP ville_domicile, DROP pays_livraison, DROP numero_nom_rue_livraison, DROP code_postal_livraison, DROP ville_livraison');
    }
}
