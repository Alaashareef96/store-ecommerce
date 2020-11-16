<?php


namespace App\Traits;

Trait AuthTrait
{
     function getGaurd()
    {
        return auth('admin');
    }

}
