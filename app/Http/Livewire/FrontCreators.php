<?php

namespace App\Http\Livewire;

use App\Models\Creator;
use App\Models\Specialty;
use App\Models\CaseStudy;
use App\Models\Testimonial;

use Livewire\Component;
use Carbon\Carbon;

class FrontCreators extends Component
{
    public $search;
    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function render()
    {
        $creators = Creator::where('display', true)
        ->where(function($query) {
            return $query
                ->where('nick_name', 'like', '%'.$this->search.'%')
                ->orWhere('last_name', 'like', '%'.$this->search.'%')
                ->orWhere('first_name', 'like', '%'.$this->search.'%');
           })
        ->get();

        $cases = CaseStudy::where('display', true)->get();

        $testimonials = Testimonial::all();

        return view('creators', compact('creators', 'cases', 'testimonials'))->layout('layouts.guest');
    }
}
