@extends('layouts.layout')

@section('content')

<div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            User Lists
          </div>
        </div>

        <div class="panel-body">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>User</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            
                            <td>{{ $user->name }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $users->render(); !!}
            </div>
        </div>
    </div>

@endsection

@section('footer')
    Footer result
@endsection