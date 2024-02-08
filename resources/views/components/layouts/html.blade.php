<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? '' }} | Yen - personal finances</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body {{ $attributes->merge(['class' => 'w-full h-full font-sans antialiased text-zinc-900 bg-zinc-100 selection:bg-zinc-900 selection:text-zinc-100 dark:text-zinc-100 dark:bg-zinc-900 selection:dark:bg-zinc-100 selection:dark:text-zinc-900']) }}>
{{ $slot }}
</body>
</html>
