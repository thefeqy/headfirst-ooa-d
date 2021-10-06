<?php

namespace App\ChapterTwo;

class DogDoorSimulator
{
    public function __construct()
    {
        $this->main();
    }

    /**
     * Main method
     *
     * @return void
     */
    public function main(): void {
        $door = new DogDoor();
        $remote = new Remote($door);

        echo "Fido barks to go outside ... \n";
        $remote->pressButton();
        echo "\nFido has gone outside ... \n";
        $remote->pressButton();
        echo "\nFido's all done ... \n";
        $remote->pressButton();
        echo "\nFido's back inside ... \n";
        $remote->pressButton();
    }
}
