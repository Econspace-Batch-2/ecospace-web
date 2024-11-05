{{-- resources/views/components/button.blade.php --}}
@props([
    'type' => 'button', // Default type
    'class' => 'bg-black text-white p-4 px-8 rounded-4 font-bold text-xl md:text-2xl lg:text-3xl rounded-xl hover:scale-105 duration-300',
    'label' => 'Submit' // Default label
])

<button type="{{ $type }}" {{ $attributes->merge(['class' => "$class"]) }}>
    {{ $label }}
</button>