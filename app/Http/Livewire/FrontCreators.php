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

    public $search, $order = 'asc', $selectedSpecialties = [];
    protected $queryString = [
        'search' => ['except' => ''],
        'order' => ['except' => 'asc'],
    ];

    public function render()
    {
        $cases = CaseStudy::where('display', true)->inRandomOrder()->take(8)->get();
        $testimonials = Testimonial::all();
        $specialties = Specialty::all();

        $creators = Creator::query();

        if (!empty($this->selectedSpecialties)) {
            $creators->whereHas('specialties', function ($query) {
                $query->whereIn('specialties.id', $this->selectedSpecialties);
            });
        }

        $creators = $creators->where('display', true)
        ->where(function($query) {
            return $query
                ->where('nick_name', 'like', '%'.$this->search.'%')
                ->orWhere('last_name', 'like', '%'.$this->search.'%')
                ->orWhere('first_name', 'like', '%'.$this->search.'%');
           })
        ->orderBy('first_name', $this->order)
        ->paginate(12);

        $pagination = $creators->links('molecules.pagination');
        $countCreators = $creators->total();

        $this->dispatchBrowserEvent('contentChanged');

        return view('creators', compact('creators', 'countCreators', 'cases', 'testimonials', 'specialties', 'pagination'))->layout('layouts.guest');
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

}
