<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210706144623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE emplazamiento (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nombre VARCHAR(60) NOT NULL)');
        $this->addSql('CREATE TABLE incidencia (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, tipo_incidencia_id INTEGER DEFAULT NULL, emplazamiento_id INTEGER DEFAULT NULL, id_usuario INTEGER NOT NULL, numero_incidencia VARCHAR(60) NOT NULL, fecha_introduccion DATETIME NOT NULL, fecha_incidencia DATE NOT NULL, turno INTEGER NOT NULL, estado INTEGER NOT NULL, otro_emplazamiento VARCHAR(255) DEFAULT NULL, descripcion CLOB NOT NULL, analisis_causa CLOB DEFAULT NULL, is_anonimo BOOLEAN NOT NULL)');
        $this->addSql('CREATE INDEX IDX_C7C6728CE1D308BC ON incidencia (tipo_incidencia_id)');
        $this->addSql('CREATE INDEX IDX_C7C6728C8105D4E6 ON incidencia (emplazamiento_id)');
        $this->addSql('CREATE TABLE tipo_accion (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nombre VARCHAR(60) NOT NULL)');
        $this->addSql('CREATE TABLE tipo_incidencia (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nombre VARCHAR(60) NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE emplazamiento');
        $this->addSql('DROP TABLE incidencia');
        $this->addSql('DROP TABLE tipo_accion');
        $this->addSql('DROP TABLE tipo_incidencia');
    }
}
