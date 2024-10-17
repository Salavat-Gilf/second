<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить заявку</title>
</head>
<body>
    <h1>Добавить новую заявку</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <label for="theme">Тема:</label><br>
        <input type="text" id="theme" name="theme" value="{{ old('theme') }}"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ old('email') }}"><br>

        <button type="submit">Добавить заявку</button>
    </form>

    <a href="/tickets">Вернуться к списку заявок</a>
</body>
</html>
