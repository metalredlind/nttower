<?php

function setActive(array $route)
{
    if(is_array($route)){
        foreach($route as $r){
            if(request()->routeIs($r)){
                return 'active';
            }
        }
    }
}

function statusDisewakan($statusDisewakan)
{
    switch ($statusDisewakan) {
        case 0:
            return "Tidak Disewakan";
            break;
        case 1:
            return "Disewakan";
            break;
    }
}
