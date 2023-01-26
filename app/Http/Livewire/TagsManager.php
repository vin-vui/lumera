<?php

namespace App\Http\Livewire;

use App\Models\Tag;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Carbon\Carbon;

class TagsManager extends Component
{
    use WireToast;

    public $tags, $label, $tag_id, $selected_tag;
    public $isOpen = 0;

    public function mount()
    {
        $this->tags = Tag::all();
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
        $this->selected_tag = '';
    }

    function new()
    {
        $this->openModal();
        $this->resetInputFields();
    }

    public function store()
    {
        $dataValide = $this->validate([
            'label' => 'required',
        ]);

        $merged = array_merge($dataValide, ['user_id' => auth()->user()->id]);

        Tag::updateOrCreate(['id' => $this->selected_tag], $merged);

        $this->closeModal();
        $this->resetInputFields();
        $this->mount();

        if ($this->selected_tag == null) {
            toast()->success("Nouveau tag ajouté avec succès.")->push();
        } else {
            toast()->success("Tag modifié avec succès.")->push();
        }

        $this->emit('reRenderParent');
    }

    public function edit()
    {
        $dataValide = $this->validate([
            'selected_tag' => 'required',
        ]);

        $this->label = Tag::find($this->selected_tag)->label;
        $this->openModal();
    }

    public function delete()
    {
        $dataValide = $this->validate([
            'selected_tag' => 'required',
        ]);

        Tag::find($this->selected_tag)->delete();

        toast()->success("Tag supprimé avec succès.")->push();

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
