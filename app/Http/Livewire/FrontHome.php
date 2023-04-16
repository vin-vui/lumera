<?php

namespace App\Http\Livewire;

use App\Models\Creator;
use App\Models\CaseStudy;
use App\Models\Testimonial;
use App\Models\Mark;

use Livewire\Component;
use Carbon\Carbon;

class FrontHome extends Component
{

    public function mount()
    {
        $this->creators = Creator::where('display', true)->inRandomOrder()->take(3)->get();
    }

    public function render()
    {
        $count = Creator::where('display', true)->count() + CaseStudy::where('display', true)->count();
        $creators = $this->creators;
        $creators_header = Creator::where('display', true)->inRandomOrder()->take(8)->get();
        $cases = CaseStudy::where('display', true)->inRandomOrder()->take(5)->get();
        $testimonials = Testimonial::all();
        $marks = Mark::all();

        return view('home', compact('creators', 'creators_header', 'cases', 'testimonials', 'marks', 'count'))->layout('layouts.guest');
    }

    public function randomizer()
    {
        $this->mount();
    }
}
