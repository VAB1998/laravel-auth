@extends('layouts.app')

@section('content')
    <section id="admin_home">
        <h2 class="text-center">Hai effettuato  l'accesso, 
            <a class="text-center" href=" {{ route('admin.articles.index') }} ">Go to articles</a>
        </h2>
    </section>
@endsection