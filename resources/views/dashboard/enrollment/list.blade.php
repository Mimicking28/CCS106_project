@extends('dashboard.dashboard')
@section('content')

    <h3>Student Enrollment</h3>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student</th>
                    <th scope="col">Course</th>
                    <th scope="col">Schedule</th>
                    <th scope="col">Location</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enrollment as $enrollment)
                    <tr>
                        <th scope="row">{{ $enrollment->id }}</th>
                        <td>{{ $enrollment->student->first_name }} {{ $enrollment->student->last_name }}</td>
                        <td>{{ $enrollment->course->course_name }}</td>
                        <td>{{ $enrollment->course->schedule }}</td>
                        <td>{{ $enrollment->course->location }}</td>
                        <td>{{ $enrollment->course->unit }}</td>
                        <td>
                            <a href="edit/{{ $enrollment->id }}" style="background-color: #874CCC; color: white; border: none" class="btn btn-primary">Edit</a>
                            <a href="delete/{{ $enrollment->id }}" style="background-color: #C65BCF; color: white; border: none" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
<!-- Albert Mick Estillore - Jonavia Mahumas -->