<div class="bg-white shadow-lg rounded-xl  py-5 flex flex-col justify-center">
    <div class="flex flex-row justify-between">
        <img src="{{ asset('images/descount.svg') }}" alt="" class="">
        <img src="{{ asset('images/favorite-heart.svg') }}" alt="" class="pr-5">
    </div>
    <img src="{{ asset('images/burguer.svg') }}" alt="" class="max-h-52">
    <div class="flex flex-row justify-between items-center px-5">
        <div class="flex flex-col justify-start pt-5 max-w-[70%]">
            <img src="{{ asset('images/five-star.svg') }}" alt="" class="">
            <p class="pt-2 text-slate-800 font-bold text-xl">Fish Burguer</p>
            <p class="text-slate-800 text-xl font-bold"><span class="text-[#F8B602]">R$</span> 25,00
            </p>
        </div>
        <div class="flex flex-col max-w-[30%]">
            <button class="btn btn-square bg-[#F8B602]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" class="h-8 w-8" viewBox="0 0 16 16">
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                </svg>
            </button>
        </div>
    </div>
</div>
