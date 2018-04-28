@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Contact</h1>

            <p>Vous pouvez aussi nous contacter par téléphone au <strong>{{ env("PHONE_LAETITIA") }}</strong> ou au <strong>{{ env("PHONE_FRANCOIS") }}</strong>.</p>

            @include("flash")

            {!! Form::open(array('url' => 'contact', 'method' => 'post')) !!}

            <div class="form-group">
                {!! Form::label('name', 'Votre nom') !!}
                {!! Form::text('name', $name, ['required' => 'required', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Votre email') !!}
                {!! Form::email('email', $email, ['required' => 'required', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('subject', 'Sujet') !!}
                {!! Form::text('subject', null, ['required' => 'required', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('message', 'Votre message') !!}
                {!! Form::textarea('message', null, ['required' => 'required', 'class' => 'form-control', 'rows' => '4']) !!}
            </div>

            {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@stop