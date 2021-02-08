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
                    <legend class="mb-5"><b>Section Portfolio</b></legend>
                </div>
                <div class="col-auto">
                    <a href="{{ route('portfolio-create') }}">
                        <button type="button" class="btn btn-primary">New portfolio</button>
                    </a>
                </div>
            </div>
        </div>

        <table class="table ">
            <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($porfolios); $i ++)
                <tr>
                    <td>{{ $porfolios[$i]->id }}</td>
                    <td>
                        <div class="card" style="width: 18rem">
                            <img src="assets/img/portfolio/{{ $porfolios[$i]->url_image }}" class="card-img-top w-auto"
                                 style="max-height: 230px">
                        </div>
                    </td>
                    <td>{{ $porfolios[$i]->title }}</td>
                    <td>{{ $porfolios[$i]->description }}</td>
                    <td>
                        <a href="{{ route('portfolio-edit', $porfolios[$i]->id) }}">
                            <button class="btn btn-warning"><i class="far fa-edit"></i></button>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('portfolio-delete', $porfolios[$i]->id) }}" method="POST">
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
