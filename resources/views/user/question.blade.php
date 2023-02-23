@extends('layouts.auth')
@push('page_title', 'Equipment Master Data')

@push('page_css')
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('page_content')
<div class="d-flex flex-column flex-column-fluid">
    <div class="card">
        <!--begin::Stepper-->
<div class="stepper stepper-pills" id="kt_stepper_example_basic">
<!--begin::Nav-->
<div class="stepper-nav flex-center flex-wrap mb-10">
    <!--begin::Step 1-->
    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
        

        <!--begin::Line-->
        <div class="stepper-line h-40px"></div>
        <!--end::Line-->
    </div>
    <!--end::Step 1-->

    <!--begin::Step 2-->
    <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
        <!--begin::Wrapper-->
        
        <!--end::Wrapper-->

        <!--begin::Line-->
        <div class="stepper-line h-40px"></div>
        <!--end::Line-->
    </div>
    <!--end::Step 2-->

    <!--begin::Step 3-->
    <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
        <!--begin::Wrapper-->
        
        <!--end::Wrapper-->

        <!--begin::Line-->
        <div class="stepper-line h-40px"></div>
        <!--end::Line-->
    </div>
    <!--end::Step 3-->
    <!--begin::Step 3-->
    <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
        <!--begin::Wrapper-->
        
        <!--end::Wrapper-->

        <!--begin::Line-->
        <div class="stepper-line h-40px"></div>
        <!--end::Line-->
    </div>
    <!--end::Step 3-->
    <!--begin::Step 3-->
    <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
        <!--begin::Wrapper-->
        
        <!--end::Wrapper-->

        <!--begin::Line-->
        <div class="stepper-line h-40px"></div>
        <!--end::Line-->
    </div>
    <!--end::Step 3-->

    
</div>
<!--end::Nav-->

    <!--begin::Form-->
        <!--begin::Group-->
        <form class="form w-lg-800px mx-auto" novalidate="novalidate" id="kt_stepper_example_basic_form">
        <div class="mb-5">
            <!--begin::Step 1-->
            
            @foreach($dataquestion as $data)
            <div class="flex-column current" data-kt-stepper-element="content">
                    <h5 class="card-title">{{ $data->id }}.) {{ $data->pertanyaan }}</h5>
                    @csrf
                    {{-- @foreach($question->choices as $choice) --}}
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choice[]" id="" value="">
                            <label class="form-check-label" for="">
                                {{ $data->option_A }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choice[]" id="" value="">
                            <label class="form-check-label" for="">
                                {{ $data->option_B }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choice[]" id="" value="">
                            <label class="form-check-label" for="">
                                {{ $data->option_C }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="choice[]" id="" value="">
                            <label class="form-check-label" for="">
                                {{ $data->option_D }}
                            </label>
                        </div>
                    {{-- @endforeach --}}
            </div>
            @endforeach
            <!--begin::Step 1-->
        </div>
        <!--end::Group-->

        <!--begin::Actions-->
        <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="me-2">
                <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                    Back
                </button>
            </div>
            <!--end::Wrapper-->

            <!--begin::Wrapper-->
            <div>
                <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                    <span class="indicator-label">
                        Submit
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>

                <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                    Continue
                </button>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::Stepper-->
    </div>
</div>
@endsection

@push('page_js')
<script type="text/javascript" src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script type="text/javascript">
// Stepper lement
var element = document.querySelector("#kt_stepper_example_basic");

// Initialize Stepper
var stepper = new KTStepper(element);

// Handle next step
stepper.on("kt.stepper.next", function (stepper) {
    stepper.goNext(); // go next step
});

// Handle previous step
stepper.on("kt.stepper.previous", function (stepper) {
    stepper.goPrevious(); // go previous step
});
</script>
@endpush
