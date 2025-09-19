<?php

namespace WorldCup;

require_once __DIR__ . '/Team.php';


class Player extends Team{
    
    public $name;

    private  $position;

    public function drible() {}
    public function kick($ball) {}
    public function organize() {}
    public function steal($ball) {}
    public function block($ball) {}



    public function __construct($name) {
        $this->name = $name;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function PassBall() {
        echo "Passing\n";
    }

    public function run() {
        echo $this->name . " is running\n";
    }   







}
