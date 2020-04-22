<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- SEO -->
    <meta name="Itadakiru" content="Bitcoin Payment Processor">
    <meta name="Keywords" content="Bitcoin Crypto Website Payment Processor Hire Build">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ URL::to('/') }}">

    <title>Itadakiru</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/site.webmanifest') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="overflow-x-hidden">
    <h1 class="hidden">Itadakiru</h1>
    <div id="app" class="container mx-auto">
        <header class='header py-8 px-4'>
            <div class="logo">
                @include('svg.logo')
            </div>
        </header>
        <section class="hero flex flex-col sm:flex-row">
            <div class="w-full sm:w-1/2 px-4 py-8">
                <div class="tagline-wrapper text-center sm:text-left to-animate">
                    <h2 class="hero__tagline text-3xl leading-tight mb-8 sm:text-4xl sm:leading-none sm:pt-12 md:text-5xl to-animate">{{ trans('translations.tagline') }}</h2>
                    <p class="hero__subtitle mb-8 text-lg to-animate">{{ trans('translations.subtitle') }}</p>
                    <button class="hero__btn btn hidden sm:block to-animate" @click="showContactForm()">{{ trans('translations.contact_us') }}</button>
                </div>
            </div>
            <div class="w-full flex flex-col items-center px-4 py-8 sm:flex-row sm:w-1/2">
                <div class="hero__image flex-1  mx-auto mb-8">
                    @include('svg.hero')
                </div>
                <button class="btn w-full sm:hidden" @click="showContactForm()">{{ trans('translations.contact_us') }}</button>
            </div>
        </section>
        <section class="features flex flex-col px-4 py-8 sm:flex-row sm:justify-center animate" data-animation="features">
            <h3 class="hidden">{{ trans('translations.features') }}</h2>
            <div class="feature text-center p-4 pb-6 mx-auto mb-8 rounded shadow sm:ml-auto">
                <div class="feature__image mx-auto mb-2">
                    @include('svg.link-icon')
                </div>
                <p class="font-heading font-medium text-lg">{{ trans('translations.dynamic_address') }}</p>
            </div>
            <div class="feature text-center p-4 pb-8 mx-auto mb-8 rounded shadow sm:mx-4">
                <div class="feature__image mx-auto mb-2">
                    @include('svg.loop')
                </div>
                <p class="font-heading font-medium text-lg">{{ trans('translations.deposited') }}</p>
            </div>
            <div class="feature text-center p-4 pb-8 mx-auto mb-8 rounded shadow sm:mr-auto">
                <div class="feature__image mx-auto mb-2">
                    @include('svg.lightning')
                </div>
                <p class="font-heading font-medium text-lg">{{ trans('translations.verification') }}</p>
            </div>
        </section>
        <section class="built-with flex flex-col sm:flex-row animate" data-animation="builtWith">
            <div class="w-full flex items-center px-4 py-8 :sm-1/2 sm:order-2">
                <h2 class="built-with__heading text-center text-3xl leading-tight sm:text-4xl sm:text-left sm:leading-none">{{ trans('translations.for_websites') }}</h2>
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
        <section class="projects text-center px-4 pt-8 md:pt-16 animate" data-animation="projects">
            <h3 class="projects__heading text-xl mb-8 md:text-3xl">{{ trans('translations.previous_projects') }}</h3>
            <div class="flex flex-col md:block">
                <div class="projects__logo mx-auto md:inline-block">
                    <a href="https://tevne.com/" target="_blank">
                        @include('svg.tevne-logo')
                    </a>
                </div>
                <div class="projects__logo mx-auto md:inline-block">
                    <a href="https://sekaipay.com/" target="_blank">
                        @include('svg.sekaipay-logo')
                    </a>
                </div>
            </div>
        </section>
        <footer class="footer flex p-4 md:pb-8">
            <p class="footer__email mx-auto font-bold text-lg">s.c@connollysekai.com</p>
        </footer>
        <modal name="contact-modal" :adaptive="true" :width="'90%'" :max-width="350" :height="'auto'">
            <div class="mx-4 mt-4 p-4 bg-success text-white text-sm rounded" v-if="form_success"><p>Your inquiry has been sent. We will respond to you within 48hrs.</p></div>
            <form action="" class="px-4 py-8 mb-0" @submit.prevent="handleSubmit()">
                @honeypot
                <div class="input-group mb-4">
                    <label for="name">{{ trans('translations.name') }}</label>
                    <input type="text" id="name" class="input" v-model="form.name" :class="{'input--error': form.errors.has('name')}">
                </div>
                <div class="input-group mb-4">
                    <label for="email">{{ trans('translations.email') }}</label>
                    <input type="email" id="email" class="input" v-model="form.email" :class="{'input--error': form.errors.has('email')}">
                </div>
                <div class="input-group mb-4">
                    <label for="message">{{ trans('translations.message') }}</label>
                    <textarea id="message" v-model="form.message" :class="{'input--error': form.errors.has('message')}"></textarea>
                </div>
                <button class="btn w-full">{{ trans('translations.submit') }}</button>       
            </form>
        </modal>
    </div>
    
    <script defer src="{{ mix('js/app.js') }}"></script>
</body>
</html>
