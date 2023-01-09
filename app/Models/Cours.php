<?php

namespace App\Models;

class Cours
{
    public int $idCours;
    public string $nomCours;
    public int $dureeCours;
    public function __construct($id,$nomCours, $dureeCours)
    {
        $this->idCours = $id;
        $this->nomCours = $nomCours;
        $this->dureeCours = $dureeCours;
    }
}
