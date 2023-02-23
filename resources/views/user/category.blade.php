@extends('layouts.auth')

@section('page_content')
<div class="d-flex">
    @foreach($datatryout as $data)
    <div class="card mx-5 my-5" style="width: 18rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
            <h5 class="card-title">{{ $data->name }}</h5>
            <a href="#" class="">{{ $data->Category->name }}</a>
            <a href="#" class="btn btn-primary my-5">Go somewhere</a>
        </div>
    </div>
    @endforeach
</div>
@endsection