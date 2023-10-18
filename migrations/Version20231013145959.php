<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231013145959 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE stamp (id INT AUTO_INCREMENT NOT NULL, reference_sococodami VARCHAR(255) NOT NULL, reference_sococodami_bis VARCHAR(255) NOT NULL, txt_faciale VARCHAR(255) DEFAULT NULL, num_tirage VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, numero_long_yvert VARCHAR(255) DEFAULT NULL, date_debut_tirage VARCHAR(255) DEFAULT NULL, date_fin_tirage VARCHAR(255) DEFAULT NULL, presse VARCHAR(255) DEFAULT NULL, date_parution VARCHAR(255) DEFAULT NULL, existe_autoadhesifs VARCHAR(255) DEFAULT NULL, memo_cd VARCHAR(255) DEFAULT NULL, tirage VARCHAR(255) DEFAULT NULL, qt_tp_presentation VARCHAR(255) DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, journe_tirage VARCHAR(255) DEFAULT NULL, num_superieur VARCHAR(255) DEFAULT NULL, num_inferieur VARCHAR(255) DEFAULT NULL, remarque VARCHAR(255) DEFAULT NULL, commentaire_tirage VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE stamp');
    }
}
