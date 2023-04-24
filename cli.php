<?php

require_once __DIR__ . '/vendor/autoload.php';

use src\StartingACourseProject\Comments;
use src\StartingACourseProject\Users;
use src\StartingACourseProject\Post;
use GeekBrains\LevelTwo\UUID;

/*$user = new Users(1, "Anna", "Efimova");
var_dump($user);
$user2 = new Users(2, "Ivan", "Ivanov");
$post = new Post(1, $user, "Первое задание", "Домашнее задание сделано");

$comment = new Comments(1, $user2, $post, "Отличное задание");

echo $post;
echo $comment;*/

$faker = Faker\Factory::create('ru_RU');
$user = new Users (
    $faker->randomDigitNotNull(),
    $faker->name('female'),
    $faker->lastName('female')
);

$post = new Post(
    $faker->randomDigitNotNull(),
    $user,
    $faker->text(15),
    $faker->text(100)
);

$comment = new Comments(
    $faker->randomDigitNotNull(),
    $user,
    $post,
    $faker->text(100)
);

switch ($argv[1]) {
    case "user":
        echo $user;
        break;
    case "post":
        echo $post;
        break;
    case "comment":
        echo $comment;
        break;
        default:
        echo "Ошибка";
}
