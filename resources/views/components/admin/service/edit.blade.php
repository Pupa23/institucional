@extends('layouts.app')

@section('content')
    <form action="{{ route('service-update', $service->id) }}" method="POST" class="row g-3 m-auto mb-5" style="max-width: 70%">
        @csrf
        @method('PATCH')

        <legend ><b>Edit Service - {{ $service->card_title }}</b></legend>

        <div class="col-md-12">
            <label for="card_title" class="form-label">Title</label>
            <textarea rows="3" class="form-control max-height" id="card-title" name="card_title"
                      value="{{ old('card_title') }}">{{ $service->card_title }}</textarea>
        </div>

        <div class="col-md-12">
            <label for="card_description" class="form-label">Description</label>
            <textarea rows="3" class="form-control max-height" id="card_description" name="card_description"
                      value="{{ old('card_description') }}">{{ $service->card_description }}</textarea>
        </div>

        <button class="btn btn-success ms-2 w-25" type="submit">Submit</button>
    </form>
    </form>


@endsection
