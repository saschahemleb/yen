@props(['label', 'messages'])

<label for="{{ $attributes->get('id') }}" class="">
    {{ $label }}
</label>
<input {!! $attributes->merge(['class' => 'block mt-1 w-full border h-9 px-3 py-1']) !!}>
@if (isset($messages))
    <ul class="text-sm text-red-600 dark:text-red-400 space-y-1">
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
