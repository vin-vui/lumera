<?php

namespace App\Http\Livewire;

use App\Models\Specialty;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Carbon\Carbon;

class SpecialtiesManager extends Component
{
    use WireToast;

    public $specialties, $label, $specialty_id, $selected_specialty;
    public $isOpen = 0;

    public function mount()
    {
        $this->specialties = Specialty::all();
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
        $this->label = '';
        $this->selected_specialty = '';
    }

    function new()
    {
        $this->openModal();
        $this->resetInputFields();
    }

    public function store()
    {
        $dataValid = $this->validate([
            'label' => 'required',
        ]);

        Specialty::updateOrCreate(['id' => $this->selected_specialty], $dataValid);

        $this->closeModal();
        $this->resetInputFields();
        $this->mount();

        if ($this->selected_specialty == null) {
            toast()->success("Nouveau domaine ajouté")->push();
        } else {
            toast()->success("Domaine modifié")->push();
        }

        $this->emit('reRenderParent');
    }

    public function edit()
    {
        $this->label = Specialty::find($this->selected_specialty)->label;
        $this->openModal();
    }

    public function delete()
    {
        Specialty::find($this->selected_specialty)->delete();

        toast()->success("Domaine supprimé")->push();

        $this->closeModal();
        $this->resetInputFields();
        $this->mount();

        $this->emit('reRenderParent');
    }

    public function cancel()
    {
        $this->closeModal();
        $this->resetInputFields();
    }

}
