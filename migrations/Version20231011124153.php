<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231011124153 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE stamp (
        id INT AUTO_INCREMENT NOT NULL,
        reference_sococodami VARCHAR(255) DEFAULT NULL,
        reference_sococodami_bis VARCHAR(255) DEFAULT NULL,
        txt_faciale VARCHAR(255) DEFAULT NULL,
        num_tirage VARCHAR(255) DEFAULT NULL,
        numero VARCHAR(255) DEFAULT NULL,
        numero_long_yvert VARCHAR(255) DEFAULT NULL,
        date_debut_tirage DATETIME DEFAULT NULL,
        date_fin_tirage DATETIME DEFAULT NULL,
        presse VARCHAR(255) DEFAULT NULL,
        date_parution DATETIME DEFAULT NULL,
        existe_autoadhesifs TINYINT(1) DEFAULT NULL,
        memo_cd VARCHAR(255) DEFAULT NULL,
        tirage INT NOT NULL,
        qt_tp_presentation INT NOT NULL,
        titre VARCHAR(255) DEFAULT NULL,
        journe_tirage VARCHAR(255) DEFAULT NULL,
        num_superieur INT NOT NULL,
        num_inferieur INT NOT NULL,
        remarque VARCHAR(255) DEFAULT NULL,
        commentaire_tirage VARCHAR(255) DEFAULT NULL,
        PRIMARY KEY(id)
    ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }


    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE stamp (id INT AUTO_INCREMENT NOT NULL, reference_sococodami VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, reference_sococodami_bis VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, txt_faciale VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, num_tirage VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, numero VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, numero_long_yvert VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_debut_tirage DATETIME DEFAULT NULL, date_fin_tirage DATETIME DEFAULT NULL, presse VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_parution DATETIME DEFAULT NULL, existe_autoadhesifs TINYINT(1) DEFAULT NULL, memo_cd VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, tirage INT NOT NULL, qt_tp_presentation INT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, journe_tirage VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, num_superieur INT NOT NULL, num_inferieur INT NOT NULL, remarque VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, commentaire_tirage VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
    }
}
