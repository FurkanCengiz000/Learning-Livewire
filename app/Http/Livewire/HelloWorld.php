<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $contacts;
    public $names = ['Jelly', 'Man', 'Chico'];

    protected $listeners =  ['foo' => '$refresh'];

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function removeContact($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
