<?php

include ('Character.php');

class Warrior extends Character {
    public int $force;
    public int $defense;
    public int $attaque_lourde;
    public int $se_proteger;
    

    public function __construct(string $name, int $age, string $work, int $PV, int $score, int $y, int $x, int $force, int $defense )
    {
        Character::__construct( $name,  $age,  $x,  $y,  $work, $score,  $PV);
        $this->force = $force;
        $this->defense = $defense;
    }

    public function setForce(int $force): void
    {
        $this->force = $force;
    }
    
    public function setDefense(int $defense): void
    {
        $this->defense = $defense;
    }
    public function getforce(): int
    {
        return $this->force;
    }
    public function getDefense(): int
    {
        return $this->defense;
    }
    public function attaqueLourde(Character $target): void
    {
        $target->setPV($target->getPV() - 20);
    }

    public function seProteger(): void
    {
        $this->se_proteger = $this->se_proteger + 0;
    }
}
    

class Healer extends Character {
    public int $PM;
    public int $agilite;
    public int $soin;
    public int $attaque_magique;

    public function __construct(string $name, int $age, string $work, int $PV, int $score, int $y, int $x, int $PM, int $agilite )
    {
        Character::__construct( $name,  $age,  $x,  $y,  $work, $score,  $PV);
        $this->PM = $PM;
        $this->agilite = $agilite;
    }

    public function setPM(int $PM): void
    {
        $this->PM = $PM;
    }
    
    public function setAgilite(int $agilite): void
    {
        $this->agilite = $agilite;
    }
    public function getPM(): int
    {
        return $this->PM;
    }
    public function getagilite(): int
    {
        return $this->agilite;
    }
    public function attaqueLourde($PV): void
    {
        $this->soin = $PV * 0.2  ;
    }
    public function attaque_magique($PV): void
    {
        $this->attaque_magique = $PV - 50;
    }
}

class Team {
    private Warrior $warrior;
    private Healer $healer;

    public function __construct(Warrior $warrior, Healer $healer)
    {
        $this->warrior = $warrior;
        $this->healer = $healer;
    }

    public function getWarrior(): Warrior
    {
        return $this->warrior;
    }

    public function getHealer(): Healer
    {
        return $this->healer;
    }
}



