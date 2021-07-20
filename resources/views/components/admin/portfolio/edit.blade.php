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

    <form method="POST" action="{{ route('portfolio-update', $portfolio->id) }}" class="row g-3 m-auto mb-5" style="max-width: 70%" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <legend><b>Edit Portfolio - {{ $portfolio->title }}</b></legend>

        <div class="col-md-6">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $portfolio->title) }}">
        </div>

        <div class="col-md-6">
            <label for="subtitle" class="form-label">Sub-title</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $portfolio->subtitle) }}">

        </div>

        <div class="col-md-6">
            <label for="description" class="form-label">Description</label>
            <textarea rows="3" class="form-control max-height" id="description" name="description"
                      value="{{ old('description') }}">{{  $portfolio->description }}</textarea>

        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Select image</label>
            <input class="form-control" type="file" id="formFile" name="url_image" accept="image/jpeg,image/png" value="{{ old('url_image', $portfolio['url_image']) }}">
            <small class="text-black-50">If you select another image, it will replace it</small>
        </div>

        <input type="hidden" name="url_image" value="{{ $portfolio['url_image'] }}">

        <div class="col-md-12">
            <div class="card" style="width: 18rem;">
                <img src="../assets/img/portfolio/{{ $portfolio['url_image'] }}">
            </div>
        </div>


        <button class="btn btn-success ms-2 w-25" type="submit">Submit</button>
    </form>
@endsection
