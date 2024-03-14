@props(['label'])


<div class="bg-white shadow-lg rounded-xl px-3 py-5 flex flex-col justify-center items-center">
    <img src="{{ asset('images/cupcake.svg') }}" alt="" class="max-h-32">
    <p class="pt-2 text-slate-500">{{ $label }}</p>
</div>
