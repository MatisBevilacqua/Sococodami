<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231107100828 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments ADD comments_num VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE stamp CHANGE commentaire_tirage commentaire_tirage VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE stamp_image CHANGE stamp stamp VARCHAR(255) NOT NULL, CHANGE image image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE stamp CHANGE commentaire_tirage commentaire_tirage TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE stamp_image CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE stamp stamp VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE comments DROP comments_num');
    }
}
