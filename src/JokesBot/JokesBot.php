<?php

namespace JokesBot;

use pocketmine\command\{Command, CommandSender};
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\level\{Position, Level};
use pocketmine\utils\TextFormat as C;
use pocketmine\math\Vector3;

class JokesBot extends PluginBase{

public $this->prefix = C::BLUE . "[JokesBot]" . C::WHITE . "-" . C::BLACK . " ";

	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
 		switch(strtolower($command->getName())){
            		case "Jokes":
            		if($sender instanceof Player(){
        			 $sender->sendMessage($this->prefix . "What kind of joke? \n Your response choices: Knock Knock Joke);
            			$this->getMessage;
            			if($this->Message = "Knock Knock Joke"){
            				$sender->sendMessage($this->prefix . "Knock Knock! \n Your response choice: Who's there?");
            				$this->getMessage;
            				if($this->Message = "Who's there?"){
            				$chance = rand(0,9);
            				switch($chance){
			      			case 1:
			      			$sender->sendMessage($this->prefix . "Ho ho \n Your response choices: Ho ho who? or Cancel Joke");
			      			$this->getMessage;
			      			if($this->Message = "Ho ho who?"){
			      				$sender->sendMessage($this->prefix . "You know, your Santa impression could use a little work.");
			      				}
			      			else if(this->Message = "Cancel Joke"){
			      				$sender->sendMessage($this->prefix . "Joke cancelled. Use the command /jokes to start a new joke.");
			      				}
			      	
			      			break;
			      
			      			case 2:
			      			$sender->sendMessage($this->prefix . "Hatch \n Your response choices: Hatch who? or Cancel Joke");
			      			$this->getMessage;
			      			if($this->Message = "Hatch who?"){
			      				$sender->sendMessage($this->prefix . "Bless you!");
			      				}
			      			else if(this->Message = "Cancel Joke"){
			      				$sender->sendMessage($this->prefix . "Joke cancelled. Use the command /jokes to start a new joke.");
			      				}
			      	
			      			break;
			      
			      			case 3:
			      			$sender->sendMessage($this->prefix . "Doris \n Your response choices: Doris who? or Cancel Joke");
			      			$this->getMessage;
			      			if($this->Message = "Doris who?"){
			      				$sender->sendMessage($this->prefix . "Doris locked; that's why I had to knock!");
			      				}
			      			else if(this->Message = "Cancel Joke"){
			      				$sender->sendMessage($this->prefix . "Joke cancelled. Use the command /jokes to start a new joke.");
			      				}
			      	
			      			break;
			     
			      			case 4:
                                                $sender->sendMessage($this->prefix . "You \n Your response choices: Who are you? or Cancel Joke");
			      			$this->getMessage;
			      			if($this->Message = "Who are you?"){
			      				$sender->sendMessage($this->prefix . "You are!");
			      				}
			      			else if(this->Message = "Cancel Joke"){
			      				$sender->sendMessage($this->prefix . "Joke cancelled. Use the command /jokes to start a new joke.");
			      				}
			      	
			      			break;
			      
			      			case 5:
                                                $sender->sendMessage($this->prefix . "Steve \n Your response choices: Steve who? or Cancel Joke");
			      			$this->getMessage;
			      			if($this->Message = "Steve who?"){
			      				$sender->sendMessage($this->prefix . "I am the player!");
			      				}
			      			else if(this->Message = "Cancel Joke"){
			      				$sender->sendMessage($this->prefix . "Joke cancelled. Use the command /jokes to start a new joke.");
			      				}
			      	
			      			break;
			      
			      			case 6:
                                                $sender->sendMessage($this->prefix . "Jack \n Your response choices: Jack who? or Cancel Joke");
			      			$this->getMessage;
			      			if($this->Message = "Jack who?"){
			      				$sender->sendMessage($this->prefix . "All work and no play makes Jack a dull boy.");
			      				}
			      			else if(this->Message = "Cancel Joke"){
			      				$sender->sendMessage($this->prefix . "Joke cancelled. Use the command /jokes to start a new joke.");
			      				}
			      	
			      			break;
			      
			      			case 7:
                                                $sender->sendMessage($this->prefix . "Notch \n Your response choices: Notch who? or Cancel Joke");
			      			$this->getMessage;
			      			if($this->Message = "Notch who?"){
			      				$sender->sendMessage($this->prefix . "Notch: I have to ban you for opening the door.");
			      				}
			      			else if(this->Message = "Cancel Joke"){
			      				$sender->sendMessage($this->prefix . "Joke cancelled. Use the command /jokes to start a new joke.")
			      				}
			      	
			      			break;
			     
			      			case 8:
                                                $sender->sendMessage($this->prefix . "Altar \n Your response choices: Altar who? or Cancel Joke");
			      			$this->getMessage;
			      			if($this->Message = "Altar who?"){
			      				$sender->sendMessage($this->prefix . "Altar of the altar of the altar of the altar of the grand altar!");
			      				}
			      			else if(this->Message = "Cancel Joke"){
			      				$sender->sendMessage($this->prefix . "Joke cancelled. Use the command /jokes to start a new joke.")
			      				}
			      	
			      			break;
			     
			      			case 9:
                                                $sender->sendMessage($this->prefix . "Linus \n Your response choices: Linus who? or Cancel Joke");
			      			$this->getMessage;
			      			if($this->Message = "Linus who?"){
			      				$sender->sendMessage($this->prefix . "I am Linus Torvalds, the creator of Linux!");
			      				}
			      			else if(this->Message = "Cancel Joke"){
			      				$sender->sendMessage($this->prefix . "Joke cancelled. Use the command /jokes to start a new joke.")
			      				}
			      	
			      			break;
            					}
            				}	
            			}
           		}
        	}
        }
