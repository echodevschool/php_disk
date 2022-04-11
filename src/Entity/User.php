<?php

namespace App\Entity;
class User
{   
    private int $id;
    private string $login;
    private string $password;
    private string $email;
    private bool $is_admin;     

    //@todo определить класс с помощью php8.0
    public function __construct(int $id, string $login, string $password, string $email, bool $is_admin)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->is_admin = $is_admin;
    }

    // public function getLogin(): string
    // {
    //     return $this->login;
    // }

    // public function setLogin($login)
    // {
    //     $this->login = $login;
    // }

    public static function isAdmin(): bool
    {
        if ($is_admin = 0){
            return false;
        } else{
            return true;
        }
    }
}