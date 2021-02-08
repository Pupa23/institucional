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
                    <legend class="mb-5"><b>Section FAQ</b></legend>
                </div>
                <div class="col-auto">
                    <a href="{{ route('faq-create') }}">
                        <button type="button" class="btn btn-primary">New FAQ</button>
                    </a>

                </div>
            </div>
        </div>

        <table class="table ">
            <thead>
            <tr>
                <th>#</th>
                <th>Question</th>
                <th>Response</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($faqs); $i ++)
                <tr>
                    <td>{{ $faqs[$i]->id }}</td>
                    <td>{{ $faqs[$i]->question }}</td>
                    <td>{{ $faqs[$i]->response }}</td>
                    <td class="d-flex">
                        <a href="{{ route('faq-edit', $faqs[$i]->id) }}" class="mr-2">
                            <button class="btn btn-warning"><i class="far fa-edit"></i></button>
                        </a>
                        <form action="{{ route('faq-delete', $faqs[$i]->id) }}" method="POST">
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
