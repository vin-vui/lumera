<?php

namespace App\Http\Livewire;

use App\Models\Creator;
use App\Models\CaseStudy;
use App\Models\Testimonial;

use Livewire\Component;
use Carbon\Carbon;

class FrontCaseStudies extends Component
{

    public function render()
    {
        $creators = Creator::where('display', true)->inRandomOrder()->take(5)->get();

        $cases = CaseStudy::where('display', true)->get();

        $testimonials = Testimonial::all();

        return view('cases', compact('creators', 'cases', 'testimonials'))->layout('layouts.guest');
    }
}
