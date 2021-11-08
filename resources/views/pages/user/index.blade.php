@extends('pages.user.main-template', ['title' => $title ?? 'Craft Calc'])
@section('user-content')
    <p>Email: {{$user->email}}</p>
    <p>Name: {{$user->name}}</p>
@endsection
