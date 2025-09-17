<?php

namespace WorldCup;

class Ball {

    public $material;

    public function __construct($material) {
        $this->material = $material;
    }

    /**
     * Get the size
     */
    public function getMaterial() {
        return $this->material;
    }

    /**
     * Set the size
     */
    public function setMaterial($material) {
        $this->material = $material;
    }

    public function move() {
        echo "moving the ball\n";
    }
}