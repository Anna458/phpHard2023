<?php 

namespace GeekBrains\LevelTwo;

use GeekBrains\LevelTwo\InvalidArgumentException;

class UUID {
    // Внутри объекта мы храним UUID как строку
    public function __construct(
    private string $uuidString
    ) {
    if (!uuid_is_valid($uuidString)) {
    throw new InvalidArgumentException(
    "Malformed UUID: $this->uuidString"
    );
    }
    }
    // А так мы можем сгенерировать новый случайный UUID
    //© geekbrains.ru 11
    // и получить его в качестве объекта нашего класса
    public static function random(): self
    {
    return new self(uuid_create(UUID_TYPE_RANDOM));
    }
    public function __toString(): string
    {
    return $this->uuidString;
    }
    }
    