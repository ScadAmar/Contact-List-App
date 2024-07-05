<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class CreateContactinfo extends Component
{
    public $name='';
    public $email='';
    public $phone='';
    public $address='';
    public function render()
    {
        return view('livewire.create-contactinfo');
    }

    public function save(){
        $validated=$this->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:contacts',
            'phone'=>'required|unique:contacts|max:255',
            'address'=>'required|max:255',
        ]);
        Contact::create($validated);
        session()->flash('success','Contact Created Successfully');
        return $this->redirect('/Contacts',navigate:true);
    }
}
