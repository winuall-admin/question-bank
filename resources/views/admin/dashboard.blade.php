@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Users</div>

          <div class="panel-body">
            <form role="search" method="GET" action="admin">
              <div class="form-group">
                <input name="q" type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td><a href="{{ route('show_user', $user->id) }}" type="button" class="btn btn-primary">Show</button></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="text-center">
              {{-- {{ $users->links() }} --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
