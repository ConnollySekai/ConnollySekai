<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- SEO -->
    <meta name="description" content="Description">
    <meta name="Keywords" content="keywords">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ URL::to('/') }}">

    <title>Itadakiru</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/site.webmanifest') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1 class="hidden">Itadakiru</h1>
    <div id="app" class="container mx-auto">
        <header class='header py-8 px-4'>
            <div class="logo">
                @include('svg.logo')
            </div>
        </header>
        <section class="hero flex flex-col sm:flex-row">
            <div class="w-full sm:w-1/2 px-4 py-8">
                <div class="tagline-wrapper text-center sm:text-left">
                    <h2 class="tagline text-3xl leading-tight mb-8 sm:text-4xl sm:leading-none sm:pt-12 md:text-5xl">{{ trans('translations.tagline') }}</h2>
                    <p class="mb-8 text-lg">{{ trans('translations.subtitle') }}</p>
                    <button class="btn hidden sm:block">{{ trans('translations.contact_us') }}</button>
                </div>
            </div>
            <div class="w-full flex flex-col items-center px-4 py-8 sm:flex-row sm:w-1/2">
                <div class="hero__image flex-1  mx-auto mb-8">
                    @include('svg.hero')
                </div>
                <button class="btn w-full sm:hidden">{{ trans('translations.contact_us') }}</button>
            </div>
        </section>
        <section class="features flex flex-col px-4 py-8 sm:flex-row sm:justify-between">
            <h3 class="hidden">{{ trans('translations.features') }}</h2>
            <div class="feature text-center p-8 mx-auto mb-8 rounded shadow sm:ml-0">
                <div class="feature__image mx-auto mb-2">
                    @include('svg.link-icon')
                </div>
                <p class="font-heading font-medium text-lg md:text-xl">{{ trans('translations.dynamic_address') }}</p>
            </div>
            <div class="feature text-center p-8 mx-auto mb-8 rounded shadow sm:mx-4">
                <div class="feature__image mx-auto mb-2">
                    @include('svg.loop')
                </div>
                <p class="font-heading font-medium text-lg md:text-xl">{{ trans('translations.deposited') }}</p>
            </div>
            <div class="feature text-center p-8 mx-auto mb-8 rounded shadow sm:mr-0">
                <div class="feature__image mx-auto mb-2">
                    @include('svg.lightning')
                </div>
                <p class="font-heading font-medium text-lg md:text-xl">{{ trans('translations.verification') }}</p>
            </div>
        </section>
        <section class="built-with flex flex-col sm:flex-row">
            <div class="w-full flex items-center px-4 py-8 :sm-1/2 sm:order-2">
                <h2 class="text-center text-3xl leading-tight sm:text-4xl sm:text-left sm:leading-none">{{ trans('translations.for_websites') }}</h2>
            </div>
            <div class="w-full px-4 py-8 :sm-1/2 sm:order-1 md:relative">
                <div class="built-with__image mx-auto">
                    @include('svg.website-image')
                </div>
                <div class="built-with__logos flex items-center justify-center mt-4 md:absolute">
                    <div class="flex items-center">
                        @include('svg.php-logo')
                    </div>
                    <div class="flex items-center">
                        @include('svg.laravel-logo')
                    </div>
                </div>
            </div>
        </section>
        <section class="projects text-center px-4 pt-8 md:pt-16">
            <h3 class="text-xl mb-8 md:text-3xl">{{ trans('translations.previous_projects') }}</h3>
            <div class="flex flex-col md:block">
                <div class="projects__logo mx-auto md:inline-block">
                        @include('svg.tevne-logo')
                </div>
                <div class="projects__logo mx-auto md:inline-block">
                        @include('svg.sekaipay-logo')
                </div>
            </div>
        </section>
        <footer class="footer flex p-4 md:pb-8">
            <p class="mx-auto font-bold text-lg">itadakiru@gmail.com</p>
        </footer>
    </div>
</body>
</html>