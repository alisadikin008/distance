<?php

namespace Alisadikin008\Distance\Test;

use Alisadikin008\Distance\Location;

class LocationTest extends \PHPUnit_Framework_TestCase
{
    public function testLocation($locationIdA = '',$locationIdB = '')
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