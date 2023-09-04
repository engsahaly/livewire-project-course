<?php

namespace App\Livewire\Front\Components;

use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    public $count;

    public function render()
    {
        return view('front.components.services-component', [
            'services' => Service::take($this->count ?? 6)->get(),
        ]);
    }
}
