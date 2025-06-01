@extends('master')
@section('title', 'login')
@section('content')

    <div class="bg-white shadow-lg rounded-lg w-full max-w-md p-8 mx-auto mt-20">
        {{-- @include('layouts.messages.validation_message') --}}
        @include('layouts.messages.flash_message')
        <!-- Login Form -->
        <form id="loginForm" action="{{ route('admin.auth') }}" method="POST" class="space-y-4">
            @include('layouts.form_body')
        </form>
    </div>
@endsection
