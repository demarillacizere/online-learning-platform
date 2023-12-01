<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231201131143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enrollments ADD users_id INT DEFAULT NULL, ADD courses_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE enrollments ADD CONSTRAINT FK_CCD8C13267B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE enrollments ADD CONSTRAINT FK_CCD8C132F9295384 FOREIGN KEY (courses_id) REFERENCES courses (id)');
        $this->addSql('CREATE INDEX IDX_CCD8C13267B3B43D ON enrollments (users_id)');
        $this->addSql('CREATE INDEX IDX_CCD8C132F9295384 ON enrollments (courses_id)');
        $this->addSql('ALTER TABLE lessons ADD courses_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lessons ADD CONSTRAINT FK_3F4218D9F9295384 FOREIGN KEY (courses_id) REFERENCES courses (id)');
        $this->addSql('CREATE INDEX IDX_3F4218D9F9295384 ON lessons (courses_id)');
        $this->addSql('ALTER TABLE progress ADD enrollments_id INT DEFAULT NULL, ADD lessons_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE progress ADD CONSTRAINT FK_2201F2461B4748EB FOREIGN KEY (enrollments_id) REFERENCES enrollments (id)');
        $this->addSql('ALTER TABLE progress ADD CONSTRAINT FK_2201F246FED07355 FOREIGN KEY (lessons_id) REFERENCES lessons (id)');
        $this->addSql('CREATE INDEX IDX_2201F2461B4748EB ON progress (enrollments_id)');
        $this->addSql('CREATE INDEX IDX_2201F246FED07355 ON progress (lessons_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE progress DROP FOREIGN KEY FK_2201F2461B4748EB');
        $this->addSql('ALTER TABLE progress DROP FOREIGN KEY FK_2201F246FED07355');
        $this->addSql('DROP INDEX IDX_2201F2461B4748EB ON progress');
        $this->addSql('DROP INDEX IDX_2201F246FED07355 ON progress');
        $this->addSql('ALTER TABLE progress DROP enrollments_id, DROP lessons_id');
        $this->addSql('ALTER TABLE lessons DROP FOREIGN KEY FK_3F4218D9F9295384');
        $this->addSql('DROP INDEX IDX_3F4218D9F9295384 ON lessons');
        $this->addSql('ALTER TABLE lessons DROP courses_id');
        $this->addSql('ALTER TABLE enrollments DROP FOREIGN KEY FK_CCD8C13267B3B43D');
        $this->addSql('ALTER TABLE enrollments DROP FOREIGN KEY FK_CCD8C132F9295384');
        $this->addSql('DROP INDEX IDX_CCD8C13267B3B43D ON enrollments');
        $this->addSql('DROP INDEX IDX_CCD8C132F9295384 ON enrollments');
        $this->addSql('ALTER TABLE enrollments DROP users_id, DROP courses_id');
    }
}
