@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('technoradar.create') }}"> Create New Technoradar Item</a>
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
            <th>Name</th>
            <th>Category</th>
            <th>User type</th>
            <th>Description</th>
        </tr>
        @foreach ($technoradars as $technoradar)
            <tr>
                <td>{{ $technoradar->name }}</td>
                <td>{{ $technoradar->categoryName() }}</td>
                <td>{{ $technoradar->userTypeName()}}</td>
                <td>{{ $technoradar->description }}</td>
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
