<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250715132821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE dates_lancements_extractions (id INT AUTO_INCREMENT NOT NULL, date_debut_extraction DATETIME DEFAULT NULL, date_fin_extraction DATETIME DEFAULT NULL, nb_tables_extraites INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mocatordocument_xml (id INT AUTO_INCREMENT NOT NULL, xdoc_id INT DEFAULT NULL, code_vu VARCHAR(8) DEFAULT NULL, doc_id INT DEFAULT NULL, nature_doc VARCHAR(255) DEFAULT NULL, statut_doc VARCHAR(255) DEFAULT NULL, auteur VARCHAR(255) DEFAULT NULL, server_name VARCHAR(255) DEFAULT NULL, srce_name VARCHAR(255) DEFAULT NULL, srce_size INT DEFAULT NULL, srce_last_upd DATETIME DEFAULT NULL, native_format VARCHAR(255) DEFAULT NULL, version_dtd VARCHAR(255) DEFAULT NULL, doc_joint VARCHAR(255) DEFAULT NULL, num_ordre INT DEFAULT NULL, date_maj_amm DATETIME DEFAULT NULL, date_valide DATETIME DEFAULT NULL, date_liv DATETIME DEFAULT NULL, date_arch DATETIME DEFAULT NULL, commentaire VARCHAR(255) DEFAULT NULL, INDEX idx_code_vu (code_vu), INDEX idx_doc_id (doc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_doc_id ON mocatordocument (doc_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_doc_id ON mocatordocument_html (doc_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_h_name ON mocatordocument_html (hname)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE dates_lancements_extractions
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mocatordocument_xml
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_doc_id ON mocatordocument
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_doc_id ON mocatordocument_html
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_h_name ON mocatordocument_html
        SQL);
    }
}
