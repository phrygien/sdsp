<?php

namespace App\Livewire;

use App\Models\Materiel;
use Livewire\Component;

class MaterielComponent extends Component
{
    /*
    * proprieté urils
    */
    public $afficherFormeCreate = false;
    public $afficherListe = true;

    public $materiel_id, $description, $num_serie, $cout_acquisition, $date_acquisition, $statut;

    public function render()
    {
        return view('livewire.materiel-component');
    }

    /*
    * afficher formuaire ajout materiele
    */
    public function displayForme()
    {
        $this->afficherFormeCreate = true;
        $this->afficherListe = false;
    }

    public function annuler()
    {
        $this->afficherFormeCreate = false;
        $this->afficherListe = true;
    }

    public $notifcation = false;
    public function store()
    {
        Materiel::create([
            'description' => $this->description,
            'num_serie' => $this->num_serie,
            'cout_acquisition' => $this->cout_acquisition,
            'date_acquisition' => now(),
            'statut' => $this->statut
        ]);
        $this->notifcation = true;
        //session()->flash('message', 'Materiele bien enregistré!');
        $this->reset();
    }
}
