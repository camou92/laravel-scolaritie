<?php

namespace App\Http\Livewire;

use App\Models\level;
use App\Models\SchoolYear;
use Livewire\Component;
use Livewire\WithPagination;

class ListeNiveaux extends Component
{
    use WithPagination;
    public $search = '';

    public function delete(level $level){
        $level->delete();
        return redirect()->route('niveaux')->with('success', 'Niveau supprimé');
    }

    public function render()
    {
        if (!empty($this->search)) {
            $levels = level::where('libelle', 'like', '%'. $this->search.'%')->orWhere('code', 'like', '%' . $this->search . '%')->paginate(10);
        } else {

            $activeSchoolYear = SchoolYear::where('active', '1')->first();

            $levels = level::where('school_year_id', $activeSchoolYear->id)->paginate(10);
        }
        return view('livewire.liste-niveaux', compact('levels'));
    }
}
