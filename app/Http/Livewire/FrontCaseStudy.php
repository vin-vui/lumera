<?php

namespace App\Http\Livewire;

use App\Models\CaseStudy;

use Illuminate\Support\Str;
use Livewire\Component;
use Carbon\Carbon;

class FrontCaseStudy extends Component
{

    public  $case_id;

    public function mount($case_id)
    {
        $this->id = $case_id;
    }

    public function render()
    {
        $case = CaseStudy::where('id', $this->id)->where('display', true)->first();

        return view('case', compact('case'))->layout('layouts.guest');
    }
}
