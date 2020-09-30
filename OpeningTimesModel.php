<?php

namespace Arden;

class OpeningTimesModel extends Model
{
    public function __construct()
    {
        $this->data = [
            'days' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            'opening_hours' => [
                'Monday' => '0900 - 1700',
                'Tuesday' => '0900 - 1400',
                'Wednesday' => 'Closed',
                // Added Thursday opening hours
                'Thursday' => 'Closed',
                'Friday' => '1000 - 1300'
            ]
        ];
    }

    public function getData()
    {
        return $this->data;
    }
}