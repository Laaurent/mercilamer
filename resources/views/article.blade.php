@extends('layouts.app')

@section('content')
    <article-wrapper-component :article="{{json_encode($article)}}"></article-wrapper-component>
@endsection
