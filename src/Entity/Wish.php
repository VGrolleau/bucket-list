<?php

namespace App\Entity;

use App\Repository\WishRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=WishRepository::class)
 */
class Wish
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Entrez un nom pour votre souhait")
     * @Assert\Length(
     *     min=2,
     *     max=250,
     *     minMessage = "Le nom du souhait doit contenir minimum {{ limit }} caractères"
     * )
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $title;

    /**
     * @Assert\NotBlank(message="Renseignez un descriptif pour votre souhait")
     * @Assert\Length(
     *     min=5,
     *     max=250,
     *     minMessage = "Merci de saisir une description d'au moins {{ limit }} caractères"
     * )
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @Assert\NotBlank(message="Saisissez un nom")
     * @Assert\Length(
     *     min=1,
     *     max=50,
     *     minMessage = "Le nom doit être d'au moins {{ limit }} caractères"
     *     maxMessage="Le nom doit être inférieur à {{ limit }} caractères"
     * )
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $author;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPublished;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCreated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    public function setIsPublished(bool $isPublished): self
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }
}
