<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210311162810 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gestion_socio (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, cuota_id INT NOT NULL, fecha DATE NOT NULL, importe DOUBLE PRECISION NOT NULL, forma_pago VARCHAR(25) NOT NULL, INDEX IDX_75A93CEADB38439E (usuario_id), INDEX IDX_75A93CEA6A7CF079 (cuota_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE gestion_socio ADD CONSTRAINT FK_75A93CEADB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE gestion_socio ADD CONSTRAINT FK_75A93CEA6A7CF079 FOREIGN KEY (cuota_id) REFERENCES cuota (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE gestion_socio');
    }
}
