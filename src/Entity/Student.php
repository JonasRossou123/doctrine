<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Address;
use Doctrine\ORM\Mapping\Embedded;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /** @Embedded(class = "Address") */
    private $address;

    /**
     * @ORM\ManyToOne(targetEntity=Teacher::class, inversedBy="students")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Teacher;

    public function __construct()
    {
        $this->address = new Address();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getfirstName(): ?string
    {
        return $this->firstName;
    }

    public function setfirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getTeacher(): ?Teacher
    {
        return $this->Teacher;
    }

    public function setTeacher(?Teacher $Teacher): self
    {
        $this->Teacher = $Teacher;

        return $this;
    }
}
