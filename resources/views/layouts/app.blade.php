<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    <head> 
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Aplikacija</title> 
     </head> 
     <body> 
      @include('inc.navbar') 
      <div class="container">
      @yield('sadrzaj')
      </div> 
    </body> 
 </html> A u pocetna.blade.php ostaviti samo ovaj deo koda: 
@extends('layouts.app') 
@section('sadrzaj') 
  <h1>Pozdrav!</h1> 
  <p>Ovo je pocetna stranica</p> 
@endsection A u ostalim stranicama ovaj deo koda ostaviti: Za stranu servisi: 
@extends('layouts.app') 
@section('sadrzaj') 
<h1>Service</h1> 
  <p>Ovo je strana servisi</p> 
@endsection 
 
Za stranu onama: 
@extends('layouts.app') 
@section('sadrzaj') 
  <h1>About!</h1> 
  <p>Ovo je stranica o nama</p>    
@endsection