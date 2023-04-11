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
use Illuminate\Support\Arr;

class CaseStudies extends Component
{
    use WireToast;
    use WithFileUploads;

    public $case_tags, $image, $video_1, $video_2, $client, $year, $description, $bloc_wysiwyg, $display, $case_id, $selected_tags = [], $selected_creators = [], $associated_creators = [], $trixId;
    public $confirming;
    public $isOpen = false;
    protected $listeners = ['reRenderParent'];
    public $search;
    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function mount()
    {
        $this->trixId = 'trix-' . uniqid();
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
        $this->image = '';
        $this->video_1 = '';
        $this->video_2 = '';
        $this->client = '';
        $this->year = '';
        $this->description = '';
        $this->bloc_wysiwyg = '';
        $this->display = false;
        $this->selected_tags = [];
        $this->selected_creators = [];
        $this->associated_creators = [];
    }

    public function store()
    {
        $save_image = false;

        $dataValid = $this->validate([
            'image' => 'nullable',
            'video_1' => 'nullable',
            'video_2' => 'nullable',
            'client' => 'nullable',
            'year' => 'nullable',
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
        $this->image = $case->image;
        $this->video_1 = $case->video_1;
        $this->video_2 = $case->video_2;
        $this->client = $case->client;
        $this->year = $case->year;
        $this->description = $case->description;
        $this->bloc_wysiwyg = $case->bloc_wysiwyg;
        $this->display = $case->display;
        $this->selected_tags = $case->tags->pluck('id')->toArray();
        $this->selected_creators = $case->creators->pluck('id')->toArray();
        foreach ($case->creators as $creator) {
            $this->associated_creators[] = $creator->nick_name;
        }

        $this->openModal();
    }

    public function addCreator($id)
    {
        $creator = Creator::find($id);
        if (in_array($creator->nick_name, $this->associated_creators)) {
            if (($key = array_search($creator->nick_name, $this->associated_creators)) !== false) {
                unset($this->associated_creators[$key]);
            }
        } else {
            $this->associated_creators[] = $creator->nick_name;
        }
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
