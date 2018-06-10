<?php

namespace ExamplePlugin;

use pocketmine\scheduler\PluginTask;
use pocketmine\Server;

class BroadcastPluginTask extends PluginTask{

	public function onRun(int $currentTick) : void{
		Server::getInstance()->broadcastMessage("[ExamplePlugin] I've run on tick " . $currentTick);
	}
}
