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
    public $creators;
    public $oldCreators;
    public $allCreators;

    public function mount()
    {
        // $this->creators = Creator::where('display', true)->inRandomOrder()->take(3)->get();

        $this->creators = Creator::where('display', true)->inRandomOrder()->take(3)->get();
        $this->oldCreators = session('oldCreators', []);
        $this->allCreators = array_merge($this->oldCreators->all(), $this->creators->all());

    }

    public function render()
    {
        $count = Creator::where('display', true)->count() + CaseStudy::where('display', true)->count();
        $creators = $this->creators;
        $oldCreators = $this->oldCreators;
        $allCreators = $this->allCreators;
        $creators_header = Creator::where('display', true)->inRandomOrder()->take(8)->get();
        $cases = CaseStudy::where('display', true)->inRandomOrder()->take(4)->get();
        $testimonials = Testimonial::all();
        $marks = Mark::all();

        return view('home', compact('creators', 'creators_header', 'cases', 'testimonials', 'marks', 'count'))->layout('layouts.guest');
    }

    public function randomizer()
    {
        // $this->mount();

        session(['oldCreators' => $this->creators]);

        $newCreators = Creator::where('display', true)->inRandomOrder()->take(3)->get();

        $this->oldCreators = $this->creators;
        $this->creators = $newCreators;
        $this->allCreators = array_merge($this->oldCreators->all(), $this->creators->all());

        $this->dispatchBrowserEvent('contentChanged');
    }
}
