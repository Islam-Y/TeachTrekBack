@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employee.create') }}"> Create New Employee</a>
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
            <th>Full name</th>
            <th>Position</th>
            <th>Department</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->position->name }}</td>
                <td>{{ $employee->department->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('employee.show',$employee->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('employee.edit',$employee->id) }}">Edit</a>
                    <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
