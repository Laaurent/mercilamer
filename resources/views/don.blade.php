@extends('layouts.app')

@section('content')

    <agir-banner-component></agir-banner-component>
    <agir-assoc-component :associations="{{json_encode($associations)}}"></agir-assoc-component>
    <devenir-partenaire-component></devenir-partenaire-component>
    <proposer-projet-component></proposer-projet-component>
    <br>
@endsection