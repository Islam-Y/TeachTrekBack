@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('candidates_education.create') }}"> Create New Candidate Education Item</a>
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
            <th>Наименование образовательной организации</th>
            <th>Местоположение ообразовательной организации</th>
            <th>Институт</th>
            <th>Год выпуска</th>
        </tr>
        @foreach ($candidates_education as $candidate_education)
            <tr>
                <td>{{ $candidate_education->name_educational_university }}</td>
                <td>{{ $candidate_education->location_educational_university }}</td>
                <td>{{ $candidate_education->institute}}</td>
                <td>{{ $candidate_education->year_of_release }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('candidates_education.show',$candidate_education->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('candidates_education.edit',$candidate_education->id) }}">Edit</a>
                    <form action="{{ route('candidates_education.destroy',$candidate_education->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
