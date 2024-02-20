<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    private ?string $lastname = null;

    #[ORM\Column(length: 100)]
    private ?string $firstname = null;

    #[ORM\Column]
    private ?int $role_id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\OneToMany(targetEntity: Cars::class, mappedBy: 'users')]
    private Collection $acces_cars;

    #[ORM\OneToMany(targetEntity: Testimonials::class, mappedBy: 'users')]
    private Collection $acces_testimonials;

    #[ORM\OneToMany(targetEntity: FormContact::class, mappedBy: 'users')]
    private Collection $acces_formcontact;

    #[ORM\OneToMany(targetEntity: CarContact::class, mappedBy: 'users')]
    private Collection $acces_carContacts;

    

    public function __construct()
    {
        $this->acces_cars = new ArrayCollection();
        $this->acces_testimonials = new ArrayCollection();
        $this->acces_formcontact = new ArrayCollection();
        $this->acces_carContacts = new ArrayCollection();
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getRoleId(): ?int
    {
        return $this->role_id;
    }

    public function setRoleId(int $role_id): static
    {
        $this->role_id = $role_id;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return Collection<int, Cars>
     */
    public function getAccesCars(): Collection
    {
        return $this->acces_cars;
    }

    public function addAccesCar(Cars $accesCar): static
    {
        if (!$this->acces_cars->contains($accesCar)) {
            $this->acces_cars->add($accesCar);
            $accesCar->setUsers($this);
        }

        return $this;
    }

    public function removeAccesCar(Cars $accesCar): static
    {
        if ($this->acces_cars->removeElement($accesCar)) {
            // set the owning side to null (unless already changed)
            if ($accesCar->getUsers() === $this) {
                $accesCar->setUsers(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Testimonials>
     */
    public function getAccesTestimonials(): Collection
    {
        return $this->acces_testimonials;
    }

    public function addAccesTestimonial(Testimonials $accesTestimonial): static
    {
        if (!$this->acces_testimonials->contains($accesTestimonial)) {
            $this->acces_testimonials->add($accesTestimonial);
            $accesTestimonial->setUsers($this);
        }

        return $this;
    }

    public function removeAccesTestimonial(Testimonials $accesTestimonial): static
    {
        if ($this->acces_testimonials->removeElement($accesTestimonial)) {
            // set the owning side to null (unless already changed)
            if ($accesTestimonial->getUsers() === $this) {
                $accesTestimonial->setUsers(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, FormContact>
     */
    public function getAccesFormcontact(): Collection
    {
        return $this->acces_formcontact;
    }

    public function addAccesFormcontact(FormContact $accesFormcontact): static
    {
        if (!$this->acces_formcontact->contains($accesFormcontact)) {
            $this->acces_formcontact->add($accesFormcontact);
            $accesFormcontact->setUsers($this);
        }

        return $this;
    }

    public function removeAccesFormcontact(FormContact $accesFormcontact): static
    {
        if ($this->acces_formcontact->removeElement($accesFormcontact)) {
            // set the owning side to null (unless already changed)
            if ($accesFormcontact->getUsers() === $this) {
                $accesFormcontact->setUsers(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CarContact>
     */
    public function getAccesCarContacts(): Collection
    {
        return $this->acces_carContacts;
    }

    public function addAccesCarContact(CarContact $accesCarContact): static
    {
        if (!$this->acces_carContacts->contains($accesCarContact)) {
            $this->acces_carContacts->add($accesCarContact);
            $accesCarContact->setUsers($this);
        }

        return $this;
    }

    public function removeAccesCarContact(CarContact $accesCarContact): static
    {
        if ($this->acces_carContacts->removeElement($accesCarContact)) {
            // set the owning side to null (unless already changed)
            if ($accesCarContact->getUsers() === $this) {
                $accesCarContact->setUsers(null);
            }
        }

        return $this;
    }
    
}
