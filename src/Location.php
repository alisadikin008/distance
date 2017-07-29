<?php

namespace Alisadikin008\Distance;

class Location
{

    public static function getDistance($locationIdA = '',$locationIdB = '')
    {
        if(isset($locationIdA) && isset($locationIdB)){
            return $locationIdA.' '.$locationIdB;
        }
        return [
            'error' => [
                'code' => '400',
                'message' => 'First Param and Second Param required'
            ]
        ];
    }
}