<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    $tasks=[
       'Go to the market',
       'Walk the dog',
       'Watch a video tutorial'
    ];
    return view('welcome',compact('tasks'));
   });


