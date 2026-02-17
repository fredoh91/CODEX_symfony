<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260217203307 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE famille_sub_simad (id INT AUTO_INCREMENT NOT NULL, productfamily VARCHAR(170) DEFAULT NULL, typ_sub VARCHAR(255) DEFAULT NULL, autre_txt VARCHAR(255) DEFAULT NULL, fl_actif TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sub_simad (id INT AUTO_INCREMENT NOT NULL, productfamily VARCHAR(170) DEFAULT NULL, topproductname VARCHAR(170) DEFAULT NULL, productname VARCHAR(250) DEFAULT NULL, creation_date VARCHAR(50) DEFAULT NULL, modification_date VARCHAR(50) DEFAULT NULL, unii_id VARCHAR(200) DEFAULT NULL, cas_id VARCHAR(200) DEFAULT NULL, is_product_enabled INT DEFAULT NULL, product_pv INT DEFAULT NULL, product_addicto INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE famille_sub_simad
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sub_simad
        SQL);
    }
}
