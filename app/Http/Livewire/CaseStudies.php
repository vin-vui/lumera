<?php

namespace App\Http\Livewire;

use App\Models\CaseStudy;
use App\Models\Tag;
use App\Models\Creator;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class CaseStudies extends Component
{
    use WireToast;
    use WithFileUploads;

    public $case_tags, $title, $image, $client, $year, $case_title, $description, $bloc_wysiwyg, $display, $case_id, $selected_tags = [], $selected_creators = [];
    public $confirming;
    public $isOpen = false;
    protected $listeners = ['reRenderParent'];
    public $search;
    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function mount()
    {
        $this->case_tags = Tag::all();
    }

    public function reRenderParent()
    {
        $this->mount();
    }

    public function render()
    {
        $cases = CaseStudy::all();
        $case_creators = Creator::where('nick_name', 'like', '%'.$this->search.'%')->orWhere('last_name', 'like', '%'.$this->search.'%')->orWhere('first_name', 'like', '%'.$this->search.'%')->orderBy('nick_name')->get();
        return view('admin.cases.index', compact('cases', 'case_creators'))->layout('layouts.app');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->resetInputFields();
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->search = '';
        $this->case_id = '';
        $this->title = '';
        $this->image = '';
        $this->client = '';
        $this->year = '';
        $this->case_title = '';
        $this->description = '';
        $this->bloc_wysiwyg = '';
        $this->display = false;
        $this->selected_tags = [];
        $this->selected_creators = [];
    }

    public function store()
    {
        $save_image = false;

        $dataValid = $this->validate([
            'title' => 'required',
            'image' => 'nullable',
            'client' => 'nullable',
            'year' => 'nullable',
            'case_title' => 'nullable',
            'description' => 'required',
            'bloc_wysiwyg' => 'nullable',
            'display' => 'required',
        ]);

        if ($this->case_id != '') {
            $case = CaseStudy::find($this->case_id);
            if ($this->image != $case->image) {
                $save_image = true;
            }
        } else {
            $save_image = true;
        }

        if ($save_image) {
            $dataValid['image'] = Storage::disk('uploads')->put('/', $this->image);
        }

        if ($this->case_id == '') {
            toast()->success('Etude de cas ajoutée !')->push();
        } else {
            toast()->success('Etude de cas modifiée !')->push();
        }

        $caseStudy = CaseStudy::updateOrCreate(['id' => $this->case_id], $dataValid);
        $caseStudy->tags()->sync($this->selected_tags);
        $caseStudy->creators()->sync($this->selected_creators);

        $this->resetInputFields();
        $this->closeModal();
    }

    public function edit($id)
    {
        $case = CaseStudy::findOrFail($id);

        $this->case_id = $id;
        $this->title = $case->title;
        $this->image = $case->image;
        $this->client = $case->client;
        $this->year = $case->year;
        $this->case_title = $case->case_title;
        $this->description = $case->description;
        $this->bloc_wysiwyg = $case->bloc_wysiwyg;
        $this->display = $case->display;
        $this->selected_tags = $case->tags->pluck('id')->toArray();
        $this->selected_creators = $case->creators->pluck('id')->toArray();

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function changeDisplay()
    {
        $this->display = !$this->display;
    }

    public function delete($id)
    {
        CaseStudy::find($id)->delete();

        $this->closeModal();

        toast()->success('Étude de cas supprimée')->push();
    }
}
