<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250609102435 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE dbo_composants_haumea (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, num_element INT DEFAULT NULL, code_substance VARCHAR(9) DEFAULT NULL, num_composant INT DEFAULT NULL, code_unite_dosage INT DEFAULT NULL, code_nom_substance VARCHAR(9) DEFAULT NULL, code_nature INT DEFAULT NULL, qte_dosage INT DEFAULT NULL, dosage_libra VARCHAR(100) DEFAULT NULL, dosage_libra_typo VARCHAR(255) DEFAULT NULL, cep VARCHAR(100) DEFAULT NULL, num_ordre_edit INT DEFAULT NULL, rem_composants VARCHAR(255) DEFAULT NULL, date_creation DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', date_dern_modif DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', indic_valide TINYINT(1) DEFAULT NULL, code_modif DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE dbo_contact_haumea (id INT AUTO_INCREMENT NOT NULL, code_contact VARCHAR(9) DEFAULT NULL, code_pays INT DEFAULT NULL, code_groupe_labo VARCHAR(9) DEFAULT NULL, nom_contact VARCHAR(255) DEFAULT NULL, lib_rech VARCHAR(255) DEFAULT NULL, code_amm VARCHAR(9) DEFAULT NULL, code_libra VARCHAR(9) DEFAULT NULL, code_muse VARCHAR(9) DEFAULT NULL, nom_contact_libra VARCHAR(255) DEFAULT NULL, adresse_contact VARCHAR(200) DEFAULT NULL, adresse_compl VARCHAR(200) DEFAULT NULL, code_post VARCHAR(20) DEFAULT NULL, nom_ville VARCHAR(100) DEFAULT NULL, tel_contact VARCHAR(50) DEFAULT NULL, fax_contact VARCHAR(50) DEFAULT NULL, nom_responsable VARCHAR(50) DEFAULT NULL, indic_candidat TINYINT(1) DEFAULT NULL, date_creation DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', date_dern_modif DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', code_origine VARCHAR(9) DEFAULT NULL, rem_contact VARCHAR(255) DEFAULT NULL, flag_actif INT DEFAULT NULL, code_modif DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE dbo_dossier_haumea (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, code_dossier VARCHAR(50) DEFAULT NULL, code_nature_code INT DEFAULT NULL, num_ordre_edit INT DEFAULT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, rem_dossier VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE dbo_noms_substance_haumea (id INT AUTO_INCREMENT NOT NULL, code_nom_substance VARCHAR(9) DEFAULT NULL, code_substance VARCHAR(9) DEFAULT NULL, nom_substance VARCHAR(255) DEFAULT NULL, lib_rech VARCHAR(255) DEFAULT NULL, code_denom INT DEFAULT NULL, code_origine_nom INT DEFAULT NULL, indic_valide TINYINT(1) DEFAULT NULL, nom_valide_par VARCHAR(9) DEFAULT NULL, indic_candidat TINYINT(1) DEFAULT NULL, date_creation DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', date_dern_modif DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE dbo_vuhaumea (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, code_cis VARCHAR(8) DEFAULT NULL, code_dossier VARCHAR(12) DEFAULT NULL, code_produit VARCHAR(9) DEFAULT NULL, code_innovation INT DEFAULT NULL, code_autorisation INT DEFAULT NULL, nom_vu VARCHAR(255) DEFAULT NULL, lib_rech VARCHAR(255) DEFAULT NULL, code_vucommun VARCHAR(8) DEFAULT NULL, num_dossier_commun INT DEFAULT NULL, code_vuprinceps VARCHAR(8) DEFAULT NULL, date_amm DATE DEFAULT NULL, rem_vu VARCHAR(200) DEFAULT NULL, indic_valide TINYINT(1) DEFAULT NULL, nom_valide_par VARCHAR(9) DEFAULT NULL, date_creation DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', date_dern_modif DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', date_autorisation DATE DEFAULT NULL, code_origine VARCHAR(9) DEFAULT NULL, commentaire_vu VARCHAR(255) DEFAULT NULL, rem_notes VARCHAR(255) DEFAULT NULL, flag_nouvelle INT DEFAULT NULL, code_statut INT DEFAULT NULL, statut_qualif INT DEFAULT NULL, code_modif DOUBLE PRECISION DEFAULT NULL, code_pays_provenance INT DEFAULT NULL, nom_vutypo LONGTEXT DEFAULT NULL, nom_court VARCHAR(200) DEFAULT NULL, nom_court_typo LONGTEXT DEFAULT NULL, text_solvants VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE dbo_vutitulaires_haumea (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, code_contact VARCHAR(9) DEFAULT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, identite_provisoire VARCHAR(255) DEFAULT NULL, rem_commentaire VARCHAR(255) DEFAULT NULL, indic_valide TINYINT(1) DEFAULT NULL, date_creation DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', date_dern_modif DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', code_modif DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE dbo_composants_haumea
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE dbo_contact_haumea
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE dbo_dossier_haumea
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE dbo_noms_substance_haumea
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE dbo_vuhaumea
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE dbo_vutitulaires_haumea
        SQL);
    }
}
