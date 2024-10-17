<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявка #{{ $ticket->id }}</title>
</head>
<body>
    <h1>Заявка #{{ $ticket->id }}</h1>
    <p><strong>Тема:</strong> {{ $ticket->theme }}</p>
    <p><strong>Email:</strong> {{ $ticket->email }}</p>
    <p><strong>Дата:</strong> {{ $ticket->date }}</p>
    <a href="/tickets">Вернуться к списку заявок</a>
</body>
</html>
