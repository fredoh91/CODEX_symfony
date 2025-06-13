<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250607192410 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE codexpicto_grossesse (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, num_presentation INT DEFAULT NULL, nom_presentation VARCHAR(255) DEFAULT NULL, code_cip INT DEFAULT NULL, code_cip13 VARCHAR(255) DEFAULT NULL, statut_comm INT DEFAULT NULL, code_picto INT DEFAULT NULL, lib_picto VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE codexpresentation (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, num_presentation INT DEFAULT NULL, nom_presentation VARCHAR(255) DEFAULT NULL, code_cip INT DEFAULT NULL, code_cip13 VARCHAR(255) DEFAULT NULL, statut_comm INT DEFAULT NULL, info_comm_court VARCHAR(255) DEFAULT NULL, info_comm_long VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE codexvoie_admin (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, code_voie INT DEFAULT NULL, lib_abr VARCHAR(9) DEFAULT NULL, lib_court VARCHAR(80) DEFAULT NULL, lib_long VARCHAR(255) DEFAULT NULL, lib_rech VARCHAR(255) DEFAULT NULL, num_ordre_edit INT DEFAULT NULL, indic_valide TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE savu (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, code_cis VARCHAR(8) DEFAULT NULL, code_dossier VARCHAR(12) DEFAULT NULL, nom_vu VARCHAR(255) DEFAULT NULL, num_element INT DEFAULT NULL, code_substance VARCHAR(9) DEFAULT NULL, num_composant INT DEFAULT NULL, code_unite_dosage INT DEFAULT NULL, code_nature INT DEFAULT NULL, dosage_libra_typo VARCHAR(255) DEFAULT NULL, dosage_libra VARCHAR(100) DEFAULT NULL, lib_court VARCHAR(80) DEFAULT NULL, nom_substance VARCHAR(255) DEFAULT NULL, code_produit VARCHAR(9) DEFAULT NULL, lib_nature VARCHAR(255) DEFAULT NULL, lib_forme_ph VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE vuacteurs_acteur (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, code_role_act INT DEFAULT NULL, indic_valide TINYINT(1) DEFAULT NULL, code_acteur INT DEFAULT NULL, code_tigre INT DEFAULT NULL, nom_acteur_long VARCHAR(255) DEFAULT NULL, adresse VARCHAR(200) DEFAULT NULL, adresse_compl_expl VARCHAR(200) DEFAULT NULL, code_post_expl VARCHAR(20) DEFAULT NULL, nom_ville_expl VARCHAR(100) DEFAULT NULL, complement VARCHAR(200) DEFAULT NULL, tel VARCHAR(50) DEFAULT NULL, fax VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE vudelivrance (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, code_delivrance INT DEFAULT NULL, lib_long VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE vuutil (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, code_cis VARCHAR(8) DEFAULT NULL, code_dossier VARCHAR(12) DEFAULT NULL, nom_vu VARCHAR(255) DEFAULT NULL, dbo_autorisation_lib_abr VARCHAR(9) DEFAULT NULL, dbo_classe_atc_lib_abr VARCHAR(9) DEFAULT NULL, dbo_classe_atc_lib_court VARCHAR(80) DEFAULT NULL, lib_court VARCHAR(80) DEFAULT NULL, code_contact VARCHAR(9) DEFAULT NULL, nom_contact_libra VARCHAR(255) DEFAULT NULL, adresse_contact VARCHAR(200) DEFAULT NULL, adresse_compl VARCHAR(200) DEFAULT NULL, code_post VARCHAR(20) DEFAULT NULL, nom_ville VARCHAR(100) DEFAULT NULL, tel_contact VARCHAR(50) DEFAULT NULL, fax_contact VARCHAR(50) DEFAULT NULL, dbo_pays_lib_court VARCHAR(80) DEFAULT NULL, dbo_statut_speci_lib_abr VARCHAR(9) DEFAULT NULL, statut_abrege VARCHAR(255) DEFAULT NULL, code_acteur INT DEFAULT NULL, code_tigre INT DEFAULT NULL, nom_acteur_long VARCHAR(255) DEFAULT NULL, adresse VARCHAR(200) DEFAULT NULL, adresse_compl_expl VARCHAR(200) DEFAULT NULL, code_post_expl VARCHAR(20) DEFAULT NULL, nom_ville_expl VARCHAR(100) DEFAULT NULL, complement VARCHAR(200) DEFAULT NULL, tel VARCHAR(50) DEFAULT NULL, fax VARCHAR(50) DEFAULT NULL, dbo_pays_lib_abr VARCHAR(9) DEFAULT NULL, code_produit VARCHAR(9) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE codexpicto_grossesse
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE codexpresentation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE codexvoie_admin
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE savu
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE vuacteurs_acteur
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE vudelivrance
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE vuutil
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}
