@props([
    'title' => 'Titulo Padrão'
])

<div class="bg-white mt-2 rounded">
    <div class="text-black font-bold uppercase p-2 text-xs">
        {{ $title }}
    </div>
    <div class="text-lg text-red-600 font-bold bg-red-50 p-4 rounded border-2 border-red-300">
        {{ $slot }}
    </div>
</div>

