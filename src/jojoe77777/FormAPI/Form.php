<?php

declare(strict_types = 1);

namespace jojoe77777\FormAPI;

use InvalidArgumentException;
use pocketmine\form\Form as IForm;
use pocketmine\player\Player;

abstract class Form implements IForm{

    /** @var array */
    protected array $data = [];
    /** @var callable|null */
    private $callable;

    /**
     * @param callable|null $callable
     */
    public function __construct(?callable $callable) {
        $this->callable = $callable;
    }

    /**
     * @param Player $player
     * @throws InvalidArgumentException
     * @deprecated
     * @see Player::sendForm()
     */
    public function sendToPlayer(Player $player) : void {
        $player->sendForm($this);
    }
    
    /**
     * @param string $text
     */
    public function addHeader(string $text) : void{
      $this->data["content"][] = ["type" => "header", "text" => $text];
    }
    
    public function addDivider() : void{
      $this->data["content"][] = ["type" => "divider", "text" => ""];
    }
    
    /**
     * @param string $texr
     * @return $this
     */
     public function setSubmitButton(string $text) : void{
       $this->data["submit"] = $text;
     }

    public function getCallable() : ?callable {
        return $this->callable;
    }

    public function setCallable(?callable $callable) {
        $this->callable = $callable;
    }

    public function handleResponse(Player $player, $data) : void {
        $this->processData($data);
        $callable = $this->getCallable();
        if($callable !== null) {
            $callable($player, $data);
        }
    }

    public function processData(&$data) : void {
    }

    public function jsonSerialize() : array {
        return $this->data;
    }
}
