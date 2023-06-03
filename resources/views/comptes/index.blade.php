@extends('adminlte::page')

@section('title', 'Comptes')

@section('content_header')
<h1>Liste des comptes</h1>
@stop

@section('content')
<livewire:comptes.list-comptes></livewire:comptes.list-comptes>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop
