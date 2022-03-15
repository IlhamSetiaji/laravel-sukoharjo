<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Data Sub Class</title>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <a href="{{ url($masterClassID.'/sub-class/create') }}" class="btn btn-success">Tambah Sub Class</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Master Class ID</th>
                    <th scope="col">Nama Master Class</th>
                    <th scope="col">Nama Sub Class</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subClasses as $s)
                <tr>
                    <th scope="row">{{ $s->id }}</th>
                    <td>{{ $s->master_class_id }}</td>
                    <td>{{ $s->master_classes->name }}</td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->description }}</td>
                    <td>{{ $s->status }}</td>
                    <td><a href="#" class="btn btn-warning">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>
