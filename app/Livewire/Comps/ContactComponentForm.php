<?php

namespace App\Livewire\Comps;

use App\Models\Contact;
use Livewire\Component;

class ContactComponentForm extends Component
{
    public $fullname = '';
    public $email = '';
    public $phone = '';
    public $message = '';

    public function save()
    {
        $this->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        $this->reset();
        session()->flash('message', 'Contact saved successfully.');
    }

    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.comps.contact-component-form', [
            'contacts' => $contacts
        ]);
    }
}
