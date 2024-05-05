<!-- Albert Mick Estillore - Jonavia Mahumas -->
@extends('dashboard.dashboard')
@section('content')

<form action="{{ route('courses.update', $course->id) }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <h4 class="form-title"><span>Course</span></h4>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Course Name</label>
                <input type="text" name="course_name" id="course_name" class="form-control" value="{{ $course->course_name }}">
                <span class="help-block" style="color: red; font-size: 12px">{{ $errors->first('course_name') }}</span>
            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Unit</label>
                <input type="text" name="unit" id="unit" class="form-control" value="{{ $course->unit }}">
                <span class="help-block" style="color: red; font-size: 12px">{{ $errors->first('unit') }}</span>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Location</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ $course->location }}">
                <span class="help-block" style="color: red; font-size: 12px">{{ $errors->first('location') }}</span>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label>Schedule</label>
                <input type="text" name="schedule" id="schedule" class="form-control" value="{{ $course->schedule }}">
                <span class="help-block" style="color: red; font-size: 12px">{{ $errors->first('schedule') }}</span>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="teacher">Teacher</label>
                <select name="teacher" id="teacher" class="form-control">
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}" {{ $course->teacher->id == $teacher->id ? 'selected' : '' }}>
                         {{ $teacher->first_name }}, {{ $teacher->last_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
            <input href="/dashboard" value="Edit Course" type="submit" id="submit" style="background-color: #874CCC; color: white; border: none" class="btn btn-dark">
        </div>
    </div>
</form>
@endsection

<!-- Albert Mick Estillore - Jonavia Mahumas -->



