@extends('layouts.app')

@section('content')
	<h1>TESTJE</h1>
	<table>
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
		</tr>
	</table>
	@endsection
