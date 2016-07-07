<?php
namespace OPFake;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\Player;


class Main extends PluginBase implements Listener {
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::AQUA."OPFake by Martin77Epic enabled");
    }
    public function onDisable()
    {
        $this->getLogger()->info(TextFormat::AQUA."OPFake by Martin77Epic disabled");
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if ($command->getName() == "opfake"){
            if ($sender->hasPermission(m77e.opfake)){
                $name = strtolower($sender->getServer()->getPlayer()->getName());
                if ($target = $sender->getServer()->getPlayer($args[0]));
                if ($sender->hasPermission(m77e.opfake)){
                    $sender->sendMessage(TextFormat::GREEN."Succesfully opfaked ".$player->getName());
                    $target->sendMessage(TextFormat::GRAY."You are now op!");
                }

            }
        }


    }

}
