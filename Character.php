<?php

class Character{
    public string $name;
    public int $age;
    public string $work;
    public int $score;
    public int $x;
    public int $y;
    public int $PV;
    public int $attack;


    public function __construct(string $name, int $age, int $x, int $y, string $work, int $score, int $PV){
        $this->name = $name;
        $this->age = $age;
        $this->x = $x;
        $this->y = $y;
        $this->work = $work;
        $this->score = $score;
        $this->PV = $PV;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
    
    public function setX(int $x): void
    {
        $this->x = $x;
    }
    
    public function setY(int $y): void
    {
        $this->y = $y;
    }
    
    public function setwork(string $work): void
    {
        $this->work = $work;
    }
    
    public function setScore(int $score): void
    {
        $this->score = $score;
    }
    
    public function setPV(int $PV): void
    {
        $this->PV = $PV;
    }


    public function getName(): string
    {
        return $this->name;
    }
    
    public function getAge(): int
    {
        return $this->age;
    }
    
    public function getX(): int
    {
        return $this->x;
    }
    
    public function getY(): int
    {
        return $this->y;
    }

    public function getwork(): string
    {
        return $this->work;
    }
    
    public function getScore(): int
    {
        return $this->score;
    }
    
    public function getPV(): int
    {
        return $this->PV;
    }
    public function right(): void
    {
        $this->x = $this->x + 10;
    }
    
    public function left(): void
    {
        $this->x = $this->x - 10;
    }
    
    public function forward(): void
    {
        $this->y = $this->y + 10;
    }
    
    public function backward(): void
    {
        $this->y = $this->y - 10;
    }
    public function attack(Character $target): void
    {
        $target->setPV($target->getPV() - 10);
    }

}