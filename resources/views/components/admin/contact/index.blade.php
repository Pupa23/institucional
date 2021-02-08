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


    <form action="{{ route('contact-edit') }}" method="POST" class="row g-4 m-auto mb-5" style="max-width: 70%">
        @csrf
        @method('PATCH')
        <legend><b>Section Contact</b></legend>

        <input type="hidden" name="id" value="{{ $contact['id'] }}">

        <div class="col-md-4">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city"
                   value="{{ old('city', $contact->city) }}">
        </div>

        <div class="col-md-4">
            <label for="province" class="form-label">Province</label>
            <input type="text" class="form-control" id="province" name="province"
                   value="{{ old('province', $contact->province) }}">
        </div>

        <div class="col-md-4">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country"
                   value="{{ old('country', $contact->country) }}">
        </div>

        <div class="input-group">
            <span class="input-group-text">Street and number</span>
            <input type="text" aria-label="street" class="form-control"
                   placeholder="Street"name="street"
                   value="{{ old('street', $contact->street) }}">
            <input type="number" aria-label="number" class="form-control"
                   placeholder="Number" name="number"
                   value="{{ old('number', $contact->number) }}">
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                   value="{{ old('email', $contact->email) }}">
        </div>

        <div class="col-md-6">
            <label for="number" class="form-label">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone"
                   value="{{ old('phone', $contact->phone) }}">
        </div>

        <button class="btn btn-success ms-2 w-25" type="submit">Submit</button>

    </form>


@endsection
