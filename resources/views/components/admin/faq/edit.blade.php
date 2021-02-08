@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('faq-update', $faq->id) }}" class="row g-3 m-auto mb-5" style="max-width: 70%" >
        @csrf
        @method('PATCH')

        <legend ><b>Edit FAQ - {{ $faq->question }}</b></legend>

        <div class="col-md-12">
            <label for="question" class="form-label">Question</label>
            <textarea rows="3" class="form-control max-height" id="question" name="question" value="{{ old('question', $faq->question) }}">{{$faq->question}}</textarea>
        </div>

        <div class="col-md-12">
            <label for="response" class="form-label">Response</label>
            <textarea rows="3" class="form-control max-height" id="response" name="response" value="{{ old('response', $faq->response) }}">{{$faq->response}}</textarea>
        </div>

        <button class="btn btn-success ms-2 w-25" type="submit">Submit</button>

    </form>

@endsection
