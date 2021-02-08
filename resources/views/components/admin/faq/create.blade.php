@extends('layouts.app')

@section('content')
    <form action="{{ route('faq-insert') }}" method="POST" class="row g-3 m-auto mb-5" style="max-width: 70%">
        @csrf
        <legend ><b>Create FAQ</b></legend>

        <div class="col-md-12">
            <label for="question" class="form-label">Question</label>
            <textarea rows="3" class="form-control max-height" id="question" name="question" value="{{ old('question') }}"></textarea>
        </div>

        <div class="col-md-12">
            <label for="response" class="form-label">Response</label>
            <textarea rows="3" class="form-control max-height" id="response" name="response" value="{{ old('response') }}"></textarea>
        </div>

        <button class="btn btn-success ms-2 w-25" type="submit">Submit</button>
    </form>
@endsection
