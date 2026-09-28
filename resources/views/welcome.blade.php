<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Práctica Laravel x npm</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50 text-slate-900 dark:bg-[#0b0d14] dark:text-slate-50 antialiased">

    {{-- Botones de autenticación (esquina superior derecha) --}}
    @if (Route::has('login'))
        <nav class="absolute top-0 right-0 flex items-center gap-3 p-6">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="rounded-lg bg-slate-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-slate-700 dark:bg-white dark:text-slate-900 dark:hover:bg-slate-200">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-semibold transition hover:bg-slate-100 dark:border-white/15 dark:hover:bg-white/10">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="rounded-lg bg-[#ff2d20] px-4 py-2 text-sm font-semibold text-white transition hover:bg-[#e0261a]">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif

    {{-- Contenido central --}}
    <main class="flex min-h-screen flex-col items-center justify-center gap-12 p-8">

        <h1 class="bg-[linear-gradient(90deg,#ff2d20,#bd34fe_55%,#41d1ff)] bg-clip-text text-center text-4xl font-extrabold tracking-tight text-transparent sm:text-6xl">
            Práctica Laravel x npm
        </h1>

        <div class="flex flex-wrap items-center justify-center gap-8">

            {{-- Logo de Laravel --}}
            <div class="grid h-48 w-48 place-items-center rounded-3xl border border-slate-900/10 bg-white/70 shadow-xl shadow-slate-900/10 backdrop-blur transition duration-300 hover:-translate-y-2 hover:scale-105 dark:border-white/10 dark:bg-white/5 dark:shadow-black/50">
                <svg class="h-24 w-auto" viewBox="0 0 50 52" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Laravel">
                    <path fill="#FF2D20" d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214L9.61 34.281l-.002-.002-.003-.001c-.031-.018-.058-.043-.087-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09V12.33L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z"/>
                </svg>
            </div>

            {{-- Logo de Vite --}}
            <div class="grid h-48 w-48 place-items-center rounded-3xl border border-slate-900/10 bg-white/70 shadow-xl shadow-slate-900/10 backdrop-blur transition duration-300 hover:-translate-y-2 hover:scale-105 dark:border-white/10 dark:bg-white/5 dark:shadow-black/50">
                <svg class="h-24 w-auto" viewBox="0 0 410 404" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Vite">
                    <path fill="url(#vite-a)" d="M399.641 59.5246L215.643 388.545C211.844 395.338 202.084 395.378 198.228 388.618L10.5817 59.5563C6.38087 52.1896 12.6802 43.2665 21.0281 44.7586L205.223 77.6824C206.398 77.8924 207.601 77.8904 208.776 77.6763L389.119 44.8058C397.439 43.2894 403.768 52.1434 399.641 59.5246Z"/>
                    <path fill="url(#vite-b)" d="M292.965 1.5744L156.801 28.2552C154.563 28.6937 152.906 30.5903 152.771 32.8664L144.395 174.33C144.198 177.662 147.258 180.248 150.51 179.498L188.42 170.749C191.967 169.931 195.172 173.055 194.443 176.622L183.18 231.775C182.422 235.487 185.907 238.661 189.532 237.56L212.947 230.446C216.577 229.344 220.065 232.527 219.297 236.242L201.398 322.875C200.278 328.294 207.486 331.249 210.492 326.603L212.5 323.5L323.454 102.072C325.312 98.3645 322.108 94.137 318.036 94.9228L279.014 102.454C275.347 103.161 272.227 99.746 273.262 96.1583L298.731 7.86689C299.767 4.27314 296.636 0.855181 292.965 1.5744Z"/>
                    <defs>
                        <linearGradient id="vite-a" x1="6" y1="33" x2="235" y2="344" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#41D1FF"/>
                            <stop offset="1" stop-color="#BD34FE"/>
                        </linearGradient>
                        <linearGradient id="vite-b" x1="194.651" y1="8.818" x2="236.076" y2="292.989" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFEA83"/>
                            <stop offset="0.083" stop-color="#FFDD35"/>
                            <stop offset="1" stop-color="#FFA800"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>

        </div>
    </main>

</body>
</html>