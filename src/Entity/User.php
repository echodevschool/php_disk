<?php

namespace App\Entity;

class User
{   
    private int $id;
    private string $login;
    private string $password;
    private string $email;
    private int $is_admin;

    public static string $table = 'users';
    
    public function __construct()
    {   
//        $this->id = $id;
//        $this->login = $login;
//        $this->password = $password;
//        $this->email = $email;
//        $this->is_admin = $is_admin;
//        $_SESSION['is_admin'] = $this->is_admin;
    }

     public function getLogin(): string
     {
         return $this->login;
     }

     public function setLogin($login)
     {
         $this->login = $login;
     }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setIsAdmin()
    {

    }

    public static function isAdmin(): bool
    {        
        if ($_SESSION['is_admin']){
            return true;
        }

        return false;
    }
}