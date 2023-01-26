<?php

namespace App\Http\Livewire;

use App\Models\CaseStudy;
use App\Models\Tag;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class CaseStudies extends Component
{
    use WireToast;
    use WithFileUploads;

    public $case_tags, $logo, $title, $description, $display, $type, $case_id, $selected_tags = [];
    public $confirming;
    public $isOpen = false;
    protected $listeners = ['reRenderParent'];

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


        return view('admin.cases', compact('cases'))->layout('layouts.app');
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
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->case_id = '';
        $this->logo = '';
        $this->title = '';
        $this->description = '';
        $this->display = '';
        $this->type = '';
        $this->selected_tags = [];
    }

    public function store()
    {
        $save_logo = false;

        $dataValid = $this->validate([
            'logo' => 'nullable',
            'title' => 'required',
            'description' => 'required',
            'display' => 'required',
            'type' => 'required',
        ]);

        if ($this->case_id != '') {
            $case = CaseStudy::find($this->case_id);
            if ($this->logo != $case->logo) {
                $save_logo = true;
            }
        } else {
            $save_logo = true;
        }

        if ($save_logo) {
            $dataValid['logo'] = Storage::disk('uploads')->put('/', $this->logo);
        }

        if ($this->case_id == '') {
            toast()->success('Etude de cas ajoutée !')->push();
        } else {
            toast()->success('Etude de cas modifiée !')->push();
        }

        $caseStudy = CaseStudy::updateOrCreate(['id' => $this->case_id], $dataValid);
        $caseStudy->tags()->sync($this->selected_tags);

        $this->resetInputFields();
        $this->closeModal();
    }

    public function edit($id)
    {
        $case = CaseStudy::findOrFail($id);

        $this->case_id = $id;
        $this->logo = $case->logo;
        $this->title = $case->title;
        $this->description = $case->description;
        $this->display = $case->display;
        $this->type = $case->type;
        $this->selected_tags = $case->tags->pluck('id')->toArray();

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        CaseStudy::find($id)->delete();

        $this->closeModal();

        toast()->success('Étude de cas supprimée')->push();
    }
}
