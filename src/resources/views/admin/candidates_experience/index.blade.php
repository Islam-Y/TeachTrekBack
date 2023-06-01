@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('candidates_experience.create') }}"> Create New Candidate Experience Item</a>
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
            <th>Наименование предыдущей компании</th>
            <th>Должность в предыдущей компании</th>
            <th>Местоположение предыдущей компании</th>
            <th>Дата трудоустройства</th>
            <th>Дата увольнения</th>
        </tr>
        @foreach ($candidates_experience as $candidate_experience)
            <tr>
                <td>{{ $candidate_experience->name_old_company }}</td>
                <td>{{ $candidate_experience->position_old_company}}</td>
                <td>{{ $candidate_experience->location_old_company}}</td>
                <td>{{ $candidate_experience->start_work }}</td>
                <td>{{ $candidate_experience->end_work }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('candidates_experience.show',$candidate_experience->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('candidates_experience.edit',$candidate_experience->id) }}">Edit</a>
                    <form action="{{ route('candidates_experience.destroy',$candidate_experience->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
