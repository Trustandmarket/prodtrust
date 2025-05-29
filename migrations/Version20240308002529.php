<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Platforms\MySQL80Platform;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240308002529 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE chat_message (id INT AUTO_INCREMENT NOT NULL, expediteur_id BIGINT UNSIGNED NOT NULL, destinataires_id BIGINT UNSIGNED NOT NULL, message LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_envoie DATETIME NOT NULL, date_reception DATETIME NOT NULL, INDEX IDX_FAB3FC1610335F61 (expediteur_id), INDEX IDX_FAB3FC164DDF0935 (destinataires_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE departements (id INT AUTO_INCREMENT NOT NULL, region VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, departement VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, departement_slug VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created DATETIME DEFAULT NULL, updated DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_CF7489B285BB9CAA (departement_slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE ext_translations_wp_commentmeta (id INT AUTO_INCREMENT NOT NULL, foreign_key BIGINT UNSIGNED DEFAULT NULL, locale VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, object_class VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, field VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, content LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_5FAAB7EA7E366551 (foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE ext_translations_wp_comments (id INT AUTO_INCREMENT NOT NULL, foreign_key BIGINT UNSIGNED DEFAULT NULL, locale VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, object_class VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, field VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, content LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_EA62C3507E366551 (foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE ext_translations_wp_options (id INT AUTO_INCREMENT NOT NULL, foreign_key BIGINT UNSIGNED DEFAULT NULL, locale VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, object_class VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, field VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, content LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_FCAFB13A7E366551 (foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE ext_translations_wp_postmeta (id INT AUTO_INCREMENT NOT NULL, foreign_key BIGINT UNSIGNED DEFAULT NULL, locale VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, object_class VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, field VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, content LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_7622D5C67E366551 (foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE ext_translations_wp_posts (id INT AUTO_INCREMENT NOT NULL, foreign_key BIGINT UNSIGNED DEFAULT NULL, locale VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, object_class VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, field VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, content LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_34826E927E366551 (foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE ext_translations_wp_term_taxonomy (id INT AUTO_INCREMENT NOT NULL, foreign_key BIGINT UNSIGNED DEFAULT NULL, locale VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, object_class VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, field VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, content LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_1899113E7E366551 (foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE ext_translations_wp_terms (id INT AUTO_INCREMENT NOT NULL, foreign_key BIGINT UNSIGNED DEFAULT NULL, locale VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, object_class VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, field VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, content LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_347DEB197E366551 (foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE ext_translations_wp_usermeta (id INT AUTO_INCREMENT NOT NULL, foreign_key BIGINT UNSIGNED DEFAULT NULL, locale VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, object_class VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, field VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, content LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_C473393E7E366551 (foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE newsletter (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, user_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, status VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id BIGINT UNSIGNED NOT NULL, selector VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, hashed_token VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_channels (id INT AUTO_INCREMENT NOT NULL, first_user_id BIGINT UNSIGNED DEFAULT NULL, second_user_id BIGINT UNSIGNED DEFAULT NULL, name VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_710AC07C5E237E06 (name), INDEX IDX_710AC07CB4E2BF69 (first_user_id), INDEX IDX_710AC07CB02C53F8 (second_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_commentmeta (meta_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, comment_id BIGINT UNSIGNED NOT NULL, meta_key VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, meta_value LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, PRIMARY KEY(meta_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_comments (comment_ID BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, comment_post_ID BIGINT UNSIGNED NOT NULL, comment_author TINYTEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, comment_author_email VARCHAR(100) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, comment_author_url VARCHAR(200) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, comment_author_IP VARCHAR(100) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, comment_date DATETIME DEFAULT \'2000-01-01 00:00:00\' NOT NULL, comment_date_gmt DATETIME DEFAULT \'2000-01-01 00:00:00\' NOT NULL, comment_content TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, comment_karma INT NOT NULL, comment_approved VARCHAR(20) CHARACTER SET utf8mb3 DEFAULT \'1\' NOT NULL COLLATE `utf8mb3_general_ci`, comment_agent VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, comment_type VARCHAR(20) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, comment_parent BIGINT UNSIGNED NOT NULL, user_id BIGINT UNSIGNED NOT NULL, INDEX comment_post_ID (comment_post_ID), INDEX comment_approved_date_gmt (comment_approved, comment_date_gmt), INDEX comment_date_gmt (comment_date_gmt), INDEX comment_parent (comment_parent), INDEX woo_idx_comment_type (comment_type), INDEX comment_author_email (comment_author_email), PRIMARY KEY(comment_ID)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_messages (id INT AUTO_INCREMENT NOT NULL, channel_id INT NOT NULL, addressee_id BIGINT UNSIGNED NOT NULL, sender_id BIGINT UNSIGNED NOT NULL, content LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, sent_date DATETIME NOT NULL, receipt_date DATETIME DEFAULT NULL, INDEX IDX_591C3C5C72F5A1AA (channel_id), INDEX IDX_591C3C5C2261B4C3 (addressee_id), INDEX IDX_591C3C5CF624B39D (sender_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_options (option_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, option_name VARCHAR(191) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, option_value LONGTEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, autoload VARCHAR(20) CHARACTER SET utf8mb3 DEFAULT \'yes\' NOT NULL COLLATE `utf8mb3_general_ci`, UNIQUE INDEX option_name (option_name), PRIMARY KEY(option_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_postmeta (meta_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, post_id BIGINT UNSIGNED NOT NULL, meta_key VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, meta_value LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, INDEX post_id (post_id), INDEX meta_key (meta_key), PRIMARY KEY(meta_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_posts (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, post_author BIGINT UNSIGNED NOT NULL, post_date DATETIME DEFAULT \'2000-01-01 00:00:00\' NOT NULL, post_date_gmt DATETIME DEFAULT \'2000-01-01 00:00:00\' NOT NULL, post_content LONGTEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, post_title TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, post_excerpt TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, post_status VARCHAR(20) CHARACTER SET utf8mb3 DEFAULT \'publish\' NOT NULL COLLATE `utf8mb3_general_ci`, comment_status VARCHAR(20) CHARACTER SET utf8mb3 DEFAULT \'open\' NOT NULL COLLATE `utf8mb3_general_ci`, ping_status VARCHAR(20) CHARACTER SET utf8mb3 DEFAULT \'open\' NOT NULL COLLATE `utf8mb3_general_ci`, post_password VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, post_name VARCHAR(200) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, to_ping TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, pinged TEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, post_modified DATETIME DEFAULT \'2000-01-01 00:00:00\' NOT NULL, post_modified_gmt DATETIME DEFAULT \'2000-01-01 00:00:00\' NOT NULL, post_content_filtered LONGTEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, post_parent BIGINT UNSIGNED NOT NULL, guid VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, menu_order INT NOT NULL, post_type VARCHAR(20) CHARACTER SET utf8mb3 DEFAULT \'post\' NOT NULL COLLATE `utf8mb3_general_ci`, post_mime_type VARCHAR(100) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, comment_count BIGINT NOT NULL, INDEX post_parent (post_parent), INDEX post_author (post_author), INDEX post_name (post_name), INDEX type_status_date (post_type, post_status, post_date, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_term_relationships (object_id BIGINT UNSIGNED NOT NULL, term_taxonomy_id BIGINT UNSIGNED NOT NULL, term_order INT NOT NULL, INDEX term_taxonomy_id (term_taxonomy_id), PRIMARY KEY(object_id, term_taxonomy_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_term_taxonomy (term_taxonomy_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, term_id BIGINT UNSIGNED NOT NULL, taxonomy VARCHAR(32) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, description LONGTEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, parent BIGINT UNSIGNED NOT NULL, count BIGINT NOT NULL, UNIQUE INDEX term_id_taxonomy (term_id, taxonomy), INDEX taxonomy (taxonomy), PRIMARY KEY(term_taxonomy_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_termmeta (meta_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, term_id BIGINT UNSIGNED NOT NULL, meta_key VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, meta_value LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, INDEX term_id (term_id), INDEX meta_key (meta_key), PRIMARY KEY(meta_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_terms (term_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(200) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, slug VARCHAR(200) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, term_group BIGINT NOT NULL, term_price VARCHAR(100) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, term_icon VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, INDEX name (name), INDEX slug (slug), PRIMARY KEY(term_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_usermeta (umeta_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, user_id BIGINT UNSIGNED NOT NULL, meta_key VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, meta_value LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, INDEX user_id (user_id), INDEX meta_key (meta_key), PRIMARY KEY(umeta_id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('CREATE TABLE wp_users (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, user_nicename VARCHAR(50) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, user_registered DATETIME NOT NULL, user_activation_key VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, user_status INT NOT NULL, display_name VARCHAR(250) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, username_canonical VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, email_canonical VARCHAR(180) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, enabled INT NOT NULL, date_naissance VARCHAR(190) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, roles JSON NOT NULL, last_activity_at VARCHAR(190) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, userEmail VARCHAR(180) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, userPass VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_general_ci`, landing_page VARCHAR(250) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, is_verified TINYINT(1) NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_A67F1DA0D96FBF (email_canonical), UNIQUE INDEX UNIQ_A67F1D1F76FA2 (userEmail), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE chat_message');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE departements');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE ext_translations_wp_commentmeta');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE ext_translations_wp_comments');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE ext_translations_wp_options');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE ext_translations_wp_postmeta');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE ext_translations_wp_posts');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE ext_translations_wp_term_taxonomy');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE ext_translations_wp_terms');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE ext_translations_wp_usermeta');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE newsletter');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE reset_password_request');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_channels');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_commentmeta');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_comments');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_messages');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_options');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_postmeta');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_posts');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_term_relationships');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_term_taxonomy');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_termmeta');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_terms');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_usermeta');
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof MySQL80Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL80Platform'."
        );

        $this->addSql('DROP TABLE wp_users');
    }
}
