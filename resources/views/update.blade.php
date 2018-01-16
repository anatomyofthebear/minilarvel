@extends('layouts.app')
@section('content')
<div class="starter-template">
<form method="POST" action="">
  <div class="form-group">
  	<input type="hidden" value="{{ $record->id }}" name="id">
    <label for="inputTitle">Название:</label>
    <input type="text" class="form-control" id="inputTitle" value="{{ $record->title }}" name="title">
    @if ($errors->has('title'))
        <span class="label label-danger">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
  </div>
  <div class="form-group">
    <label for="inputSinger">Исполнитель:</label>
    <input type="text" class="form-control" id="inputSinger" value="{{ $record->singer }}" name="singer">
    @if ($errors->has('singer'))
        <span class="label label-danger">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
  </div>
  <div class="form-group">
    <label for="inputSing">Количество песен:</label>
    <input type="numbers" class="form-control" id="inputSing" value="{{ $record->count_songs }}" name="count_songs">
    @if ($errors->has('count_songs'))
        <span class="label label-danger">
            <strong>{{ $errors->first('count_songs') }}</strong>
        </span>
    @endif
  </div>
  <div class="form-group">
    <label for="inputGenre">Жанр:</label>
    <input type="text" class="form-control" id="inputGenre" value="{{ $record->genre }}" name="genre">
    @if ($errors->has('genre'))
        <span class="label label-danger">
            <strong>{{ $errors->first('genre') }}</strong>
        </span>
    @endif
  </div>
  <div class="form-group">
    <label for="inputYear">Год выпуска:</label>
    <input type="text" class="form-control" id="inputYear" value="{{ $record->year }}" name="year">
    @if ($errors->has('year'))
        <span class="label label-danger">
            <strong>{{ $errors->first('year') }}</strong>
        </span>
    @endif
  </div>
 
  <button type="submit" class="btn btn-primary">Сохранить</button>
  {{ csrf_field() }}
</form>
</div>
@endsection