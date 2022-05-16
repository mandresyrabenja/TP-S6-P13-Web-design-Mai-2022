<div class="row form-search">
    {!! Form::open(['method' => 'GET', 'role' => 'form']) !!}
            <div class="col-md-10">
                {!! Form::text('search', request()->get('search'), ['class' => 'form-control', 'placeholder' => 'Rechercher un articles...']) !!}
            </div>
            <div class="col-md-2">
                {!! Form::submit('Rechercher', ['class' => 'btn btn-block btn-success']) !!}
            </div>
    {!! Form::close() !!}
</div>
