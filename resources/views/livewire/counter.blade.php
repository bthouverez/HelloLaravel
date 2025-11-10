
<div>
    <button wire:click="decrement">
        -
    </button>
    {{ $count }}
    <button wire:click="increment">
        +
    </button>
    <br>

    <input type="text" wire:model.live="username" />
    <br>
    {{ $username }}




</div>
