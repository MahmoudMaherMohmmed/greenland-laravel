<?php

function getTran($en){
    if (App::isLocale('en')){
        return $en."_en";
    }else{
        return $en."_ar";

    }
}
