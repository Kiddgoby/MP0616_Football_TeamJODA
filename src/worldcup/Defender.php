<?php

namespace WorldCup;
require_once 'Player.php';

class Defender extends Player{

    public $mark;

    // public function steal(Ball $ball) {
    //     $effects = ["with fault", "without fault"];
    //     $effect = $effects[array_rand($effects)];
    //     echo "steals the ball $effect\n";
    // }

    // Método temporal para que no dé error
    public function steal($ball) {
        echo $this->name . " attempts to steal the ball\n";
    }

    /**
     * Get the mark
     */
    public function isMark() {
        return $this->mark;
    }

    /**
     * Set the mark
     */
    public function setMark($mark) {
        $this->mark = $mark;
    }


}
