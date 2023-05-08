<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditEleve extends Component
{
    public $matricule;
    public $nom;
    public $prenom;
    public $naissance;
    public $contact_parent;

    public function mount(){
        $this->matricule = $this->students->matricule;
    }
    public function render()
    {
        return view('livewire.edit-eleve');
    }
}
