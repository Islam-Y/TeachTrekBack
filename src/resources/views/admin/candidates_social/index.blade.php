@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('candidates_social.create') }}"> Create New Candidate Social Item</a>
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
            'social_links', 'email', 'phone_number', 'address', 'candidate_full_name_id'
        </tr>
        @foreach ($candidates_social as $candidate_social)
            <tr>
                <td>{{ $candidates_social->name }}</td>
                <td>{{ $candidates_social->categoryName() }}</td>
                <td>{{ $candidates_social->userTypeName()}}</td>
                <td>{{ $candidates_social->description }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('technoradar.show',$technoradar->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('technoradar.edit',$technoradar->id) }}">Edit</a>
                    <form action="{{ route('technoradar.destroy',$technoradar->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
