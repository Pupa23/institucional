@extends('layouts.app')

@section('content')
    <form action="{{ route('about-update', $about->id) }}" method="POST" class="row g-3 m-auto mb-5" style="max-width: 70%">
        @csrf
        @method('PATCH')
        <legend ><b>Edit FAQ - {{ $about->body }}</b></legend>

        <div class="col-md-12">
            <label for="body" class="form-label">About us</label>
            <textarea rows="3" class="form-control max-height" id="question" name="body" value="{{ old('body') }}">{{ $about->body }}</textarea>
        </div>

        <button class="btn btn-success ms-2 w-25" type="submit">Submit</button>
    </form>
@endsection
