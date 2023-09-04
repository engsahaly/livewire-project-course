<?php

namespace App\Livewire\Front\Components;

use App\Models\Skill;
use Livewire\Component;

class SkillsComponent extends Component
{
    public function render()
    {
        return view('front.components.skills-component', [
            'skills' => Skill::get(),
        ]);
    }
}
