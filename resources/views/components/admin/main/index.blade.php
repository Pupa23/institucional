@extends('layouts.app')

@section('content')

    <div class="row m-auto" style="max-width: 70%">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div> <!-- end .flash-message -->
    </div>

    <form method="POST" action="{{ route('main-edit', $mains->id) }}" class="row g-3 m-auto mb-5" style="max-width: 70%" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <legend><b>Section Main</b></legend>

        <input type="hidden" name="id" value="{{ $mains['id'] }}">

        <div class="col-md-6">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $mains->title) }}">
        </div>

        <div class="col-md-6">
            <label for="subtitle" class="form-label">Sub-title</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $mains->subtitle) }}">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Select image for section main</label>
            <input class="form-control" type="file" id="formFile" name="url_image" accept="image/jpeg,image/png" value="{{ old('url_image', $mains['url_image']) }}">
            <small class="text-black-50">If you select another image, it will replace it</small>
        </div>

        <input type="hidden" name="url_image" value="{{ $mains['url_image'] }}">

        <div class="card" style="width: 18rem;">
            <img src="assets/img/main/{{ $mains['url_image'] }}">
        </div>

        <legend><b>Section About</b></legend>
        <div class="col-md-12">
            <label for="about" class="form-label">Description About</label>
            <textarea type="text" class="form-control max-height" id="about" name="description_about" value="{{ old('description_about', $mains->description_about) }}">{{$mains->description_about}}</textarea>
        </div>

        <legend><b>Section Service</b></legend>
        <div class="col-md-12">
            <label for="service" class="form-label">Description Services</label>
            <textarea type="text" class="form-control max-height" id="service" name="description_service" value="{{ old('description_service', $mains->description_service) }}">{{$mains->description_service}}</textarea>
        </div>

        <legend><b>Section Call to Action</b></legend>
        <div class="col-md-12">
            <label for="cta" class="form-label">Description Call to Action</label>
            <textarea rows="3" class="form-control max-height" id="cta" name="description_cta" value="{{ old('description_cta', $mains->description_cta) }}">{{$mains->description_cta}}</textarea>
        </div>

        <button class="btn btn-success ms-2 w-25" type="submit">Submit</button>
    </form>

@endsection
