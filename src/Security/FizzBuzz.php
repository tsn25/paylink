<?php

namespace App\Security;

use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class FizzBuzz implements UserInterface
{
    private $ouput;

    private $roles = [];

    public function getoutput(): ?string
    {
        return $this->output;
    }

    public function setoutput(string $output): self
    {
        $this->output = $output;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->output;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->output;
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

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * This method can be removed in Symfony 6.0 - is not needed for apps that do not check user passwords.
     *
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return null;
    }

    /**
     * This method can be removed in Symfony 6.0 - is not needed for apps that do not check user passwords.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
    
    public function rangeOfTheLoop() {
        $output = array();
        for ($i = 1; $i <= 20; $i++) {
            if (($i % 3 == 0) && ($i % 5 == 0))
                $output[] = "FizzBuzz";
            elseif ($i % 3 == 0)
                $output[] = "Fizz";
            else if ($i % 5 == 0)
                $output[] = "Buzz";
            else
                $output[] = $i;
        }
        return $output;
    }
}
