<?php

namespace OPFake;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvent($this, $this);
        $this->getLogger()->info(TextFormat::AQUA."OPFake from Martin77Epic enabled");
    }
    public function onDisable()
    {
        $this->getLogger()->info(TextFormat::AQUA."OPFake from Martin77Epic disabled");
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args)
    {
        switch (strtolower($command->getName)){
            case "opfake"

                $name = strtolower($sender->getPlayer()->getName());
                if($target = $sender->getServer()->getPlayer($args[0]))
                if ($player instanceof Player){
                    if (!($sender->hasPermisson(m77e.opfake))); {
                        $sender->sendMessage(TextFormat::BLUE."Succesfully opfaked ".$player->getName());
                        $player->sendMessage(TextFormat::GRAY."You are now op!");
                    }

                }
            break;

            case "deopfake":
                $name = strtolower($sender->getPlayer()->getName());
                if($target = $sender->getServer()->getPlayer($args[0]))
                if ($player instanceof Player) {
                    if (!($sender->hasPermisson(m77e.deopfake))) {
                        $sender->sendMessage(TextFormat::BLUE."Succesfully deopfaked".$player->getName());
                        $player->sendMessage(TextFormat::GRAY."You have been deop"); //I forgot this message :/ plz does a pull for this message thanks ! -Martin77Epic!
                    }
                }
            break;
        }
        return true;
    }
}
