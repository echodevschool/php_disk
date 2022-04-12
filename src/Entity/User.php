<?php

namespace App\Entity;

#[table(value: user)]
class User
{   
    private int $id;
    private string $login;
    private string $password;
    private string $email;
    private int $is_admin;

    public static $table = 'user';
    
    public function __construct(int $id, string $login, string $password, string $email, int $is_admin)
    {   
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->is_admin = $is_admin;
        $_SESSION['is_admin'] = $this->is_admin;
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
        if ($_SESSION['is_admin']){
            return true;
        }

        return false;
    }
}