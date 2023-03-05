@extends('layouts.master')

@section('title','Home Page')

@section('custom_css_files')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection

@section('page-content')
    <div class="content">
        <h3>Home Page Content</h3>
    </div>
@endsection

@section('customjs_scripts')
    <script src={{asset('js/app.js')}}></script>
    <script src={{asset('js/custom.js')}}></script>
@endsection




