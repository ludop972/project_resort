<?php

namespace App\Model;

class User {

    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private int $telNumber;
    private int $role;

    // /**
    //  * @param int $id
    //  * @param string $name
    //  * @param string $email
    //  * @param string $password
    //  * @param int $telNumber
    //  * @param int $role
    //  */
    // public function __construct(int $id, string $name, string $email, string $password, int $telNumber, int $role)
    // {
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->password = $password;
    //     $this->telNumber = $telNumber;
    //     $this->role = $role;
    // }

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     * @return int
     */
    public function getTelNumber(): int
    {
        return $this->telNumber;
    }

    /**
     * @param int $telNumber
     */
    public function setTelNumber(int $telNumber): void
    {
        $this->telNumber = $telNumber;
    }

    /**
     * @return int
     */
    public function getRole(): int
    {
        return $this->role;
    }

    /**
     * @param int $role
     */
    public function setRole(int $role): void
    {
        $this->role = $role;
    }
}
