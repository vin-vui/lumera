<?php

namespace App\Http\Livewire;

use App\Models\Creator;
use App\Models\Specialty;

use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class Creators extends Component
{
    use WireToast;
    use WithFileUploads;

    public
    $creator_specialties,
    $first_name,
    $last_name,
    $nick_name,
    $location,
    $image,
    $description,
    $sn_tiktok,
    $sn_snapchat,
    $sn_instagram,
    $sn_youtube,
    $sn_linkedin,
    $display,
    $specialty_id,
    $creator_id;

    public $confirming;
    public $isOpen = false;
    protected $listeners = ['reRenderParent'];
    public $search;
    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function mount()
    {
        $this->creator_specialties = Specialty::all();
    }

    public function reRenderParent()
    {
        $this->mount();
    }

    public function render()
    {
        $creators = Creator::where('nick_name', 'like', '%'.$this->search.'%')->orWhere('last_name', 'like', '%'.$this->search.'%')->orWhere('first_name', 'like', '%'.$this->search.'%')->get();

        return view('admin.creators.index', compact('creators'))->layout('layouts.app');
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
        $this->creator_id = '';
        $this->first_name = '';
        $this->last_name = '';
        $this->nick_name = '';
        $this->location = '';
        $this->image = '';
        $this->description = '';
        $this->sn_tiktok = '';
        $this->sn_snapchat = '';
        $this->sn_instagram = '';
        $this->sn_youtube = '';
        $this->sn_linkedin = '';
        $this->display = false;
        $this->specialty_id = '';
    }

    public function store()
    {
        $save_image = false;

        $dataValid = $this->validate([
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'nick_name' => 'required',
            'location' => 'nullable',
            'image' => 'nullable',
            'description' => 'nullable',
            'sn_tiktok' => 'nullable',
            'sn_snapchat' => 'nullable',
            'sn_instagram' => 'nullable',
            'sn_youtube' => 'nullable',
            'sn_linkedin' => 'nullable',
            'display' => 'nullable',
            'specialty_id' => 'required',
        ]);

        if ($this->creator_id != '') {
            $creator = Creator::find($this->creator_id);
            if ($this->image != $creator->image) {
                $save_image = true;
            }
        } else {
            $save_image = true;
        }

        if ($save_image) {
            $dataValid['image'] = Storage::disk('uploads')->put('/', $this->image);
        }

        if ($this->creator_id == '') {
            toast()->success('Créateur ajouté')->push();
        } else {
            toast()->success('Créateur modifié')->push();
        }

        Creator::updateOrCreate(['id' => $this->creator_id], $dataValid);

        $this->resetInputFields();
        $this->closeModal();
    }

    public function edit($id)
    {
        $creator = Creator::findOrFail($id);

        $this->creator_id = $id;
        $this->first_name = $creator->first_name;
        $this->last_name = $creator->last_name;
        $this->nick_name = $creator->nick_name;
        $this->location = $creator->location;
        $this->image = $creator->image;
        $this->description = $creator->description;
        $this->sn_tiktok = $creator->sn_tiktok;
        $this->sn_snapchat = $creator->sn_snapchat;
        $this->sn_instagram = $creator->sn_instagram;
        $this->sn_youtube = $creator->sn_youtube;
        $this->sn_linkedin = $creator->sn_linkedin;
        $this->display = $creator->display;
        $this->specialty_id = $creator->specialty_id;

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
        Creator::find($id)->delete();

        $this->closeModal();

        toast()->success('Créateur supprimé')->push();
    }
}
