@extends('layouts.master')

@section('title','Home Page')

@section('custom_css_files')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection

@section('page-content')
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="">Add Employee</h3>
                    <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif -->
                    <form action="{{url('/employees')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- {{ csrf_field() }} -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Employee Name</label>
                            <input type="text" class="form-control" name="emp-name" placeholder="Enter name">
                        </div>
                        @error('emp-name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Employee Profile</label>
                            <input type="file" class="form-control-file" name="emp-profile">
                        </div>
                        @error('emp-profile')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection

@section('customjs_scripts')
    <script src={{asset('js/custom.js')}}></script>
@endsection




