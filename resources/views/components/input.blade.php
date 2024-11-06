{{-- resources/views/components/input.blade.php --}}
@props([
    'type' => 'text', // Default type
    'name' => '', // Default name
    'id' => '', // Default id
    'value' => '', // Default value
    'placeholder' => '', // Default placeholder
    'class' => '', // Default class
    'required' => false, // Default required
    'autocomplete' => 'off', // Default autocomplete
    'autofocus' => false, // Default autofocus
])

<input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" value="{{ $value }}" placeholder="{{ $placeholder }}" class="bg-white text-black text-sm rounded-xl border-2 px-5 py-4 outline-none {{ $class }}">