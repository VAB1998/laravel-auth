
@extends('layouts.app')

@section('content')
    <section id="articles_index">
        <div class="container">
            <table class="table table-light table-striped table-bordered">
                <thead>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publication date</th>
                </thead>
                <tbody>
                    @forelse ($articles as $article)
                        <tr>
                            <td>
                                {{ $article->title }}
                            </td>
                            <td>
                                {{ $article->author }}
                            </td>
                            <td>
                                {{ $article->publication_date }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                No Article found
                            </td>
                        </tr>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </section>
@endsection