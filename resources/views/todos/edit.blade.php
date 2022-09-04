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
    <h1 class="text-center">Edit Todo</h1>
    <form action="/{{ $item->id }}" method="post">
        @csrf
        @method('put')
        <div class="input-group input-group-sm mb-3">
            <input type="text" class="form-control" placeholder="Edit Aktivitas" name="todo" value="{{ $item->todo }}">
            <button class="btn btn-success" type="submit">Edit</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
