@extends('layouts.app')

@section('content')
   
    <search-component :theme="{{json_encode($theme)}}" :search="{{json_encode($pattern)}}"  :filters="{{json_encode($filters)}}" :articles="{{json_encode($articles)}}"></search-component>
@endsection