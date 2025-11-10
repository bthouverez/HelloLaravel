
<h1>
    Coucou
    {{ Auth::user()?->name }}
</h1>

@auth
    Je suis identifié
@else
    Je ne suis plus identifié
@endauth

@if(Auth::user())

@else

@endif
@livewire('counter')
<livewire:counter />
<livewire:update-student />
<livewire:update-student />
<livewire:update-student />
<livewire:update-student />
