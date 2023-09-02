<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{
    public $skill;

    protected $listeners = ['skillDelete'];

    public function skillDelete($id)
    {
        // fill $skill with the eloquent model of the same id
        $this->skill = Skill::find($id);
        // show delete modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        // delete record
        $this->skill->delete();
        $this->reset('skill');
        // hide modal
        $this->dispatch('deleteModalToggle');
        // refresh skills data component
        $this->dispatch('refreshData')->to(SkillsData::class);
    }

    public function render()
    {
        return view('admin.skills.skills-delete');
    }
}
