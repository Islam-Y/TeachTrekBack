@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('position.create') }}"> Create New Position</a>
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
        </tr>
        @foreach ($positions as $position)
            <tr>
                <td>{{ $position->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('position.show',$position->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('position.edit',$position->id) }}">Edit</a>
                    <form action="{{ route('position.destroy',$position->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
