<?php

namespace OofDevs\MythicWarriors;

use pocketmine\scheduler\Task;
use OofDevs\MythicWarriors\Main;

class XpInterval extends Task {
    
    public $plugin;
	
	public function __construct(Main $pg) {
		$this->plugin = $pg;
	}

    public function onRun(int $currentTick){
        $this->plugin->checkXp();
    }
}
