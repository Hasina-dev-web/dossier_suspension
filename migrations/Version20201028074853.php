<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201028074853 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dossier_suspension (id INT AUTO_INCREMENT NOT NULL, date_depot VARCHAR(255) NOT NULL, sous_dossier VARCHAR(255) NOT NULL, provision VARCHAR(255) DEFAULT NULL, decision_attaque LONGTEXT NOT NULL, ref_dos VARCHAR(255) NOT NULL, demandeur LONGTEXT NOT NULL, tel_demandeur VARCHAR(255) DEFAULT NULL, email_demandeur VARCHAR(255) DEFAULT NULL, defendeur LONGTEXT NOT NULL, tel_defendeur VARCHAR(255) DEFAULT NULL, email_defendeur VARCHAR(255) DEFAULT NULL, signification VARCHAR(255) DEFAULT NULL, depot_signification VARCHAR(255) DEFAULT NULL, depot_memoire VARCHAR(255) DEFAULT NULL, notif_memoire VARCHAR(255) DEFAULT NULL, ref_ordonnance LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE dossier_suspension');
    }
}
