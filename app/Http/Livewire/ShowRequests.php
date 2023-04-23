<?php

namespace App\Http\Livewire;

use App\Models\MedicalAppointment;
use Livewire\Component;

class ShowRequests extends Component
{
    public $title;

    public function render()
    {
        $medicalAppointment = MedicalAppointment::all();
        return view('livewire.show-requests', compact('medicalAppointment'));
    }
}
