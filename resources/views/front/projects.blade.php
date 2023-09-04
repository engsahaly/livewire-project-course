@extends('front.master')

@section('title', 'Projects')
@section('projects-active', 'active')

@section('header-content')
    @include('front.partials.sub-header', ['pageName' => 'Projects'])
@endsection

@section('content')
    @livewire('front.components.projects-component')
@endsection
