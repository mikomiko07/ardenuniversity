<?php

namespace Arden;

class OpeningTimesView extends View
{
    public function __construct($data = null)
    {
        if($data) {
            $this->data = $data;
        }
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function render() {
        // Render opening times
        foreach($this->data as $key => $val) {
            if($key == 'days') {
                echo '<table style="border: 1px solid black">';
                foreach($val as $day) 
                {
                    echo '<tr>';
                    echo '<td style="border: 1px solid black">'.$day.'</td>';

                    foreach($this->data['opening_hours'] as $d => $hours) 
                    {
                        if($d == $day)
                        {
                            echo '<td style="border: 1px solid black">'.$hours.'</td>';
                        }
                    }

                    echo '</tr>';
                }
                echo '</table>';
            }

        }
    }
}