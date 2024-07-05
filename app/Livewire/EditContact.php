<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;
class EditContact extends Component
{
    public $contact;
    public $name;
    public $email;
    public $phone;
    public $address;

    public function mount(Contact $contact){
        $this->contact=$contact;
        $this->name=$contact->name;
        $this->name=$contact->email;
        $this->name=$contact->phone;
        $this->name=$contact->address;
    }
    public function render()
    {
        return view('livewire.edit-contact');
    }

    public function updateContact(){
        $validated=$this->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'phone'=>'required|max:255',
            'address'=>'required|max:255',
        ]);

        $this->contact->update($validated);
        session()->flash('success','Contact Updated Successfully');
        return $this->redirect('/Contacts',navigate:true);
    }
}

