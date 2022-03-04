<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function t1()
    {
       /* $tema = new tema();
        $tema-> tema = "Tema 0";
        $tema-> concepto = "Esto el el uso de modelos";
        $tema-> save();*/ 
    }
    public function mostrarTemas()
    {
        $Tema=Tema::all();
        $temas1=[];
        foreach($Tema as $Tema){
            $temas1[]=[
                'id'=>$Tema->id,
                'tema'=>$Tema->tema,
                'concepto'=>$Tema->concepto
            ];
        }
            return view('blog.unidad2' , ['temas'=>$temas1]);
    }

}

/*
$temas = Tema::all();
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>tema</th>";
        echo "<th>concepto</th>";
        echo "</tr>";

            foreach($temas as $tema){
                echo "<tr>";
                echo "<td>".$tema->id."</td>";
                echo "<td>".$tema->tema."</td>";
                echo "<td>".$tema->concepto."</td>";
                echo "</tr>";
            }
            echo "</table>";
*/