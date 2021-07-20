@extends('layouts.app')

@section('content')
    <form action="{{ route('about-insert') }}" method="POST" class="row g-3 m-auto mb-5" style="max-width: 80%">
        @csrf
        <legend ><b>Create About us</b></legend>

        <div class="col-md-12">
            <label for="body" class="form-label">Body</label>
            <textarea rows="3" class="form-control max-height" id="body" name="body" value="{{ old('body') }}"></textarea>
        </div>

        <button class="btn btn-success ms-2 w-25" type="submit">Submit</button>
    </form>
@endsection
