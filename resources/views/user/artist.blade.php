@extends('layouts/app')

@section('contenu')


<artist-vue :artists="{{$artists}}"/>

@endsection