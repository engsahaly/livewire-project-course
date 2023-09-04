<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsDelete extends Component
{
    public $project;

    protected $listeners = ['projectDelete'];

    public function projectDelete($id)
    {
        // fill $project with the eloquent model of the same id
        $this->project = Project::find($id);
        // show delete modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        // delete record
        unlink($this->project->image);
        $this->project->delete();
        $this->reset('project');
        // hide modal
        $this->dispatch('deleteModalToggle');
        // refresh projects data component
        $this->dispatch('refreshData')->to(ProjectsData::class);
    }

    public function render()
    {
        return view('admin.projects.projects-delete');
    }
}
