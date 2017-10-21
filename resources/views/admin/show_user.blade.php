@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">User info</div>

          <div class="panel-body">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>ID</td>
                  <td>{{ $user->id }}</td>
                </tr>
                <tr>
                  <td>Name</td>
                  <td>{{ $user->name }}</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>{{ $user->email }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
