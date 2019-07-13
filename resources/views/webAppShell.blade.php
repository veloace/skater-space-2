<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
        <title>{{config('app.name')}}</title>


        <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
        <!--[if IE]><link rel="shortcut icon" href="/favicons/favicon.ico"><![endif]-->
        <!-- Add to home screen for Android and modern mobile browsers -->
        <link rel="manifest" href="/static/manifest.json">
        <meta name="theme-color" content="#2196f3">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#2196f3">
        <meta name="apple-mobile-web-app-title" content="{{config('app.name')}}">
        <meta name="application-name" content="{{config('app.name')}}">
        <meta name="mobile-web-app-capable" content="yes">

        <!-- Add to home screen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="{{config('app.name')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <!-- Add to home screen for Windows -->
        <meta name="msapplication-TileImage" content="/static/img/icons/msapplication-icon-144x144.png">
        <meta name="msapplication-TileColor" content="#000000">

        <base href="/">
        <script>
            window.Laravel = {!! $token!!};
            window.apiRoutes = {!! $routes!!};
        </script>


    </head>
    <body>

    <div id="app">
        <div v-if="!auth.booted" style="background-color: #212121;position: absolute;z-index:100000;top:0;bottom: 0;left: 0;right:0;">
            <img style="display:block;margin:auto; padding-top: 30vh" src="data:image/png;base64,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">
            <p style="text-align: center;color:white;font-size: 25px;">{{config('app.name')}} Is Loading...Please Wait</p>
        </div>
        <v-app>
            <v-navigation-drawer app fixed v-model="drawer">
                <v-toolbar flat dark  class="blue darken-4">
                    <v-list class="pa-0" >
                        <v-list-tile two-line class="title pt-2 pb-3" avatar>

                            <v-list-tile-avatar>
                                <img src="//skater.space/img/navLogoLg.png">
                            </v-list-tile-avatar>
                            <v-list-tile-content>
                                <v-list-tile-title>@{{$root.appName}}</v-list-tile-title>
                                <p>
                                    <span v-if="$root.auth.user.is_authenticated">Hi, @{{$root.auth.user.name}}!</span>
                                    <span v-else>Hello, Guest!</span>
                                </p>
                            </v-list-tile-content>
                        </v-list-tile>


                    </v-list>
                </v-toolbar>


                <v-list class="pt-0" dense>
                    <v-list-tile :to="{name:'home'}">
                        <v-list-tile-action>
                            <v-icon>dashboard</v-icon>
                        </v-list-tile-action>

                        <v-list-tile-content>
                            <v-list-tile-title>Home</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>

                </v-list>
                <v-list class="pt-0 grey darken-3 white--text" dense class="blue">
                    <v-list-tile dark v-if="!$root.auth.user.is_authenticated" :to="{name:'login'}">
                        <v-list-tile-action>
                            <v-icon>account_circle</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title>Login</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>

                    <v-list-tile dark v-if="!$root.auth.user.is_authenticated" :to="{name:'register'}">
                        <v-list-tile-action>
                            <v-icon>person_add</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title>Register</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-list-tile dark v-else @click="$root.auth.logout">
                        <v-list-tile-action>
                            <v-icon>logout</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title>Logout</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>



                </v-list>
            </v-navigation-drawer>
            <v-toolbar app>
                <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            </v-toolbar>
            <v-content>
                <v-container>
                    <router-view>

                    </router-view>
                </v-container>
            </v-content>
            <v-footer app color="#1c4888">

                <span class="white--text pa-1">&copy; 2019 {{config('app.name')}}</span>
            </v-footer>

            <v-dialog v-model="isLoading" persistent width="300">
                <v-card color="primary" dark>
                    <v-card-text>
                        Loading...Please Wait.
                        <v-progress-linear indeterminate color="white" class="mb-0"></v-progress-linear>
                    </v-card-text>
                </v-card>
            </v-dialog>

            <v-snackbar v-model="notification.show"  :timeout="notification.timeout" :color = "notification.color" :multi-line="true">@{{notification.content}}
                <v-btn color="white" flat @click="notification.show = false">
                    Close
                </v-btn>
            </v-snackbar>
        </v-app>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>

    </body>
</html>
