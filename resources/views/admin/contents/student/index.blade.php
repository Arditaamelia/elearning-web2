@extends('admin.main')
@section('content')
    <div class="pagetitle">
        <h1>Student</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-primary">+ Student</a>
                <table class="table">
                    <tr>
                        <th>NO</th>
                        <th>Name</th>
                        <th>NIM</th>
                        <th>Class</th>
                        <th>Major</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <td>1</td>
                            <td>{{ $student->name}}</td>
                            <td>{{ $student->nim}}</td>
                            <td>{{ $student->class}}</td>
                            <td>{{ $student->major}}</td>
                            <td>
                                <a href="#" Class="btn btn-warning">Edit</a>
                                <a href="#" Class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>  
        </div>  
    </section>
@endsection
