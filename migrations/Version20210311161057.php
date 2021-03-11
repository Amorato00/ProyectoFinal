<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210311161057 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usuario ADD role_id INT NOT NULL, ADD estado_id INT NOT NULL');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05DD60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05D9F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_2265B05DD60322AC ON usuario (role_id)');
        $this->addSql('CREATE INDEX IDX_2265B05D9F5A440B ON usuario (estado_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05DD60322AC');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05D9F5A440B');
        $this->addSql('DROP INDEX IDX_2265B05DD60322AC ON usuario');
        $this->addSql('DROP INDEX IDX_2265B05D9F5A440B ON usuario');
        $this->addSql('ALTER TABLE usuario DROP role_id, DROP estado_id');
    }
}
