@extends('layouts.app')
@section('dash-left')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h3>Add New Sport</h3>
        <hr class="hr_style">

        {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'sports.store', 'files'=>'true')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('content', 'Sport About Us') }}
            {{ Form::textarea('content', null, array('class' => 'form-control')) }}
            <br>

            
            {{ Form::label('subscribe', 'Subscribe content') }}
            {{ Form::textarea('subscribe', null, array('class' => 'form-control')) }}
            <br>

             {{ Form::label('color', 'Color') }}
            {{ Form::color('color', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Add New Sport', array('class' => 'btn btn-success btn-lg btn-block')) }}
            </div>
        {{ Form::close() }}
        
        </div>
    </div>

@endsection
