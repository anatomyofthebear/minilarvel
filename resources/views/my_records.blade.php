@extends('layouts.app')
@section('content')

<div class="starter-template">
	<a href="{{ url('/my_records/add_record')}}"><button type="submit" class="btn btn-primary">Добавить пластинку</button></a>
	<table class="table table-striped">
	<thead>
	<tr>
	  <th>Название</th>
	  <th>Исполнитель</th>
	  <th>Год издания</th>
	  <th>Количество песен</th>
	  <th>Жанр</th>
	  <th>Действия</th>
	</tr>
	</thead>
  <tbody>
	@foreach($records as $record)
	<tr>
		<td>{{ $record->title }}</td>
		<td>{{ $record->singer }}</td>
		<td> {{ $record->year }}</td>
		<td> {{ $record->count_songs }}</td>
		<td>{{ $record->genre }}</td>
		<td>
			<a href="{{ url('/my_records/update/'.$record->id)}}"><button class="btn btn-info my_btn">Редактировать</button></a>
			<form method="POST" action="{{ url('/my_records/delete/'.$record->id)}}" onsubmit="return confirm('Удалить запись?');">
				<button class="btn btn-warning my_btn" type="submit">Удалить</button>
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
			</form>
		</td>
     </tr>
	@endforeach
	 </tbody>
	</table>

</div>
{{ $records->links() }}
@endsection

    
 