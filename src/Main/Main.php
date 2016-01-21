<?php

  namespace Broadcast;

  use pocketmine\plugin\PluginBase;
  use pocketmine\command\Command;
  use pocketmine\command\CommandSender;

  class Main extends PluginBase {

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {

      if($cmd->getName() === "example") {

        $this->getServer()->broadcastMessage($sender->getDisplayName() . " just used my /example command!");

      }

    }

  }

?>
