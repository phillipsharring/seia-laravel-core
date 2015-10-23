<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Date Registered</th>
      <th>Status</th>
      <th>Ban</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at->format('n/j/Y') }}</td>
        <td>{{ ucwords($user->status) }}</td>
        <td>{!! Form::open(['route' => ['users.ban', $user], 'method' => 'PUT']) !!}<button type="submit" class="btn btn-danger btn-sm">Ban</button>{!! Form::close() !!}</td>
      </tr>
    @endforeach
  </tbody>
</table>
