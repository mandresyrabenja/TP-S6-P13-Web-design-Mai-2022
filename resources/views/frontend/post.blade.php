@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{ $post->title }}</h1> - <small>par {{ $post->user->name }}</small>

                        <span class="pull-right">
                            {{ $post->created_at->toDayDateTimeString() }}
                        </span>
                    </div>

                    <div class="panel-body">
                        <p>{{ $post->body }}</p>
                        <p>
                            Catégorie: <span class="label label-success">{{ $post->category->name }}</span> <br>
                            Mots-clés:
                            @forelse ($post->tags as $tag)
                                <span class="label label-default">{{ $tag->name }}</span>
                            @empty
                                <span class="label label-danger">Aucun mots-clés trouvé.</span>
                            @endforelse
                        </p>
                    </div>
                </div>

                @includeWhen(Auth::user(), 'frontend._form')

                @include('frontend._comments')

            </div>

        </dev>
    </dev>
@endsection
