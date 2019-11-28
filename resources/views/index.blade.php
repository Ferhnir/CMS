<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        
    </head>
    <body>
        <div id="loader" class="loader-wrapper">
            <span class="loader">
                <span class="loader-inner"></span>
            </span>
        </div>
        <v-app id="app">
            {{-- NAVBAR --}}
            @include('partials.navbar.navbar')

            {{-- ================================= --}}
            {{-- GOING BE REPLACED WITH DYNAMIC GENERATED CONTENT --}}
            {{-- ================================= --}}

                    {{-- SUBPAGES --}}
                    @include('subpages.intro')
                    @include('subpages.yourObjective')
                    @include('subpages.achiveGoals')
                    @include('subpages.chooseYourPack')
                    @include('subpages.pricing')
                    @include('subpages.testimonials')
                    @include('subpages.customCoaching')
                    @include('subpages.contactMe')
                    @include('subpages.lockYourTime')
                    @include('subpages.getFitStayConnected')

            {{-- ================================= --}}

            {{-- FOOTER --}}
            @include('partials.footer')
                       

            
        </v-app>
        <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.js"></script>
        <script type="text/javascript" src="js/app.js"></script>

    </body>
</html>
