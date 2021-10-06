<?php

namespace App\ChapterTwo;

class DogDoor
{
    private bool $open = false;

    /**
     * Open the dog door
     *
     * @return void
     */
    public function open(): void
    {
        echo "The dog door opens. \n";
        $this->open = true;
    }

    /**
     * close the dog door
     *
     * @return void
     */
    public function close(): void
    {
        echo "The dog door closes. \n";
        $this->open = false;
    }

    public function isOpen(): bool
    {
        return $this->open;
    }
}
