@extends('layouts.app')

@section('content')

    <banner-component></banner-component>
    <head-news-component :news="{{json_encode($news)}}"></head-news-component>
    <focus-on-component :articles="{{json_encode($articles)}}"></focus-on-component>
    <theme-news-component :themes="{{json_encode($themes)}}"></theme-news-component>
    <br>
@endsection