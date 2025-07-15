<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250714232929 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE mocatordocument (id INT AUTO_INCREMENT NOT NULL, doc_id INT DEFAULT NULL, grp_id INT DEFAULT NULL, not_id INT DEFAULT NULL, date_arch DATETIME DEFAULT NULL, date_notif DATETIME DEFAULT NULL, srce_name VARCHAR(255) DEFAULT NULL, srce_size VARCHAR(255) DEFAULT NULL, srce_last_upd DATETIME DEFAULT NULL, native_format VARCHAR(255) DEFAULT NULL, server_name VARCHAR(255) DEFAULT NULL, rem VARCHAR(255) DEFAULT NULL, author VARCHAR(255) DEFAULT NULL, seance_id VARCHAR(25) DEFAULT NULL, date_seance DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE mocatordocument_html (id INT AUTO_INCREMENT NOT NULL, hdoc_id INT DEFAULT NULL, spec_id VARCHAR(8) DEFAULT NULL, doc_id INT DEFAULT NULL, typ_id INT DEFAULT NULL, hname VARCHAR(12) DEFAULT NULL, date_conv DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE mocatordocument
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE mocatordocument_html
        SQL);
    }
}
