@props(['label', 'messages'])

<label for="{{ $attributes->get('id') }}">
    {{ $label }}
</label>
<input {!! $attributes->merge(['class' => 'block mt-1 w-full border border-zinc-400 h-9 px-3 py-1 bg-white dark:bg-black dark:border-zinc-700']) !!}>
@if (isset($messages))
    <ul class="text-sm text-red-600 dark:text-red-400 space-y-1">
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
