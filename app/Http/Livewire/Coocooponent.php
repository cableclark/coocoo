<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Coocoo;

class Coocooponent extends Component
{
    public $coocoo;
    public $latestCoocoos;

    public function mount () {
        $this->getCoocoos();
    }
    public function save () {
        Coocoo::create([
            "coocoo" => $this->coocoo,
            'user_id' => auth()->user()->id
        ]);
        request()->session()->flash('status',  'Your Coocoo has been saved!');
        $this->getCoocoos();
    }
    protected function getCoocoos () {
        $ids = auth()->user()->followings->map(function ($item) {
            return $item->id;
        });
        $ids[]= auth()->user()->id;
        $this->latestCoocoos = Coocoo::whereIn('user_id', $ids)->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.coocooponent');
    }
}
