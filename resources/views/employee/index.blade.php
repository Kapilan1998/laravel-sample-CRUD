<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<p style="color:brown; font-weight:700; font-size:50px;">Details of all employees are listed here...</p>
<button type="submit" class="btn btn-dark"><a href="{{route('employees.create')}}">add new</a></button>
<table border=2 width=85% height=40% class="table-danger" align="center">
    <tr class="table-danger" align="center">
        <th>Employee ID</th>
        <th>First name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Gender</th>

        <th>Action</th>
    </tr>
    @foreach ($employee as $emp_unique)
        <tr class="table-success">
            <td>{{ $emp_unique->id }}</td>
            <td>{{ $emp_unique->first_name }}</td>
            <td>{{ $emp_unique->last_name }}</td>
            <td>{{ $emp_unique->address }}</td>
            <td>{{ $emp_unique->gender }}</td>

            <td><button type="submit" class="btn btn-info"><a href="{{ route('employees.show', $emp_unique->id) }}">
                        view</a></button>

             <button type="submit" class="btn btn-warning"><a href="{{route('employees.edit', $emp_unique->id)}}">edit</a></button>

             <form action="{{ route('employees.destroy', $emp_unique->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete" class="btn btn-danger">
            </form>

            </td>

        </tr>
    @endforeach
</table>

<i class="fas fa-eye"></i>
