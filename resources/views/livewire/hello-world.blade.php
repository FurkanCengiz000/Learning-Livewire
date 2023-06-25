<div>
    @foreach ($contacts as $contact)
        @livewire('say-hi', ['contact' => $contact], key($contact->id))
        <button wire:click="removeContact('{{ $contact->id }}')">Remove</button>
    @endforeach
    <hr>

    <button wire:click='$refresh'>Refresh</button>

    {{ now() }}

</div>
