<?php

namespace App\Livewire\Front\Components;

use App\Models\Message;
use Livewire\Component;

class MessageComponent extends Component
{
    public $name, $email, $subject, $message;

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        Message::create($data);
        $this->reset('name', 'email', 'subject', 'message');
        session()->flash('message', 'Message sent successfully');
    }

    public function render()
    {
        return view('front.components.message-component');
    }
}
