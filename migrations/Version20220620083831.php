<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220620083831 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, cat_nom VARCHAR(50) DEFAULT NULL, cat_desc VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commandes (id INT AUTO_INCREMENT NOT NULL, com_com_date DATETIME NOT NULL, com_pay_date DATETIME DEFAULT NULL, com_exp_date DATETIME DEFAULT NULL, com_type_paiement INT NOT NULL, com_prix_total DOUBLE PRECISION DEFAULT NULL, com_discount INT DEFAULT NULL, com_facture_date DATE DEFAULT NULL, com_facture_adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employees (id INT AUTO_INCREMENT NOT NULL, emp_nom VARCHAR(50) NOT NULL, emp_prenom VARCHAR(50) NOT NULL, emp_adresse VARCHAR(255) NOT NULL, emp_cp VARCHAR(10) NOT NULL, emp_ville VARCHAR(50) NOT NULL, emp_mail VARCHAR(50) NOT NULL, emp_phone VARCHAR(11) NOT NULL, emp_mot_pass VARCHAR(255) NOT NULL, emp_dat_embauche DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseurs (id INT AUTO_INCREMENT NOT NULL, fou_nom VARCHAR(50) NOT NULL, fou_ville VARCHAR(50) NOT NULL, fou_pays VARCHAR(50) NOT NULL, fou_adresse VARCHAR(255) NOT NULL, fou_cp VARCHAR(10) NOT NULL, fou_mail VARCHAR(50) NOT NULL, fou_nom_contact VARCHAR(50) NOT NULL, fou_contact_phone VARCHAR(50) NOT NULL, fou_type INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_de_commande (id INT AUTO_INCREMENT NOT NULL, lico_qty INT NOT NULL, lico_uni_prix INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, liv_num_bon INT NOT NULL, liv_date DATE NOT NULL, live_etat VARCHAR(50) NOT NULL, liv_adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE poste (id INT AUTO_INCREMENT NOT NULL, pos_libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produits (id INT AUTO_INCREMENT NOT NULL, pro_lib_court VARCHAR(50) NOT NULL, pro_lib_long VARCHAR(255) DEFAULT NULL, pro_fou_ref VARCHAR(50) NOT NULL, pro_photo VARCHAR(255) DEFAULT NULL, pro_pri_achat INT NOT NULL, pro_stock INT DEFAULT NULL, pro_bloque INT DEFAULT NULL, pro_date_ajou DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE saisir (id INT AUTO_INCREMENT NOT NULL, sai_date DATETIME NOT NULL, sai_description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE commandes');
        $this->addSql('DROP TABLE employees');
        $this->addSql('DROP TABLE fournisseurs');
        $this->addSql('DROP TABLE ligne_de_commande');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE poste');
        $this->addSql('DROP TABLE produits');
        $this->addSql('DROP TABLE saisir');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
