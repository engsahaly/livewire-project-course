<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{
    public $message;

    protected $listeners = ['messageDelete'];

    public function messageDelete($id)
    {
        // fill $message with the eloquent model of the same id
        $this->message = Message::find($id);
        // show delete modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        // delete record
        $this->message->delete();
        $this->reset('message');
        // hide modal
        $this->dispatch('deleteModalToggle');
        // refresh messages data component
        $this->dispatch('refreshData')->to(MessagesData::class);
    }

    public function render()
    {
        return view('admin.messages.messages-delete');
    }
}
