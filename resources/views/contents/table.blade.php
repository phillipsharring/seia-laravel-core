<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Category</th>
      <th>Title</th>
      <th>Date Created</th>
      <th>Status</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contents as $content)
      <tr>
        <td>{{ $content->id }}</td>
        <td>{{ ucwords($content->type->name) }}</td>
        <td>@if($content->category) {{ $content->category->name }} @endif</td>
        <td>{{ $content->title }}</td>
        <td>{{ $content->created_at->format('n/j/Y') }}</td>
        <td>{{ ucwords($content->status) }}</td>
        <td><a href="{{ route('contents.edit', $content) }}">Edit</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
