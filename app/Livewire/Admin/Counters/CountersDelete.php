<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    public $counter;

    protected $listeners = ['counterDelete'];

    public function counterDelete($id)
    {
        // fill $counter with the eloquent model of the same id
        $this->counter = Counter::find($id);
        // show delete modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        // delete record
        $this->counter->delete();
        $this->reset('counter');
        // hide modal
        $this->dispatch('deleteModalToggle');
        // refresh counters data component
        $this->dispatch('refreshData')->to(CountersData::class);
    }

    public function render()
    {
        return view('admin.counters.counters-delete');
    }
}
