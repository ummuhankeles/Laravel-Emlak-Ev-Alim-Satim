<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record, $subject, $review, $home_id, $rate;

    public function mount($id) {
        $this->record = Product::findOrFail($id);
        $this->home_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput() {
        $this->subject = null;
        $this->review = null;
        $this->rate = null;
        $this->home_id = null;
        $this->IP = null;
    }

    public function store() {
        $this->validate([
            'subject' => 'required|min:5',
            'review' => 'required|min:10',
            'rate' => 'required'
        ]);

        \App\Models\Review::create([
            'home_id' => $this->home_id,
            'user_id' => Auth::id(),
            'IP' => $_SERVER['REMOTE_ADDR'],
            'subject' => $this->subject,
            'review' => $this->review,
            'rate' => $this->rate,

        ]);

        session()->flash('message', 'Review Save Successfully!');
        $this->resetInput();
    }

}
