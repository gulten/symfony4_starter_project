<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210415063630 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_order ADD userid_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_order ADD CONSTRAINT FK_17EB68C058E0A285 FOREIGN KEY (userid_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_17EB68C058E0A285 ON user_order (userid_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_order DROP FOREIGN KEY FK_17EB68C058E0A285');
        $this->addSql('DROP INDEX UNIQ_17EB68C058E0A285 ON user_order');
        $this->addSql('ALTER TABLE user_order DROP userid_id');
    }
}
