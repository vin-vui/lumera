<?php

namespace App\Http\Livewire;

use App\Models\Creator;
use App\Models\Specialty;
use App\Models\CaseStudy;
use App\Models\Testimonial;

use Livewire\Component;
use Carbon\Carbon;

use Livewire\WithPagination;

class FrontCreators extends Component
{
    use WithPagination;

    public $search;
    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function render()
    {
        $countCreators = Creator::where('display', true)
        ->where(function($query) {
            return $query
                ->where('nick_name', 'like', '%'.$this->search.'%')
                ->orWhere('last_name', 'like', '%'.$this->search.'%')
                ->orWhere('first_name', 'like', '%'.$this->search.'%');
           })
        ->get()
        ->count();

        $creators = Creator::where('display', true)
        ->where(function($query) {
            return $query
                ->where('nick_name', 'like', '%'.$this->search.'%')
                ->orWhere('last_name', 'like', '%'.$this->search.'%')
                ->orWhere('first_name', 'like', '%'.$this->search.'%');
           })
        ->paginate(12);

        $cases = CaseStudy::where('display', true)->inRandomOrder()->take(8)->get();

        $testimonials = Testimonial::all();

        $pagination = $creators->links('molecules.pagination');

        $this->dispatchBrowserEvent('contentChanged');

        return view('creators', compact('creators', 'countCreators', 'cases', 'testimonials' , 'pagination'))->layout('layouts.guest');
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }
}
