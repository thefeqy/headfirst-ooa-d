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
        $recognizer = new BarkRecognizer($door);
        $remote = new Remote($door);

        // Simulate the hardware hearing a bark.
        echo "Fido starts barking.\n\n";
        $recognizer->recognize('Woof');

        echo "\nFido has gone outside ... \n";

        echo "\nFido's all done ... \n";
        
        $door->close();
        
        echo "... but he's stuck outside! \n";

        // Simulate the hardware hearing a bark again.
        echo "Fido starts barking. \n";
        $recognizer->recognize('Woof');

        echo "\nFido's back inside ... \n";
        $door->close();
    }
}
