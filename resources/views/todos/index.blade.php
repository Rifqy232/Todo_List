<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1 class="text-center">Todo List</h1>
    <form action="/" method="post">
        @csrf
        <div class="input-group input-group-sm mb-3">
            <input type="text" class="form-control" placeholder="Tambah Aktivitas" name="todo">
            <button class="btn btn-success" type="submit">Tambah</button>
        </div>
    </form>
    <ol>
        @foreach ($todos as $item)
            <li>{{ $item->todo }}</li>
            <div class="d-flex flex-row-mb3">
                <div class="edit-btn mb-3 me-2">
                    <a href="/{{ $item->id }}/edit"><button class="btn btn-outline-info btn-sm mt-1">Edit</button></a>
                </div>
                <form action="/{{ $item->id }}" method="post">
                    @csrf
                    @method('delete')
                    <div class="delete-btn">
                        <button class="btn btn-outline-danger btn-sm mt-1">Delete</button>
                    </div>
                </form>
            </div>
        @endforeach
    </ol>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
