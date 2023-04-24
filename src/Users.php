<?php

namespace src\StartingACourseProject;
use GeekBrains\LevelTwo\UUID;

class Users {
    private UUID $uuid;
    private string $name;
    private string $surname;

    public function __construct(UUID $uuid, string $name, string $surname)
    {
        $this->uuid = $uuid;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function __toString(): string 
    {
        return "$this->name $this->surname \n";
    }

}