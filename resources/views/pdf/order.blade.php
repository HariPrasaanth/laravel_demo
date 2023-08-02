<table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($fruits as $fruit)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $fruit->name }}</td>
        <td>
          <a href="fruits/edit/{{$fruit->id}}">Edit</a>
          <a href="fruits/delete/{{$fruit->id}}" onclick="return confirm('Are you sure you want to Delete?')">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>