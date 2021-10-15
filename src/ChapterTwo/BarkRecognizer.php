<?php

namespace App\ChapterTwo;

class BarkRecognizer
{
    public DogDoor $door;

    public function __construct(DogDoor $door)
    {
        $this->door = $door;
    }

    public function recognize(String $bark): void
    {
        echo "Bark recognizer heared a '" . $bark . "'";
        $this->door->open();
    }
}
