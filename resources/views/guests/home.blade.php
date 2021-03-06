@extends('layouts.app')

@section('content')
    <section id="guests_home">
        <div class="container">
            
                @guest
                    <h2 class="text-center">
                        Se sei registrato effettua il 
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        , oppure  
                        <a href="{{ route('register') }}">Registrati</a></h2>
                @else
                    <h2 class="text-center">Hai già effettuato l'accesso, <a href=" {{ route('admin.articles.index') }} ">Clicca Qui</a></h2>
                @endguest
        </div>
    </section>
@endsection       