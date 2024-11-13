@extends('merchant.layout')

@section('content')
    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">


        <a href="https://laracasts.com"
            class="flex items-start h-56 gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
           

            <div class="pt-3 sm:pt-5">
                <h2 class="text-xl font-semibold text-black dark:text-white">#2 Pesanan</h2>

                <p class="mt-4 text-md/relaxed">
                    4 x Ayam Krispi
                </p>
                <p class="mt-4 text-md/relaxed">
                    Rp48.000
                </p>
            </div>
            <a href="https://laracasts.com"
                class="flex items-start h-56 gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">#1 Pesanan</h2>
                    <p class="mt-4 text-md/relaxed">
                        2 x Ayam Krispi
                    </p>
                    <p class="mt-4 text-md/relaxed">
                        Rp24.000
                    </p>
                </div>
            </a>
    </div>


@stop
