@extends('layouts.app')

@section('content')
   @foreach ($articles as $article)
    <ul>
        <li>{{$article->title}}</li>
        <li><img style='object-fit: cover;' width='200' height='100' src="/images/articles\{{$article->id}}.jpg" alt=""/></li>
        <li>{{$article->publication_date}}</li>
        <li>{{$article->content}}</li>
        <li>{{$article->target}}</li>
    </ul>
@endforeach
@endsection