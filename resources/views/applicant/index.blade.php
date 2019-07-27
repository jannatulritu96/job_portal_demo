@extends('admin.layouts.master')
@section('content')

    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">{{ $title }}</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div>
                <table class="table table-striped custom-table m-b-0 datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Phone no.</th>
                        <th>Skills</th>
                        <th>image</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($applicants as $applicant)

                        <tr>
                            <td>{{ $applicant->id }}</td>
                            <td>{{ $applicant->first_name }}</td>
                            <td>{{ $applicant->last_name }}</td>
                            <td>{{ $applicant->email }}</td>
                            <td>{{ $applicant->contact_number }}</td>
                            <td>{{ $applicant->skills }}</td>
                            <td style="width:70px"> <img style="width:48px" src="{{ asset($applicant->image) }}"> </td>

                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection