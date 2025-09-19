<?php

namespace WorldCup;


use DateTime;

require_once 'Coach.php';
require_once 'Defender.php';
require_once 'Field.php';
require_once 'Forward.php';
require_once 'GoalKeeper.php';
require_once 'Midfielder.php';
require_once 'Player.php';
require_once 'Team.php'; 

$game = new Game();
$game->main();

/**
 * Class to define the game
 */
class Game {
    public $field;
    public $date;
    public $ball;
    public $teams;



    public function getField() {
        return $this->field;
    }

    public function setField($field) {
        $this->field = $field;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getBall() {
        return $this->ball;
    }

    public function setBall($ball) {
        $this->ball = $ball;
    }

    public function getTeams() {
        return $this->teams;
    }

    public function setTeams($teams) {
        $this->teams = $teams;
    }

    public function main() {
        echo "starting application\n";

        
        $this->setField(new Field(100));
        $this->setDate(new DateTime());
        //$this->setBall(new Ball());

        // create players team A
        $listA = [];
        $listA[] = new Goalkeeper("Goalkeeper A1");
        $listA[] = new Defender("Defender A2");
        $listA[] = new Defender("Defender A3");
        $listA[] = new Defender("Defender A4");
        $listA[] = new Defender("Defender A5");
        $listA[] = new Midfielder("Midfielder A6");
        $listA[] = new Midfielder("Midfielder A7");
        $listA[] = new Midfielder("Midfielder A8");
        $listA[] = new Midfielder("Midfielder A9");
        $listA[] = new Forward("Forward A10");
        $listA[] = new Forward("Forward A11");

        // create players team B
        $listB = [];
        $listB[] = new Goalkeeper("Goalkeeper B1");
        $listB[] = new Defender("Defender B2");
        $listB[] = new Defender("Defender B3");
        $listB[] = new Defender("Defender B4");
        $listB[] = new Defender("Defender B5");
        $listB[] = new Midfielder("Midfielder B6");
        $listB[] = new Midfielder("Midfielder B7");
        $listB[] = new Midfielder("Midfielder B8");
        $listB[] = new Midfielder("Midfielder B9");
        $listB[] = new Forward("Forward B10");
        $listB[] = new Forward("Forward B11");



        $teamA = new Team("NewTeam");
        $teamA->setPlayers($listA);
        $teamA->setCoach(new Coach());

        $teamB = new Team("Maped");
        $teamB->setPlayers($listB);
        $teamB->setCoach(new Coach());

        $teams = [];
        $teams[] = $teamA;
        $teams[] = $teamB;
        $this->setTeams($teams);

        $this->start();
    }


    public function start() {
        echo "starting match actions...\n";

        for ($i = 0; $i < 10; $i++) {
            echo "\n--- Action " . ($i + 1) . " ---\n";

            // select random team
            $teamIndex = array_rand($this->teams);
            $selectedTeam = $this->teams[$teamIndex];
            echo "Team: " . $selectedTeam->getName() . "\n";

            // select random player
            $players = $selectedTeam->getPlayers();
            $playerIndex = array_rand($players);
            $selectedPlayer = $players[$playerIndex];
            echo "Player type: " . (new \ReflectionClass($selectedPlayer))->getShortName() . "\n";

            

            // common actions
            $selectedPlayer->run();
            //$selectedPlayer->passBall();

            // specific actions
            if ($selectedPlayer instanceof Forward) {
                $selectedPlayer->drible();
                $selectedPlayer->kick($this->getBall());
            } else if ($selectedPlayer instanceof Midfielder) {
                $selectedPlayer->organize();
            } else if ($selectedPlayer instanceof Defender) {
                $selectedPlayer->steal($this->getBall());
            } else if ($selectedPlayer instanceof Goalkeeper) {
                $selectedPlayer->block($this->getBall());
            }
        }
    }
    
}
