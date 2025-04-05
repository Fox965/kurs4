<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome to the Home Page</h1>

        <!-- Условие для отображения контента -->
        @if($isAdmin)
            <p class="text-success">You are an admin! Here are some special items:</p>
        @else
            <p>You are a regular user. Here are the items:</p>
        @endif

        <!-- Цикл для вывода списка элементов -->
        <ul class="list-group">
            @foreach($items as $item)
                <li class="list-group-item">{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>