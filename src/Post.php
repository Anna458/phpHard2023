<?php

namespace src\StartingACourseProject;
use src\StartingACourseProject;
use GeekBrains\LevelTwo\UUID;

class Post
{
    private UUID $uuid;
    private Users $author;
    private string $title;
    private string $text;

    public function __construct(UUID $uuid, Users $author, string $title, string $text)
    {
        $this->uuid = $uuid;
        $this->author = $author;
        $this->title = $title;
        $this->text = $text;
    }

    public function __toString(): string 
    {
        return "Автор $this->uuid с именем $this->author пишет статью под названием <$this->title> с таким текстом: $this->text. \n";
    }
}