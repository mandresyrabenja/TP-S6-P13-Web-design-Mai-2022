@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            {{ $post->title }} <small>par {{ $post->user->name }}</small>

                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-right">Retour</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <p>{{ $post->body }}</p>

                        <p><strong>Catégories: </strong>{{ $post->category->name }}</p>
                        <p><strong>Mots-clés: </strong>{{ $post->tags->implode('name', ', ') }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
