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

        echo "Fido barks to go outside ... \n\n";
        $remote->pressButton();

        echo "\nFido has gone outside ... \n";

        echo "\nFido's all done ... \n";
        
        $door->close();
        
        echo "... but he's stuck outside! \n";

        echo "Fido starts barking ... \n";
        echo "so Gina grabs the remote control.\n";
        $remote->pressButton();

        echo "\nFido's back inside ... \n";

        $door->close();
    }
}
