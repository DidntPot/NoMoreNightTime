<?php

/*

  ____    _       _           _     ____            _ 
 |  _ \  (_)   __| |  _ __   | |_  |  _ \    ___   | |_ 
 | | | | | |  / _` | | '_ \  | __| | |_) |  / _ \  | __|
 | |_| | | | | (_| | | | | | | |_  |  __/  | (_) | | |_ 
 |____/  |_|  \__,_| |_| |_|  \__| |_|      \___/   \__|


 Github: https://github.com/DidntPot
 Discord: Peppa.#0001

*/

namespace DidntPot\NoMoreNightTime;

use pocketmine\plugin\PluginBase;

use pocketmine\Server;

class Loader extends PluginBase{

    public function onEnable() : void{

        // Get all worlds from 'worlds' folder.
        foreach(glob($this->getServer()->getDataPath() . "worlds/*") as $world){
            $world = str_replace($this->getServer()->getDataPath() . "worlds/", "", $world);

            // Check if the world has been loaded or not.
            if($this->getServer()->isLevelLoaded($world)){
                // Set the time to day time.
                $world->setTime(0);
                // Stop the time completely.
                $world->stopTime();
            }
        }
    }

}