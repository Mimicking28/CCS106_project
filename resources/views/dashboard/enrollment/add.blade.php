<!-- Albert Mick Estillore - Jonavia Mahumas -->
@extends('dashboard.dashboard')
@section('content')

    <form action="{{route('enrollment')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <h4 class="form-title"><span>Student Enrollment</span></h4>
            </div>
            <div class="col-12 col-sm-6">
            <div class="form-group">
                <label for="student">Student:</label>
                <select name="student" id="student" class="form-control">
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student-> first_name}}, {{ $student-> last_name }}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <div class="col-12 col-sm-6">
            <div class="form-group">
                <label for="course">Course:</label>
                <select name="course" id="course" class="form-control">
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                    @endforeach
                </select>
            </div>
            </div>


            <div class="col-12">
                <input href= "/dashboard" value="Add Enrollment" type="submit" id="submit" style="background-color: #874CCC; color: white; border: none" class="btn btn-primary">
            </div>
            
        </div>
    </form>
@endsection
<!-- Albert Mick Estillore - Jonavia Mahumas -->
