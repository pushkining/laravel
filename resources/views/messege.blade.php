@extends('layouts.app')

@section('title-block'){{ $data->subject }}@endsection

@section('content')
    <h1>{{ $data->subject }}</h1>
    
        <div class="allert alert-info" id="all-data">
            {{-- <h3> {{ $data->subject }} </h3> --}}
            <p>{{ $data->message }}</p>
            <p> {{ $data->email }} </p>
            <p><small> {{ $data->created_at }} </small></p>
            <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
        </div>
    
@endsection

