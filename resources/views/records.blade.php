@extends('layouts.app')
@section('content')
<div class="starter-template">
	<table class="table table-striped">
	<thead>
	<tr>
	  <th>Название</th>
	  <th>Исполнитель</th>
	  <th>Год издания</th>
	  <th>Количество песен</th>
	  <th>Жанр</th>
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
     </tr>
	@endforeach
	 </tbody>
	</table>

</div>
{{ $records->links() }}
@endsection

    
 