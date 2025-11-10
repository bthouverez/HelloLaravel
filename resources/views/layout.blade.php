<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

<nav class="flex justify-between bg-gray-200 p-4">
    <div class="flex gap-4">
        <a href="/students" class="hover:underline
        {{ Request::is('students') ? 'text-blue-500' : '' }}">
            Tous
        </a>
        <a href="/students/create" class="hover:underline
        {{ Request::is('students/create') ? 'text-blue-500' : '' }}">
            Créer
        </a>
    </div>
    <a href="#">
        <button class="cursor-pointer bg-green-500 hover:bg-green-600 active:bg-green-700 px-4 py-2 rounded">Se connecter</button>
    </a>
</nav>

<section>
    @yield('mainSection')
</section>
</body>
</html>
