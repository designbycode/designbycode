<div {{ $attributes->merge(['class' => 'w-full min-h-screen isolate relative hero flex items-center max-w-full overflow-clip']) }}>
    {{--    <canvas class="absolute top-0 bottom-0 opacity-60 w-full " id="canvas"></canvas>--}}
    <div class="wrapper card relative z-10 select-none">
        <div class="w-full max-w-2xl">
            <h1 class="heading-1  text-balance">
                Hi, I am
                <span class="grad pb-1 inline-block">Claude Myburgh.</span>
                Web Artisan and Developer.
            </h1>
            <p class="text-xl my-3 font-semibold  leading-loose">I ❤️ building sublime websites for people like you.</p>
        </div>
    </div>
    <div class="absolute w-full inset-y-0 md:w-1/2 min-h-screen top-0 -right-20 ">
        <div class="lg:w-1/2 h-[150px] ml-auto rounded-b-full bg-primary-500 mix-blend-color-dodge blur-3xl relative z-10 "></div>
        <img class="absolute drop-shadow-large origin-top-right w-full tentacle top-0 right-0" width="1141" height="815" src="{{ Vite::asset('resources/img/tentacles/t1.webp') }}" alt="tentacle 1">
        <img class="absolute drop-shadow-large origin-top-right w-full  tentacle top-0 right-0" width="1141" height="815" src="{{ Vite::asset('resources/img/tentacles/t2.webp') }}" alt="tentacle 2">
        <img class="absolute drop-shadow-large origin-top-right w-full tentacle top-0 right-0" width="1141" height="815" src="{{ Vite::asset('resources/img/tentacles/t3.webp') }}" alt="tentacle 3">
        <img class="absolute drop-shadow-large origin-top-right w-full tentacle top-0 right-0" width="1141" height="815" src="{{ Vite::asset('resources/img/tentacles/t4.webp') }}" alt="tentacle 4">
        <img class="absolute drop-shadow-large origin-top-right w-full tentacle top-0 right-0" width="1141" height="815" src="{{ Vite::asset('resources/img/tentacles/t5.webp') }}" alt="tentacle 5">
    </div>
</div>



