<?php

namespace App\Http\Livewire;

use App\Models\Creator;

use Illuminate\Support\Str;
use Livewire\Component;
use Carbon\Carbon;

class FrontCreator extends Component
{

    public  $creator_id;

    public function mount($creator_id)
    {
        $this->id = $creator_id;
    }

    public function render()
    {
        $creator = Creator::where('id', $this->id)->where('display', true)->first();

        return view('creator', compact('creator'))->layout('layouts.guest');
    }
}
