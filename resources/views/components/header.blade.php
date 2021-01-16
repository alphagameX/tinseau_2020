<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
   <div class="left">
       <img src="/storage/logo/Casque3.png">
       <a href="/">Tinseau</a>
   </div>
    <div class="right">
        <button>
            Menu <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<x-overlay/>
<x-user/>


