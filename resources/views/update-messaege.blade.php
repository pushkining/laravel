@extends('layouts.app')

@section('title') 
  Страница контактов 
@endsection

@section('content')
<h1>Contacts</h1>
    
    <form action="{{ route('contact-form') }}" method="post" >
        @csrf 
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input class="form-control" type="text" name="name" value="{{ $data->name }}" placeholder="Введите имя" id="name">
        </div>

        <div class="form-group">
            <label for="email">Введите e-mail</label>
            <input class="form-control" type="email" name="email" value="{{ $data->email }}" placeholder="Введите e-mail" id="email">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
        <input class="form-control" type="text" name="subject" value="{{ $data->subject }}" placeholder="Введите тему сообщения" id="subject">
        </div>

        <div class="form-group">
            <label for="message">Сообщения</label>
            <textarea class="form-control" id="message" name="message" placeholder="Введите сообщение">{{ $data->message }}</textarea>
        </div>

        <button class="btn btn-success" type="submit" name="button">Обновить</button>
    </form>
@endsection
 