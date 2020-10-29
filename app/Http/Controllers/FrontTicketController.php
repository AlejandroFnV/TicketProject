<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontTicketController extends Controller
{

    private $tickets = [
        'tickets' => [
            1 => ['id' => 1, 'name' => 'brunch',    'price' => 12.2, 'date' => '2020/10/18', 'time' => '09:00'],
            2 => ['id' => 2, 'name' => 'lunch',     'price' => 22.2, 'date' => '2020/10/18', 'time' => '14:00'],
            3 => ['id' => 3, 'name' => 'dinner',    'price' => 18.2, 'date' => '2020/10/18', 'time' => '19:00'],
            4 => ['id' => 4, 'name' => 'breakfast', 'price' => 7.2,  'date' => '2020/10/18', 'time' => '10:00'],
        ],
        'otro' => 1,
        'elarray' => [],
    ];

    function main() {
        $id = rand(1, count($this->tickets['tickets']));
        return view('main', $this->tickets['tickets'][$id]);
    }

    function list() {
        $datos = $this->tickets;
        return view('ticket.list', $datos);
    }

    function detail($id) {
        return view('ticket.detail', $this->tickets['tickets'][$id]);
    }
    
    function buy($id){
        return view('ticket.buy', $this->tickets['tickets'][$id]);
    }
}
