<?php

namespace WorldCup;

class Person{
    public int $age;

    public function __construct(int $age){
        $this->setAge($age);
    }

    public function getAge(): int{
        return $this->age;
    }

    public function setAge(int $age): void{
        if ($age < 0) {
            throw new \InvalidArgumentException('Age must be a non-negative integer.');
        }
        $this->age = $age;
    }

    /**
     * Each subclass (Player, Coach, ...) must implement how they "run".
     */
}
