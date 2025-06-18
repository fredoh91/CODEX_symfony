<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250618155444 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE savu ADD lib_rech_substance VARCHAR(255) DEFAULT NULL, ADD lib_rech_denomination VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_code_vu ON savu (code_vu)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_code_cis ON savu (code_cis)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_nom_vu ON savu (nom_vu)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_lib_rech_denomination ON savu (lib_rech_denomination)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_nom_substance ON savu (nom_substance)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_lib_rech_substance ON savu (lib_rech_substance)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vuutil ADD lib_rech_denomination VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_code_vu ON vuutil (code_vu)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_code_cis ON vuutil (code_cis)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_nom_vu ON vuutil (nom_vu)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idx_lib_rech_denomination ON vuutil (lib_rech_denomination)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP INDEX idx_code_vu ON savu
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_code_cis ON savu
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_nom_vu ON savu
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_lib_rech_denomination ON savu
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_nom_substance ON savu
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_lib_rech_substance ON savu
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE savu DROP lib_rech_substance, DROP lib_rech_denomination
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_code_vu ON vuutil
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_code_cis ON vuutil
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_nom_vu ON vuutil
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_lib_rech_denomination ON vuutil
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vuutil DROP lib_rech_denomination
        SQL);
    }
}
