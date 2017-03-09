<?php

namespace RybakDigital\UserBundle\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170309113401 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE acl_user_organisation_roles (user_id INT NOT NULL, organisation_id INT NOT NULL, role_id INT NOT NULL, INDEX IDX_CE073C21A76ED395 (user_id), INDEX IDX_CE073C219E6B1585 (organisation_id), INDEX IDX_CE073C21D60322AC (role_id), PRIMARY KEY(user_id, organisation_id, role_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_user_emails (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, email VARCHAR(128) DEFAULT NULL, created_at DATETIME DEFAULT NULL, validation_token VARCHAR(32) DEFAULT NULL, is_valid TINYINT(1) NOT NULL, validated_at DATETIME DEFAULT NULL, INDEX IDX_4458D345A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_users (id INT AUTO_INCREMENT NOT NULL, primary_email_id INT DEFAULT NULL, username VARCHAR(64) NOT NULL, firstname VARCHAR(64) DEFAULT NULL, lastname VARCHAR(64) DEFAULT NULL, salt VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, is_expired TINYINT(1) NOT NULL, is_locked TINYINT(1) NOT NULL, is_credentials_expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, credentials_expire_at DATETIME DEFAULT NULL, password_token VARCHAR(32) DEFAULT NULL, api_key VARCHAR(64) DEFAULT NULL, api_key_expires_at DATETIME DEFAULT NULL, last_login_at DATETIME DEFAULT NULL, created_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_901AE856F85E0677 (username), UNIQUE INDEX UNIQ_901AE856894DAC38 (primary_email_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_organisations (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(128) NOT NULL, description LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_organisation_parents (organisation_id INT NOT NULL, parent_id INT NOT NULL, INDEX IDX_4E06A28E9E6B1585 (organisation_id), INDEX IDX_4E06A28E727ACA70 (parent_id), PRIMARY KEY(organisation_id, parent_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_roles (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(128) NOT NULL, role VARCHAR(128) NOT NULL, UNIQUE INDEX UNIQ_32A7637857698A6A (role), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_groups (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, name VARCHAR(64) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_AB370E20727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_roles_to_groups (group_id INT NOT NULL, role_id INT NOT NULL, INDEX IDX_8427B613FE54D947 (group_id), INDEX IDX_8427B613D60322AC (role_id), PRIMARY KEY(group_id, role_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acl_user_organisation_roles ADD CONSTRAINT FK_CE073C21A76ED395 FOREIGN KEY (user_id) REFERENCES acl_users (id)');
        $this->addSql('ALTER TABLE acl_user_organisation_roles ADD CONSTRAINT FK_CE073C219E6B1585 FOREIGN KEY (organisation_id) REFERENCES acl_organisations (id)');
        $this->addSql('ALTER TABLE acl_user_organisation_roles ADD CONSTRAINT FK_CE073C21D60322AC FOREIGN KEY (role_id) REFERENCES acl_roles (id)');
        $this->addSql('ALTER TABLE acl_user_emails ADD CONSTRAINT FK_4458D345A76ED395 FOREIGN KEY (user_id) REFERENCES acl_users (id)');
        $this->addSql('ALTER TABLE acl_users ADD CONSTRAINT FK_901AE856894DAC38 FOREIGN KEY (primary_email_id) REFERENCES acl_user_emails (id)');
        $this->addSql('ALTER TABLE acl_organisation_parents ADD CONSTRAINT FK_4E06A28E9E6B1585 FOREIGN KEY (organisation_id) REFERENCES acl_organisations (id)');
        $this->addSql('ALTER TABLE acl_organisation_parents ADD CONSTRAINT FK_4E06A28E727ACA70 FOREIGN KEY (parent_id) REFERENCES acl_organisations (id)');
        $this->addSql('ALTER TABLE acl_groups ADD CONSTRAINT FK_AB370E20727ACA70 FOREIGN KEY (parent_id) REFERENCES acl_groups (id)');
        $this->addSql('ALTER TABLE acl_roles_to_groups ADD CONSTRAINT FK_8427B613FE54D947 FOREIGN KEY (group_id) REFERENCES acl_groups (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE acl_roles_to_groups ADD CONSTRAINT FK_8427B613D60322AC FOREIGN KEY (role_id) REFERENCES acl_roles (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE acl_users DROP FOREIGN KEY FK_901AE856894DAC38');
        $this->addSql('ALTER TABLE acl_user_organisation_roles DROP FOREIGN KEY FK_CE073C21A76ED395');
        $this->addSql('ALTER TABLE acl_user_emails DROP FOREIGN KEY FK_4458D345A76ED395');
        $this->addSql('ALTER TABLE acl_user_organisation_roles DROP FOREIGN KEY FK_CE073C219E6B1585');
        $this->addSql('ALTER TABLE acl_organisation_parents DROP FOREIGN KEY FK_4E06A28E9E6B1585');
        $this->addSql('ALTER TABLE acl_organisation_parents DROP FOREIGN KEY FK_4E06A28E727ACA70');
        $this->addSql('ALTER TABLE acl_user_organisation_roles DROP FOREIGN KEY FK_CE073C21D60322AC');
        $this->addSql('ALTER TABLE acl_roles_to_groups DROP FOREIGN KEY FK_8427B613D60322AC');
        $this->addSql('ALTER TABLE acl_groups DROP FOREIGN KEY FK_AB370E20727ACA70');
        $this->addSql('ALTER TABLE acl_roles_to_groups DROP FOREIGN KEY FK_8427B613FE54D947');
        $this->addSql('DROP TABLE acl_user_organisation_roles');
        $this->addSql('DROP TABLE acl_user_emails');
        $this->addSql('DROP TABLE acl_users');
        $this->addSql('DROP TABLE acl_organisations');
        $this->addSql('DROP TABLE acl_organisation_parents');
        $this->addSql('DROP TABLE acl_roles');
        $this->addSql('DROP TABLE acl_groups');
        $this->addSql('DROP TABLE acl_roles_to_groups');
    }
}
