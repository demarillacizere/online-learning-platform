<?php

namespace App\Entity;

use App\Repository\EnrollmentsRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTimeImmutable;
#[ORM\Entity(repositoryClass: EnrollmentsRepository::class)]
class Enrollments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name:"student_id")]
    private ?int $studentId = null;

    #[ORM\Column(name:"course_id")]
    private ?int $courseId = null;

    #[ORM\Column(name:"enrollment_date")]
    private ?DateTimeImmutable $enrollmentDate = null;

    public function __construct()
    {
        $this->enrollmentDate = new DateTimeImmutable();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getStudentId(): ?int
    {
        return $this->studentId;
    }

    public function setStudentId(int $studentId): static
    {
        $this->studentId = $studentId;

        return $this;
    }

    public function getCourseId(): ?int
    {
        return $this->courseId;
    }

    public function setCourseId(int $courseId): static
    {
        $this->courseId = $courseId;

        return $this;
    }

    public function getEnrollementDate(): ?DateTimeImmutable
    {
        return $this->enrollmentDate;
    }

    public function setEnrollementDate(DateTimeImmutable $enrollementDate): static
    {
        $this->enrollementDate = $enrollementDate;

        return $this;
    }
}
