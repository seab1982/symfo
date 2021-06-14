<?php

namespace App\Repository;

class DataRepository
{
    public function data()
    {
        return json_decode('[
            {
            'name' => 'Lochid',
            'age' => '55',
            'school' => 'MIT',
            'location' => 'Chicago'
            },
            {
            'name' => 'Sara',
            'age' => '22',
            'school' => 'Hillel',
            'location' => 'Dnipro'
            },
        ]');
    }
}



