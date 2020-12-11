<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201117113056 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis_president ADD dossier_suspension_id INT NOT NULL');
        $this->addSql('ALTER TABLE avis_president ADD CONSTRAINT FK_C8DECDD5471C1988 FOREIGN KEY (dossier_suspension_id) REFERENCES dossier_suspension (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C8DECDD5471C1988 ON avis_president (dossier_suspension_id)');
        $this->addSql('ALTER TABLE dossier_suspension CHANGE signification signification DATETIME NOT NULL, CHANGE depot_signification depot_signification DATETIME NOT NULL, CHANGE depot_memoire depot_memoire DATETIME NOT NULL, CHANGE notif_memoire notif_memoire DATETIME NOT NULL, CHANGE date_decision date_decision DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis_president DROP FOREIGN KEY FK_C8DECDD5471C1988');
        $this->addSql('DROP INDEX UNIQ_C8DECDD5471C1988 ON avis_president');
        $this->addSql('ALTER TABLE avis_president DROP dossier_suspension_id');
        $this->addSql('ALTER TABLE dossier_suspension CHANGE signification signification DATETIME DEFAULT NULL, CHANGE depot_signification depot_signification DATETIME DEFAULT NULL, CHANGE depot_memoire depot_memoire DATETIME DEFAULT NULL, CHANGE notif_memoire notif_memoire DATETIME DEFAULT NULL, CHANGE date_decision date_decision DATETIME DEFAULT NULL');
    }
}
