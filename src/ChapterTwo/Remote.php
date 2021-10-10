<?php

namespace App\ChapterTwo;

class Remote
{
    private DogDoor $door;

    public function __construct(DogDoor $door)
    {
        $this->door = $door;
    }

    public function pressButton(): void
    {
        echo "Pressing the remote control button ... \n\n";
        if ($this->door->isOpen()) {
            $this->door->close();
        } else {
            $this->door->open();
        }
    }
}
