<?php

namespace src\StartingACourseProject;

use src\StartingACourseProject\Post;
use src\StartingACourseProject\Users;
use GeekBrains\LevelTwo\UUID;

class Comments
{
    private UUID $uuid;
    private Users $author;
    private Post $post;
    private string $comment;

    public function __construct(UUID $uuid, Users $author, Post $post, string $comment)
    {
        $this->uuid = $uuid;
        $this->author = $author;
        $this->post = $post;
        $this->comment = $comment;
    }

    public function __toString(): string 
    {
        return "$this->author про пост <$this->post> Говорит: $this->comment. \n";
    }
}