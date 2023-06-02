@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.candidates_info.create') }}"> Create New Candidate Info Item</a>
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
            <th>Пол</th>
            <th>Профессия</th>
            <th>Специализация</th>
            <th>Город проживания</th>
            <th>Описание</th>
            <th>Файлы</th>
            <th>Фотографии</th>
            <th>Соискатель</th>
        </tr>
        @foreach ($candidates_info as $candidate_info)
            <tr>
                <td>{{ $candidate_info->floor }}</td>
                <td>{{ $candidate_info->profession }}</td>
                <td>{{ $candidate_info->specialization}}</td>
                <td>{{ $candidate_info->city_candidate }}</td>
                <td>{{ $candidate_info->description }}</td>
                <td>{{ $candidate_info->file_candidate_id }}</td>
                <td>{{ $candidate_info->photo_id }}</td>
                <td>{{ $candidate_info->candidates_full_name->id }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('admin.candidates_info.show',$candidate_info->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('admin.candidates_info.edit',$candidate_info->id) }}">Edit</a>
                    <form action="{{ route('admin.candidates_info.destroy',$candidate_info->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
