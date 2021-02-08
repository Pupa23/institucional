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

    <div class=" m-auto mb-5 mt-4" style="max-width: 70%">

        <div class="container">
            <div class="row">
                <div class="col-5 me-auto">
                    <legend class="mb-5"><b>Section Services</b></legend>
                </div>
                <div class="col-auto">
                    <a href="{{ route('service-create') }}">
                        <button type="button" class="btn btn-primary">New Service</button>
                    </a>
                </div>
            </div>
        </div>

        <table class="table ">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($services); $i ++)
                <tr>
                    <td>{{ $services[$i]->id }}</td>
                    <td>{{ $services[$i]->card_title }}</td>
                    <td>{{ $services[$i]->card_description }}</td>
                    <td class="d-flex">
                        <a href="{{ route('service-edit', $services[$i]->id) }}" class="mr-2">
                            <button class="btn btn-warning"><i class="far fa-edit"></i></button>
                        </a>
                        <form action="{{ route('service-delete', $services[$i]->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>

                </tr>

            @endfor
            </tbody>
        </table>
    </div>
@endsection
