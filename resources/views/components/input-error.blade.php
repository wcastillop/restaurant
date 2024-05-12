@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm list-none space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="bg-red-100 border-l-4 border-red-600 dark:border-red-400 text-red-600 dark:text-red-400 font-bold p-1">{{ $message }}</li>
        @endforeach
    </ul>
@endif
