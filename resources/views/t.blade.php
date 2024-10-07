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
            </tr>
        </thead>
        <tbody>
            @foreach ($table as $ticket)
            <tr>
                <td>{{ $ticket['theme'] }}</td>
                <td>{{ $ticket['email'] }}</td>
                <td>{{ $ticket['date'] }}</td>
            </tr>   
            {{$date}}
            @endforeach
        </tbody>

    </table>

</body>
</html>
