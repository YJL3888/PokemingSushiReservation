<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ReservationModel;

class Reservation extends Component
{
    public function render()
    {
        return view('livewire.reservation');
    }

    public $name;
    public $nb_guests;
    public $date;

    public function submitReservation()
    {     
        //dd($this->name, $this->nb_guests, $this->date);
        // dd('reserve function called');

        $data = $this->validate([
            'name'=>'required|email|unique:reservation',
            'nb_guests'=> 'required',
            'date' => 'required',
        
        ]);

        ReservationModel::create([
            'name' => $data['name'],
            'nb_guests' => $data['nb_guests'],
            'date' => $data['date'],
        ]);

        // try{
        //     ReservationModel::create([
        //         'name' => $this->name,
        //         'nb_guests' => $this->nb_guests,
        //         'date' => $this->date,
        //     ]);
        //     session()->flash('success','Post Created Successfully!!');
        // } catch (\Exception $ex) {
        //     session()->flash('error','Something goes wrong!!');
        // }

        // dump("Hello");


   
        return redirect('/');


    }    

}
