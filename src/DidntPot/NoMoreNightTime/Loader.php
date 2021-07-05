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

use pocketmine\level\Level;

use pocketmine\event\Listener;
use pocketmine\event\level\LevelLoadEvent;

class Loader extends PluginBase implements Listener{

    public function onEnable() : void{
        
        // Gets all loaded worlds.
        foreach($this->getServer()->getLevels() as $world){

            // Sets the time to day.
            $world->setTime(0);
            // Stops the time completely.
            $world->stopTime();

        }

    }

    public function onLevelLoadEvent(LevelLoadEvent $event){

        $world = $event->getLevel();

        // Sets the time to day.
        $world->setTime(0);
        // Stops the time completely.
        $world->stopTime();
        
    }

}
