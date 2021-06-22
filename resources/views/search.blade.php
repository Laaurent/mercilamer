@extends('layouts.app')

@section('content')
    <search-component :filters="{{json_encode($filters)}}" :articles="{{json_encode($articles)}}"></search-component>
   <!-- @foreach ($articles as $article)
    <ul>
        <li>{{$article->title}}</li>
        <li><img style='object-fit: cover;' width='200' height='100' src="/images/articles\{{$article->id}}.jpg" alt=""/></li>
        <li>{{$article->publication_date}}</li>
        <li>{{$article->content}}</li>
        <li>{{$article->target}}</li>
    </ul>
@endforeach -->
@endsection