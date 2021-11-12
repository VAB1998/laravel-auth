@extends('layouts.app')

@section('content')
    <h1>Ciao Sono Admin Home</h1>
    <a href=" {{ route('admin.articles.index') }} ">Go to articles</a>
@endsection