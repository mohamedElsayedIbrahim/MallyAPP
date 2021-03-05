@extends('inc/layout')

@section('title','Mally App || New Courses')

@section('MoreLinks')
    <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#sign" type="button" tabindex="-1" aria-disabled="true">Mohamed</a>
        </li>
@endsection





@section('content')

<div class="row">
<div class="page-navigate pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('system') }} ">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('course.index') }} ">Courses</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create new course</li>
        </ol>
    </nav>
</div>

<div class="page-title">
    <p class="lead fw-bold">
        Courses Settings
    </p>
</div>

@include('inc.error')
            <form accept-charset="utf8" enctype="multipart/form-data" method="POST" action="{{ route('course.store') }}" class="mb-5">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="CourseName" class="form-control" id="floatingInputName" placeholder="enter course name" value="{{old('CourseName')}}">
                    <label for="floatingInput">course name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" name="CoursePrice" class="form-control" id="floatingInputPrice" placeholder="enter course price" value="{{old('CoursePrice')}}">
                    <label for="floatingInput">course price</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" value="{{old('CourseDiscount')}}" name="CourseDiscount" class="form-control" id="floatingInputOffer" placeholder="enter course dicscount">
                    <label for="floatingInput">course discount</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea rows="12" cols="5" name="CourseDesc" class="form-control" id="floatingInputDesc" placeholder="enter course Description">{{old('CourseDesc')}}</textarea>
                    <label for="floatingInput">course Description</label>
                </div>

                <div class="mb-3">
                    <input type="file" name="CourseImage" class="form-control" title="course logo">
                </div>

                <button type="submit" role="button" class="btn btn-primary" value="Save data" id="save-data">Save data</button>
                </form>
</div>


@endsection