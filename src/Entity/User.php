<?php


namespace App\Entity;


class User
{
    private string $login;
    private string $password;
    private string $email;

    //@todo определить класс с помощью php8.0
    public function __construct(string $login, string $password, string $email)
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public static function isAdmin(): bool
    {
        return false;
    }
}