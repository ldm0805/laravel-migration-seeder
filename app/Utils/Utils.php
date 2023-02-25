<?php

namespace App\Utils;

class Utils
{
function controlBool($bool)
{
    if($bool == 1){
        return 'Si'; 
    }else{
        return 'No';
    }
}

}