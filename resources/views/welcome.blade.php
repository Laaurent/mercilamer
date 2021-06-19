@extends('layouts.app')

@section('content')

    <banner-component></banner-component>
    <head-news-component :news="{{json_encode($news)}}"></head-news-component>
    <theme-news-component></theme-news-component>
@endsection