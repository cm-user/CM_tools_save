<?php

namespace MarketingBundle\Entity;


class Tools
{
    public static function colorCss(){
        return $color = [
            'Par défaut' => '',
            'Rouge' => 'red',
            'Orange' => 'orange',
            'Vert' => 'green'
        ];
    }
}