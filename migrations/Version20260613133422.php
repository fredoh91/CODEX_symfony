<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260613133422 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE EI_MedDRA_code_cis (id INT AUTO_INCREMENT NOT NULL, code_cis VARCHAR(8) DEFAULT NULL, code_atc VARCHAR(9) DEFAULT NULL, pt_code INT DEFAULT NULL, pt_name_en VARCHAR(255) DEFAULT NULL, pt_name_fr VARCHAR(255) DEFAULT NULL, frequence VARCHAR(255) DEFAULT NULL, libelle_brut LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE EI_MedDRA_code_cis
        SQL);
    }
}
