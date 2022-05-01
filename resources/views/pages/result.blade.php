@extends('layouts.index')
@section('content')
    @php
    $pathOri = $original['path'] ?? '';
    $pathOpt = $optimize['path'] ?? '';

    $oriWidth = $original['size']['width'] ?? '';
    $oriHeight = $original['size']['height'] ?? '';
    $optWidth = $optimize['size']['width'] ?? '';
    $optHeight = $optimize['size']['height'] ?? '';
    @endphp

    <div class="mb-5 mt-5">

        <div class="row mt-5 mb-3">
            <div class="col-2">
                <a href="/storage/{{ $pathOpt }}" class="btn btn-primary" download>Download</a>
            </div>
            <div class="col-2">
                <a href="/" class="btn btn-outline-secondary">Back</a>
            </div>
        </div>

        {{-- <div class="row mt-5">
            <div class="col">
                <p>Original</p>
                <img src="/storage/{{ $pathOri }}" class="img-fluid img-thumbnail" style="height: 50%;" />
                <ul>
                    <li>Widht : {{ $oriWidth }}px</li>
                    <li>Height : {{ $oriHeight }}px</li>
                </ul>
            </div>
        </div> --}}

        <div class="row">
            <div class="col">
                <p>Optimize</p>
                <img src="/storage/{{ $pathOpt }}" class="img-fluid img-thumbnail" style="height: 50%;" />
                <ul>
                    <li>Widht : {{ $optWidth }}px</li>
                    <li>Height : {{ $optHeight }}px</li>
                </ul>
            </div>
        </div>


    </div>
@endsection
