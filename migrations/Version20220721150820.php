<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220721150820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bottle (id INT AUTO_INCREMENT NOT NULL, shelf VARCHAR(255) NOT NULL, appelation ENUM(\'graves\', \'pessac\', \'médoc\', \'cote de blaye\') NOT NULL COMMENT \'(DC2Type:AppelationType)\', region ENUM(\'bordeaux\', \'sud ouest\', \'vallé de la loire\', \'languedoc rousillon\', \'vallée du rhone\', \'provence\', \'corse\', \'savoie\', \'beaujolais\', \'bourgogne\', \'jura\', \'alsace\') NOT NULL COMMENT \'(DC2Type:RegionType)\', country VARCHAR(255) DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, name VARCHAR(100) NOT NULL, number INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, color ENUM(\'rouge\', \'blanc\', \'rosé\') NOT NULL COMMENT \'(DC2Type:ColorType)\', format ENUM(\'bouteille\', \'magnum\', \'jéroboam\', \'réhoboam\', \'mathusalem\', \'salmanazar\', \'balthazar\') NOT NULL COMMENT \'(DC2Type:FormatType)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shelf (id INT AUTO_INCREMENT NOT NULL, user INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(45) NOT NULL, lastname VARCHAR(45) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bottle');
        $this->addSql('DROP TABLE shelf');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
