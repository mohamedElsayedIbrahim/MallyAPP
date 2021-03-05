@section('breadcrumb')
<div class="page-navigate pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('system')}}">Home</a></li>
            @yield('items')
        </ol>
    </nav>
</div>
@stop
