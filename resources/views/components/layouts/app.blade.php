<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
    <ul class="nav-links">
        <li><a href="/students" wire:navigate>Tous</a></li>
        <li><a href="/students/create" wire:navigate>Créer</a></li>
    </ul>

        {{ $slot }}
    </body>
</html>
