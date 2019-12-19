<?php

    use Rwihimba\Ageconverter\Age;

    Route::get('/converter/{name}/{age}', function($name,$dob) {
        $age = new Age();
        return $age->Age($name,$dob);
    });

    // Route::get('/', function(){
        
    //     return view('ageconverter::index');
    // });
    
 ?>