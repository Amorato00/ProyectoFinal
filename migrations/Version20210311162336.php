<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210311162336 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE noticias (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, archivo_id INT NOT NULL, titulo VARCHAR(255) NOT NULL, texto VARCHAR(255) NOT NULL, fecha DATE NOT NULL, imagen VARCHAR(255) NOT NULL, INDEX IDX_253D925DB38439E (usuario_id), INDEX IDX_253D92546EBF93B (archivo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE noticias ADD CONSTRAINT FK_253D925DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE noticias ADD CONSTRAINT FK_253D92546EBF93B FOREIGN KEY (archivo_id) REFERENCES archivos (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE noticias');
    }
}
