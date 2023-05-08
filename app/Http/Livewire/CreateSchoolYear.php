<?php

namespace App\Http\Livewire;

use App\Models\SchoolYear;
use Carbon\Carbon;
use Exception;
use Livewire\Component;

class CreateSchoolYear extends Component
{
    public $libelle;

    public function store(SchoolYear $schoolYear)
    {
        $this->validate([
            'libelle' => 'string|required|unique:school_years,shool_year'
        ]);

        try {

            $currentYear = Carbon::now()->format('Y');

            $check = SchoolYear::where('current_Year', $currentYear)->get();

            $alreadyExist = $check->count();

            if ($alreadyExist >= 5) {
                return redirect()->back()->with('error', 'L\'année en cour a déjà été ajouté');
            } else {
                $schoolYear->shool_year = $this->libelle;
                $schoolYear->current_Year = $currentYear;

                $schoolYear->save();

                if ($schoolYear) {
                    $this->libelle = '';
                }

                return to_route('settings')->with('success', 'Année scolaire ajouté');
            }
        } catch (Exception $e) {
        }
    }
    public function render()
    {
        return view('livewire.create-school-year');
    }
}
