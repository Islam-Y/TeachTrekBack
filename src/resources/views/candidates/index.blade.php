@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('department.create') }}"> Create New Department</a>
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
            <th>Company</th>
        </tr>
        @foreach ($departments as $department)
            <tr>
                <td>{{ $department->name }}</td>
                <td>{{ $department->company->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('department.show',$department->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('department.edit',$department->id) }}">Edit</a>
                    <form action="{{ route('department.destroy',$department->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
