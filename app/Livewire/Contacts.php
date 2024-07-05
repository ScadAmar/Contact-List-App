<?php

namespace App\Livewire;

use Livewire\Component;
use  App\Models\Contact;
//use Auth;
class Contacts extends Component
{
    public $contacts=[];
    public function mount(){
        $this->contacts=Contact::all();
    }
    public function render()
    {
        //dd(Auth::user()->name);
        return view('livewire.contacts');
    }

    public function deletecontact(Contact $contact){
        $contact->delete();
        session()->flash('success','Contact Deleted Successfully');
        return $this->redirect('/Contacts',navigate:true);
    }
}
