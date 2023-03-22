@extends('layouts.master')

@section('title','Employees Page')


@section('page-content')
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading">
                        <h3 class="">Employees Data</h3>
                        <button class="btn btn-danger">
                            <a href="{{url('/employees/create')}}">Create</a>
                        </button>
                    </div>
                    <div class="data">
                        <!-- table starts -->
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Emp ID</th>
                                    <th scope="col">Emp Name</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            @if(count($employees)>0)
                                <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td>{{$employee->emp_id}}</td>
                                            <td>{{$employee->emp_name}}</td>
                                            <td>
                                                <img style="height:200px;width:300px" src="{{asset('storage/images/'.$employee->emp_profile)}}" alt="">
                                            </td>
                                            <td>
                                                <button class="btn btn-danger">Edit</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            @else
                                <h3>No records found</h3>
                            @endif
                            
                        </table>
                        <!-- table ends -->

                    </div>
                    
                    
                </div>
            </div>
        </div>
@endsection

@section('customjs_scripts')
    <script src={{asset('js/app.js')}}></script>
    <script src={{asset('js/custom.js')}}></script>
@endsection




