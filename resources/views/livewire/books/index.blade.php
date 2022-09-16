<div>
        <div class="container">
            <table class="table table-striped table-bordered text-center bg-light">
                <thead class="table-dark">
                    <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>AUTHOR</th>
                    <th>EMAIL</th>
                    <th>CONTACT</th>
                    <th>GENRE</th>
                    <th>YEAR</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author }}</td>
                    <td>{{$book->email}}</td>
                    <td>{{$book->contact_number}}</td>
                    <td>{{$book->genre}}</td>
                    <td>{{$book->year}}</td>
                    <td>
                        <a href="{{url('/edit', ['edit' => $book->id])}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{url('/delete', ['edit' => $book->id])}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                    
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
