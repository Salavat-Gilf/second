<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
</head>
<body>
    <h1>Список обращений</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Тема</th>
                <th>Email</th>
                <th>Дата</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
            <tr>
                <td>{{ $ticket->theme }}</td>
                <td>{{ $ticket->email }}</td>
                <td>{{ $ticket->date }}</td>
                <td>
                    <a href="{{ route('tickets.show', $ticket->id) }}">Просмотреть</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('create', $ticket->id) }}">форма</a>
</body>
</html>
