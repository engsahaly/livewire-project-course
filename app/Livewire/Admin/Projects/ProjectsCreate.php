<?php

namespace App\Livewire\Admin\Projects;

use Storage;
use File;
use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class ProjectsCreate extends Component
{
    use WithFileUploads;

    public $name, $description, $link, $image, $category_id, $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required|string',
            'link' => 'nullable|url',
            'image' => 'required',
            'category_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'Category',
        ];
    }

    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());
        // save image on my project
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $imageName, 'public');
        // save data in db
        $data['image'] = 'storage/images/' . $imageName;
        Project::create($data);
        $this->reset(['name', 'description', 'link', 'image', 'category_id']);
        // hide modal
        $this->dispatch('createModalToggle');
        // refresh skills data component
        $this->dispatch('refreshData')->to(ProjectsData::class);
    }

    public function render()
    {
        return view('admin.projects.projects-create');
    }
}
