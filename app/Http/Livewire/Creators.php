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
    $image,
    $description,
    $sn_tiktok,
    $sn_snapchat,
    $sn_instagram,
    $sn_youtube,
    $sn_linkedin,
    $sn_facebook,
    $sn_twitter,
    $sn_twitch,
    $tn_tiktok,
    $tn_snapchat,
    $tn_instagram,
    $tn_youtube,
    $tn_linkedin,
    $tn_facebook,
    $tn_twitter,
    $tn_twitch,
    $email,
    $display,
    $creator_id,
    $selected_specialties = [];

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
        $this->image = '';
        $this->description = '';
        $this->sn_tiktok = '';
        $this->sn_snapchat = '';
        $this->sn_instagram = '';
        $this->sn_youtube = '';
        $this->sn_linkedin = '';
        $this->sn_facebook = '';
        $this->sn_twitter = '';
        $this->sn_twitch = '';
        $this->tn_tiktok = null;
        $this->tn_snapchat = null;
        $this->tn_instagram = null;
        $this->tn_youtube = null;
        $this->tn_linkedin = null;
        $this->tn_facebook = null;
        $this->tn_twitter = null;
        $this->tn_twitch = null;
        $this->email = '';
        $this->display = false;
        $this->selected_specialties = [];
    }

    public function store()
    {
        $save_image = false;

        $dataValid = $this->validate([
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'nick_name' => 'required',
            'image' => 'nullable',
            'description' => 'nullable',
            'sn_tiktok' => 'nullable',
            'sn_snapchat' => 'nullable',
            'sn_instagram' => 'nullable',
            'sn_youtube' => 'nullable',
            'sn_linkedin' => 'nullable',
            'sn_facebook' => 'nullable',
            'sn_twitter' => 'nullable',
            'sn_twitch' => 'nullable',
            'tn_tiktok' => 'nullable',
            'tn_snapchat' => 'nullable',
            'tn_instagram' => 'nullable',
            'tn_youtube' => 'nullable',
            'tn_linkedin' => 'nullable',
            'tn_facebook' => 'nullable',
            'tn_twitter' => 'nullable',
            'tn_twitch' => 'nullable',
            'email' => 'nullable',
            'display' => 'nullable',
        ]);

        if ($dataValid['tn_tiktok'] == '') {
            $dataValid['tn_tiktok'] = 0;
        }
        if ($dataValid['tn_snapchat'] == '') {
            $dataValid['tn_snapchat'] = 0;
        }
        if ($dataValid['tn_snapchat'] == '') {
            $dataValid['tn_snapchat'] = 0;
        }
        if ($dataValid['tn_instagram'] == '') {
            $dataValid['tn_instagram'] = 0;
        }
        if ($dataValid['tn_youtube'] == '') {
            $dataValid['tn_youtube'] = 0;
        }
        if ($dataValid['tn_linkedin'] == '') {
            $dataValid['tn_linkedin'] = 0;
        }
        if ($dataValid['tn_facebook'] == '') {
            $dataValid['tn_facebook'] = 0;
        }
        if ($dataValid['tn_twitter'] == '') {
            $dataValid['tn_twitter'] = 0;
        }
        if ($dataValid['tn_twitch'] == '') {
            $dataValid['tn_twitch'] = 0;
        }

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

        $creator = Creator::updateOrCreate(['id' => $this->creator_id], $dataValid);
        $creator->specialties()->sync($this->selected_specialties);

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
        $this->image = $creator->image;
        $this->description = $creator->description;
        $this->sn_tiktok = $creator->sn_tiktok;
        $this->sn_snapchat = $creator->sn_snapchat;
        $this->sn_instagram = $creator->sn_instagram;
        $this->sn_youtube = $creator->sn_youtube;
        $this->sn_linkedin = $creator->sn_linkedin;
        $this->sn_facebook = $creator->sn_facebook;
        $this->sn_twitter = $creator->sn_twitter;
        $this->sn_twitch = $creator->sn_twitch;
        $this->tn_tiktok = $creator->tn_tiktok;
        $this->tn_snapchat = $creator->tn_snapchat;
        $this->tn_instagram = $creator->tn_instagram;
        $this->tn_youtube = $creator->tn_youtube;
        $this->tn_linkedin = $creator->tn_linkedin;
        $this->tn_facebook = $creator->tn_facebook;
        $this->tn_twitter = $creator->tn_twitter;
        $this->tn_twitch = $creator->tn_twitch;
        $this->email = $creator->email;
        $this->display = $creator->display;
        $this->selected_specialties = $creator->specialties->pluck('id')->toArray();

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
