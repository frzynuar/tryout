@extends('layouts.auth')

@section('page_content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">1 + 1 =?</h5>
                <form method="POST" action="">
                    @csrf
                    {{-- @foreach($question->choices as $choice) --}}
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choice" id="" value="">
                            <label class="form-check-label" for="">
                                a. 2
                            </label>
                        </div>
                    {{-- @endforeach --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection