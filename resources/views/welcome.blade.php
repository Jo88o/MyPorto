@extends('template.template')

@section('content')

    @include('component.navbar')

    @include('pages.presentation')
    @include('pages.projects')
    @include('pages.about-me')
    @include('pages.services')
    @include('pages.contact')

    @include('component.footer')

@endsection


