@extends('main')
@section('content')
    <div class="container-fluid p-0 mt-5 mb-5">
        <h4 class="border-top border-bottom border-2 border-dark py-1 m-0 mb-3 d-flex justify-content-center">
            {{ $title }}
        </h4>
        <div class="d-flex justify-content-center">
            <p class="px-3 px-md-5 text-justify" style="max-width: 1000px; text-align: justify; text-indent: 2em;">
                {{ $content }}
            </p>
        </div>
    </div>
@endsection
