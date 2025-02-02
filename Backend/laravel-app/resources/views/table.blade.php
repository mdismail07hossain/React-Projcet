<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Demo Table 1</h2>
<a href="{{ route ('create')}}">
    <button style="background-color: green; color:white" type="submit">Create</button>
</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->contact}}</td>
                    <td>
                   
                        <div class="btn-group">
                                <a href="{{ route('edite', $data->id) }}">
                        <button style="background-color: gray; color:white;display:inline"  type="submit">edit</button>
                      </a>
                             <form action="{{ route('delete', $data->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                        <button style="background-color: red; color:white;display:inline" type="submit">Delete</button>
                    </form>
                </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>

    

</body>
</html>
