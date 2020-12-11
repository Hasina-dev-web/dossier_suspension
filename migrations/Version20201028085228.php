<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201028085228 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis_president (id INT AUTO_INCREMENT NOT NULL, dossier_suspension_id INT NOT NULL, nom VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, decision_premier_president LONGTEXT DEFAULT NULL, numero_decision VARCHAR(255) DEFAULT NULL, date_decision VARCHAR(255) DEFAULT NULL, INDEX IDX_C8DECDD5471C1988 (dossier_suspension_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avis_president ADD CONSTRAINT FK_C8DECDD5471C1988 FOREIGN KEY (dossier_suspension_id) REFERENCES dossier_suspension (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE avis_president');
    }
}
