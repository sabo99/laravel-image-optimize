<label for="Optional" class="form-label fw-bold mb-3">Parameters (Optional)</label>

<div class="row mb-5">
    {{-- File Name --}}
    @include('components.file_name')
    {{-- Extension --}}
    @include('components.extension')
</div>

<div class="row mb-5">
    {{-- Brightness --}}
    @include('components.brightness')
    {{-- Contrast --}}
    @include('components.contrast')
    {{-- Blur --}}
    @include('components.blur')
    {{-- Sharpen --}}
    @include('components.sharpen')
    {{-- Opacity --}}
    @include('components.opacity')
</div>

<div class="row mb-5">
    {{-- Invert --}}
    @include('components.invert')
    {{-- Grayscale --}}
    @include('components.grayscale')
    {{-- Colorize --}}
    @include('components.colorize')
</div>

<div class="row mb-5">
    {{-- Resize --}}
    @include('components.resize')
    {{-- Rotate --}}
    @include('components.rotate')
    {{-- Flip --}}
    @include('components.flip')
</div>
