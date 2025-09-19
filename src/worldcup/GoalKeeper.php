<?php

namespace WorldCup;

/**
 * Class to define the goalkeeper
 */
class Goalkeeper extends Player {
    public $globes; // property declared without type, like in original

    /**
     * Get the globes
     */
    public function isGlobes() {
        return $this->globes;
    }

    /**
     * Set the globes
     */
    public function setGlobes($globes) {
        $this->globes = $globes;
    }

    //Cuando se haya subido la clase Ball de github borrar la solucion temporal de abajo y dejar la comentada 
    /**public function block(Ball $ball) {
        $effects = ["with success", "without success"];

        $effect = $effects[array_rand($effects)];

        echo "catching $effect\n";
    }*/
    public function block($ball) {
    echo $this->name . " is blocking\n";
}
}
