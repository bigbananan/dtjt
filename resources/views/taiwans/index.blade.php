@extends('layouts.layout')

@section('content')
	<div class="text-center">
		<a href="{{ url('/admin/taiwan/create') }}" class="btn btn-primary">Create New</a>
	</div>

	<hr>

    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="panel-title">
        		List Results Taiwan
        	</div>
        </div>

        <div class="panel-body">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Periode</th>
                        <th>Result</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taiwans as $taiwan)
                        <tr>
                            <td>{{ $taiwan->tanggal }}</td>
                            <td>{{ $taiwan->periode }}</td>
                            <td>{{ $taiwan->number }}</td>
                            <td><a href="/admin/taiwan/{{ $taiwan->id }}/edit" class="btn btn-default btn-sm">Edit</a></td>
                            <td>
                                <form method="POST" action="/admin/taiwan/{{ $taiwan->id }}/delete">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>                  
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $taiwans->render(); !!}
            </div>
        </div>
    </div>
@endsection


@section('footer')
    Footer result
@endsection
