<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pocetnastr(){ 
     $naslov = 'Dobrodosli na pocetnu stranu Stranu!'; 
     return view('stranice.pocetna', compact('naslov')); 
    }
 
     public function about(){ 
    $naslov = 'O nama!'; 
     return view('stranice.onama')->with('naslov', $naslov); 
    }
 
   public function service(){ 
    $podaci = array( 
     'naslov' => 'Nasi servisi', 
     'nizservisa'=>['Web Dizajn', 'IT', 'Multimediji'] 
     ); 
     return view('stranice.servisi')->with($podaci);  }
