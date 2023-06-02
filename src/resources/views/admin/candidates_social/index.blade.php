@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.candidates_social.create') }}"> Create New Candidate Social Item</a>
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
            <th>Социальные сети</th>
            <th>Email</th>
            <th>Номер телефона</th>
            <th>Адрес</th>
            <th>Соискатель</th>

        </tr>
        @foreach ($candidates_social as $candidate_social)
            <tr>
                <td>{{ $candidate_social->social_links }}</td>
                <td>{{ $candidate_social->user->email }}</td>
                <td>{{ $candidate_social->phone_number}}</td>
                <td>{{ $candidate_social->address }}</td>
                <td>{{ $candidate_social->candidates_full_name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('admin.candidates_social.show',$candidates_social->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('admin.candidates_social.edit',$candidates_social->id) }}">Edit</a>
                    <form action="{{ route('admin.candidates_social.destroy',$candidate_social->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
