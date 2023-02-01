<?php

namespace App\Http\Livewire;

use App\Models\Mark;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class Marks extends Component
{
    use WireToast;
    use WithFileUploads;

    public $image, $label, $mark_id;
    public $confirming;
    public $isOpen = false;

    public function render()
    {
        $marks = Mark::all();

        return view('admin.marks', compact('marks'))->layout('layouts.app');
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
        $this->mark_id = '';
        $this->image = '';
        $this->label = '';
    }

    public function store()
    {
        $save_image = false;

        $dataValid = $this->validate([
            'image' => 'required',
            'label' => 'required',
        ]);

        if ($this->mark_id != '') {
            $mark = Mark::find($this->mark_id);
            if ($this->image != $mark->image) {
                $save_image = true;
            }
        } else {
            $save_image = true;
        }

        if ($save_image) {
            $dataValid['image'] = Storage::disk('uploads')->put('/', $this->image);
        }

        Mark::updateOrCreate(['id' => $this->mark_id], $dataValid);

        $this->resetInputFields();
        $this->closeModal();

        if($this->mark_id == '') {
            toast()->success('Marque ajoutée')->push();
        } else {
            toast()->success('Marque modifiée')->push();
        }
    }

    public function edit($id)
    {
        $mark = Mark::findOrFail($id);

        $this->mark_id = $id;
        $this->image = $mark->image;
        $this->label = $mark->label;

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        Mark::find($id)->delete();

        $this->closeModal();

        toast()->success('Marque supprimée')->push();
    }
}
