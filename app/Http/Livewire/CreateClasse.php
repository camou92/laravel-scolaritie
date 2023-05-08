<?php

namespace App\Http\Livewire;

use App\Models\Classe;
use App\Models\level;
use App\Models\SchoolYear;
use Exception;
use Livewire\Component;

class CreateClasse extends Component
{
    public $libelle;
    public $level_id;

    public function store(Classe $classe)
    {
        $this->validate([
            'libelle' => 'string|required',
            'level_id' => 'string|required',
        ]);
        try{

            $classe->libelle = $this->libelle;
            $classe->level_id = $this->level_id;

            $classe->save();

            return redirect()->route('classes')->with('success', 'Classe ajouté');
        }catch(Exception $e){}
    }
    public function render()
    {
        //Recuperer l'année dont le active = '1'

        $activeSchoolYear = SchoolYear::where('active', '1')->first();

        //Charger les niveaux qui appartiennent a l'année en cour
        $currentLevels = level::where('school_year_id', $activeSchoolYear->id)->get();
        return view('livewire.create-classe', compact('currentLevels'));
    }
}
