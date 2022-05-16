@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Mots-clés

                            <a href="{{ url('admin/tags/create') }}" class="btn btn-default pull-right">Creér</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Opération</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->name }}</td>
                                        <td>
                                            <a href="{{ url("/admin/tags/{$tag->id}/edit") }}" class="btn btn-xs btn-info">Modifier</a>
                                            <a href="{{ url("/admin/tags/{$tag->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Etes-vous sûr?" class="btn btn-xs btn-danger">Effacer</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">Aucun mots-clé</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $tags->links() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
