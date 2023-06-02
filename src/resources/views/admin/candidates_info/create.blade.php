@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Candidates Info Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.candidates_info.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.candidates_info.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Пол:</strong>
                    <input type="radio" name="floor" id="man" class="form-control">
                    <label for="man">Мужской пол</label>

                    <input type="radio" name="floor" id="woman" class="form-control">
                    <label for="woman">Женский пол</label>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Профессия:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Profession">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Специализация:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Specialization">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Город соискателя:</strong>
                    <input type="text" name="name" class="form-control" placeholder="City">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Файлы:</strong>
                    {!! Form::select('file_candidate_id',  $files, null, ['class' => 'form-control']) !!}

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Фотографии:</strong>
                    {!! Form::select('photo_id',  $photos, null, ['class' => 'form-control']) !!}

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Соискатель:</strong>
                    {!! Form::select('candidate_full_name_id',  $candidates_full_name, null, ['class' => 'form-control']) !!}

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
