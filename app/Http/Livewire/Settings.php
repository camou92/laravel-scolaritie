<?php

namespace App\Http\Livewire;

use App\Models\SchoolYear;
use Livewire\Component;
use Livewire\WithPagination;

class Settings extends Component
{
    use WithPagination;

    public $search = '';

    public function toggleStatus(SchoolYear $schoolYear)
    {
        //Mettre tout les lignes de la table a active = 0

        $query = SchoolYear::where('active', '1')->update(['active' => '0']);

        $schoolYear->active = '1';
        $schoolYear->save();
        $this->render();
    }
    public function render()
    {
        if (!empty($this->search)) {
            $schoolYearList = SchoolYear::where('shool_year', 'like', '%'. $this->search.'%')->orWhere('current_Year', 'like', '%' . $this->search . '%')->paginate(10);
        } else {
            $schoolYearList = SchoolYear::paginate(10);
        }

        return view('livewire.settings', compact('schoolYearList'));
    }
}
