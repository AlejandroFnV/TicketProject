<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    private $tickets = [
        1 => ['id' => 1, 'name' => 'brunch', 'price' => 18, 'date' => '2020-10-17', 'time' => '09:00'],
        2 => ['id' => 2, 'name' => 'lunch', 'price' => 22.2, 'date' => '2020-10-17', 'time' => '14:00'],
        3 => ['id' => 3, 'name' => 'breakfast', 'price' => 18, 'date' => '2020-10-17', 'time' => '09:00'],
        4 => ['id' => 4, 'name' => 'dinner', 'price' => 18, 'date' => '2020-10-17', 'time' => '09:00'],
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ticket.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return 'creado'; //insert into table values 
        return redirect('ticket')->with('Store', 'Creado satisfactoriamente');
        // return redirect->route('ticket.index');
        // return redirect()->action([TicketController::class, 'metodo']);
        //return Route::redirect()->route('ticket.store', 'ticket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($numeroTicket)
    {
        $datos = $this->tickets[$numeroTicket];
        return view('ticket.show', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($numeroTicket)
    {
        return view('ticket.edit', $this->tickets[$numeroTicket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect('ticket')->with('Update', 'Actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect('ticket')->with('Delete', 'Borrado satisfactoriamente');
    }
    
    function ver() {
        return view('ticket.ver');
    }
}
