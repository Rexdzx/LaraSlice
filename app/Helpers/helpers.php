<?php

if(!function_exists('setActive')){

    function setActive($path){
        return Request::is($path . '*') ? 'active' : '';
    }

}
