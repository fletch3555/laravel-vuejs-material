@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('app')
    <div id="app">
        <v-app dark>
            <sidebar></sidebar>
            @php //include('partials.sidebar') @endphp
            @include('partials.main-toolbar')

            <!--
            <md-whiteframe md-elevation="3" class="main-toolbar">
                <md-toolbar class="">
                    <div class="md-toolbar-container">
                        <md-button class="md-icon-button" @click="$refs.sidebar.toggle()">
                            <md-icon>menu</md-icon>
                        </md-button>

                        <span style="flex: 1"></span>

                        <md-button class="md-icon-button">
                            <md-icon>search</md-icon>
                        </md-button>

                        <md-button class="md-icon-button">
                            <md-icon>view_module</md-icon>
                        </md-button>
                    </div>
                </md-toolbar>
            </md-whiteframe>
            -->
            <main>
                <v-container fluid>
                    @yield('content')
                </v-container>
            </main>
        </v-app>
    </div>
@endsection