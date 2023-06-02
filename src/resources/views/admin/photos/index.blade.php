@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.photos.create') }}"> Create New Photo</a>
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
            <th>Фотографии</th>

        </tr>
        @foreach ($photos as $photo)
            <tr>
                <td>{{ $photo->id }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('admin.photos.show',$photo->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('admin.photos.edit',$photo->id) }}">Edit</a>
                    <form action="{{ route('admin.photos.destroy',$photo->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
