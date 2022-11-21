@extends('layouts/main')

@section('content')
<form action="{{ route('authenticate') }}" method="post">
    @csrf
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="mot de pass">
    <button class="btn btn-primary" type="submit">Connexion</button>
</form>
@endsection