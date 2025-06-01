@extends('master')
@section('title', 'home')
@section('content')
    <!-- Hero Section -->
    @include('layouts.hero')

    <!-- About Section -->
    @include('layouts.about')

    <!-- Menu Section -->
    @include('layouts.menu')

    <!-- Contact Section -->
    @include('layouts.contact_us')

@endsection
