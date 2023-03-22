@extends('layouts.master')

@section('title','Home Page')

@section('custom_css_files')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection

@section('page-content')
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-4">My Laravel Project</h1>
                    <p class="fst-italic text-muted">Using Bootstrap 5 flexbox utilities, create a footer that always sticks to the bottom of your viewport. Snippet by <a class="text-primary" href="https://bootstrapious.com/" target="_blank">Bootstrapious</a></p>
                </div>
            </div>
        </div>
@endsection

@section('customjs_scripts')
    <script src={{asset('js/app.js')}}></script>
    <script src={{asset('js/custom.js')}}></script>
@endsection




