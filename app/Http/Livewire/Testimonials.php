<?php

namespace App\Http\Livewire;

use App\Models\Testimonial;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Carbon\Carbon;

class Testimonials extends Component
{
    use WireToast;

    public $text, $label, $type, $testimonial_id;
    public $confirming;
    public $isOpen = false;

    public function render()
    {
        $testimonials = Testimonial::all();

        return view('admin.testimonials', compact('testimonials'))->layout('layouts.app');
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
        $this->testimonial_id = '';
        $this->text = '';
        $this->label = '';
        $this->type = '';
    }

    public function store()
    {
        $save_text = false;

        $dataValid = $this->validate([
            'text' => 'nullable',
            'label' => 'nullable',
            'type' => 'nullable',
        ]);

        Testimonial::updateOrCreate(['id' => $this->testimonial_id], $dataValid);

        $this->resetInputFields();
        $this->closeModal();

        if($this->testimonial_id == '') {
            toast()->success('Témoignage ajouté !')->push();
        } else {
            toast()->success('Témoignage modifié !')->push();
        }
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $this->testimonial_id = $id;
        $this->text = $testimonial->text;
        $this->label = $testimonial->label;
        $this->type = $testimonial->type;

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        Testimonial::find($id)->delete();

        $this->closeModal();

        toast()->success('Témoignage supprimé')->push();
    }
}
