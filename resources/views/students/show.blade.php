@extends('students.layout')

@section('content')
<div class="row" style="margin-top: 10px;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $student[0]->name }}
        </div>
        <div class="form-group">
            <strong>Id Card:</strong>
            {{ $student[0]->id_card }}
        </div>
        <div class="form-group">
            <strong>Date of Birth:</strong>
            {{ $student[0]->date_of_birth }}
        </div>
        <div class="form-group">
            <strong>Subject Type:</strong>
            {{ $student[0]->subject->name }}
        </div>
    </div>

</div>
@endsection