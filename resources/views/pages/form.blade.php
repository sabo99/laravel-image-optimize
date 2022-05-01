@extends('layouts.index')
@section('content')
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf

        <figure class="figure">
            <img id="frame" src="no-image-icon.png" class="figure-img img-fluid rounded mt-2"
                style="height: 30%; align-self: center" alt="Preview Image">
            <figcaption class="figure-caption">Preview Image Upload</figcaption>
        </figure>

        {{-- Upload Image --}}
        <div class="row">
            <div class="col-sm-8 col-md-6 col-xl-6 mt-3">
                <input class="form-control @error('file') is-invalid @enderror" type="file" id="formFile" name="file"
                    onchange="preview()">
                @error('file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-1">
                <label for="Flip" class="form-label fw-bold">Debug</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="debug" id="flexRadioDefault1" value="" checked>
                    <label class="form-check-label">Off</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="debug" id="flexRadioDefault2" value="1">
                    <label class="form-check-label">On</label>
                </div>
            </div>

            <div class="col-5">
                <div class="row mb-3">
                    <div class="d-grid col mx-auto mt-3">
                        <button type="submit" class="btn btn-primary">Optimize</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        {{-- Parameters --}}
        @include('layouts.parameters')

        {{-- <div class="row mb-3">
            <div class="d-grid col-12 mx-auto">
                <button type="submit" class="btn btn-primary">Optimize</button>
            </div>
        </div> --}}
    </form>
@endsection
