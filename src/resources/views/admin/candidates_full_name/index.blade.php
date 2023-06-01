@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('candidates_full_name.create') }}"> Create New Candidate Full Name Item</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
        </tr>
        'name', 'surname', 'patronymic',
        @foreach ($candidates_full_name as $candidate_full_name)
            <tr>
                <td>{{ $candidate_full_name->name }}</td>
                <td>{{ $candidate_full_name->surname }}</td>
                <td>{{ $candidate_full_name->patronymic}}</td>
                <td>{{ $candidate_full_name->description }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('candidates_full_name.show',$candidate_full_name->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('candidates_full_name.edit',$candidate_full_name->id) }}">Edit</a>
                    <form action="{{ route('candidates_full_name.destroy',$candidate_full_name->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
