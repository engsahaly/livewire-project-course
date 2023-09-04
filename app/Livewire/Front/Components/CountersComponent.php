<?php

namespace App\Livewire\Front\Components;

use App\Models\Counter;
use Livewire\Component;

class CountersComponent extends Component
{
    public function render()
    {
        return view('front.components.counters-component', ['counters' => Counter::take(4)->get(),]);
    }
}
