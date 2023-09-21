<?php

namespace App\Controllers;

class UserController
{
    private $age;
    private $firstname;
    public function __construct(int $age, string $fname)
    {
        $this->age = $age;
        $this->firstname = $fname;
    }

    public function __toString()
    {
        $msg = "Bonjour ".$this->getFirstname().", vous avez ".$this->getAge()." ans";
        return $msg;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }
}