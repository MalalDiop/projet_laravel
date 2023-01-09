<?php

namespace App\Http\Controllers;

use App\Models\Cours;
class CoursController
{
    public function index()
    {
        $c = new Cours(1,"JAVA",30);
        $c1 = new Cours(2,"PHP",60);
        $c2 = new Cours(3,"JavaScript",100);
        // $cours = [
        //     [1, "JAVA", 30],
        //     [2, "PHP", 60],
        //     [3, "JavaScript", 100],
        // ];
        $listeDesObjetsCours =[$c,$c1,$c2];
        return view('etudiants/cours', ['nosCours' => $listeDesObjetsCours]);
    }
}
/*
    30),new Cours(2,"PHP",60),new Cours(3,"JavaScript",100)]]);
*/