<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210311162513 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acta (id INT AUTO_INCREMENT NOT NULL, archivo_id INT NOT NULL, usuario_id INT NOT NULL, texto VARCHAR(255) NOT NULL, fecha DATE NOT NULL, INDEX IDX_99A9D73F46EBF93B (archivo_id), INDEX IDX_99A9D73FDB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acta ADD CONSTRAINT FK_99A9D73F46EBF93B FOREIGN KEY (archivo_id) REFERENCES archivos (id)');
        $this->addSql('ALTER TABLE acta ADD CONSTRAINT FK_99A9D73FDB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE acta');
    }
}
