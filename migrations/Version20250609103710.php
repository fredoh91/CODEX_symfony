<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250609103710 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE dashboard_rs5 (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, code_cis VARCHAR(8) DEFAULT NULL, code_dossier VARCHAR(12) DEFAULT NULL, nom_vu VARCHAR(255) DEFAULT NULL, type_procedure VARCHAR(9) DEFAULT NULL, code_atc VARCHAR(9) DEFAULT NULL, lib_atc VARCHAR(80) DEFAULT NULL, forme_pharma VARCHAR(50) DEFAULT NULL, voie_admin VARCHAR(80) DEFAULT NULL, statut_specialite VARCHAR(9) DEFAULT NULL, code_terme INT DEFAULT NULL, code_produit VARCHAR(9) DEFAULT NULL, indic_valide INT DEFAULT NULL, code_cip13 VARCHAR(13) DEFAULT NULL, nom_presentation VARCHAR(255) DEFAULT NULL, nom_substance VARCHAR(255) DEFAULT NULL, dosage_libra VARCHAR(100) DEFAULT NULL, classe_acp_lib_court VARCHAR(80) DEFAULT NULL, date_extract DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE dosage_rs (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(8) DEFAULT NULL, code_cis VARCHAR(8) DEFAULT NULL, nom_vu VARCHAR(255) DEFAULT NULL, dosage_int DOUBLE PRECISION DEFAULT NULL, dosage_unit VARCHAR(100) DEFAULT NULL, dosage_int_unit VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE dashboard_rs5
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE dosage_rs
        SQL);
    }
}
