@extends('layouts.auth')

@section('page_content')
<div class="d-flex">
    @foreach($datatryout as $data)
    <div class="card mx-5 my-5" style="width: 18rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
            <h5 class="card-title">{{ $data->name }}</h5>
            <a href="category/{{ $data->id_category }}" class="me-15">{{ $data->Category->name }}</a>
            <a href="question/{{ $data->id }}" class="btn btn-primary my-5">Kerjakan</a>
        </div>
    </div>
    @endforeach
</div>
@endsection