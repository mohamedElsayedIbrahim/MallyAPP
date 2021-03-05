@extends('inc/layout')

@section('title','Mally App || Courses')

@section('MoreLinks')
    <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#sign" type="button" tabindex="-1" aria-disabled="true">Mohamed</a>
        </li>
@endsection





@section('content')
<div class="main">
<div class="row">
<div class="page-navigate pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('system') }} ">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Branches Settings</li>
        </ol>
    </nav>
</div>

<div class="page-title">
    <p class="lead fw-bold">
        Courses Settings
    </p>
</div>

<div class="mb-5"><a href="{{ route('course.create') }}" class="btn btn-danger">Add new course</a></div>

            <form accept-charset="utf8" enctype="multipart/form-data" method="POST" action="#" class="mb-5">
                <div class="form-floating mb-3">
                    <input type="number" required class="form-control" id="floatingInput" placeholder="enter course code">
                    <label for="floatingInput">branch Code</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" required class="form-control" id="floatingInput" placeholder="enter course name">
                    <label for="floatingInput">Organization name</label>
                </div>

                <button type="button" role="button" class="btn btn-primary" value="Search Data" id="searchData">Search</button>
                </form>
</div>
</div>
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th scope="col">Code</th>
                            <th scope="col">course Name</th>
                            <th scope="col">Procedure</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <?php $counter=1; ?>  
                        

                       @if (!$cources)
                       <div class="branch-data p-5">
                        <p class="lead">
                            there are no data
                        </p>
                    </div>
                       @else
                                @foreach ($cources as $cource)
                                <tr>
                                    <th>{{$counter}}</th>
                                    <th>{{ $cource->title }}</th>
                                    <th><a type="button" class="btn btn-danger" href="{{route('course.delete',$cource->id)}}" ><i class="far fa-trash-alt"></i></a> <a type="button" class="btn btn-success" href="{{route('course.edit',$cource->id)}}"><i class="far fa-edit"></i></a></th>
                                </tr>
                                <?php $counter++;?>
                            @endforeach
                       @endif
                    </tbody>
                </table>

    

@endsection
