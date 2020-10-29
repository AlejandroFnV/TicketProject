<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TicketController extends Controller
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.ticket.index', $this->tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price = $request->get('price');
        if($price != 1) {
            //save
            $response = ['op' => 'store', 'result' => 1];    
            return redirect('ticket')->with($response); //flash session
        }else {
            return back()->withInput(); /*volver a la pagina anterior con todos los datos*/
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($numeroticket)
    {
        if(isset($this->tickets['tickets'][$numeroticket])){
            $datos = $this->tickets['tickets'][$numeroticket];
            return view('backend.ticket.show', $datos);
        }
        View::share('origen', 'Viene de show debido a un error en el número de ticket.');
        return $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = $this->tickets['tickets'][$id];
        return view('backend.ticket.edit', $datos);
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
        $response = ['op' => 'update', 'result' => 1];
        return redirect('ticket')->with($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = ['op' => 'delete', 'result' => 1];
        //redirect a una ruta
        //witch -> datos de la sesion de tipo flash
        return redirect('ticket')->with($response);
        //redirect a una ruta por su nombre
        //return redirect()->route('ticket.index');
        //redirect a una ruta por su acción
        //return redirect()->action('App\Http\Controllers\TicketController@index');
        //redirect a la ruta anterior
        //return redirect()->back();
    }
    
    function delete($id) {
        $datos = $this->tickets['tickets'][$id];
        return view('ticket.delete', $datos);
    }
    
    function main() {
        $id = rand(1, count($this->tickets['tickets']));
        return view('ticket.main', $this->tickets['tickets'][$id]);
    }
    
    function ver() {
        return view('ticket.ver');
    }
    
    function fallback() {
        return view('fallback');
    }
}
