<div>
    @foreach ($contacts as $contact)
        @livewire('say-hi', ['contact' => $contact], key($contact->id))
        <button wire:click="removeContact('{{ $contact->id }}')">Remove</button>
    @endforeach
    <hr>

    {{ now() }}

    <button wire:click="emitFoo" >Refresh Children</button>

</div>
