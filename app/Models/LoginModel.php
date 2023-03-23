<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model{

    function signUserIn($data){

        unset($data['_token']);
        return $data;
        
    }

}   