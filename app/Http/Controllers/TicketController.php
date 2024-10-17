<?php

namespace App\Http\Controllers; // Пространство имен для контроллеров

use App\Models\Ticket; // Подключаем модель Ticket, чтобы использовать её в методах контроллера
use Illuminate\Http\Request; // Подключаем класс Request для работы с HTTP-запросами

class TicketController extends Controller // Определяем класс TicketController, который наследуется от базового класса контроллера
{
    public function index() // Объявляем метод index, который будет обрабатывать запрос на отображение всех тикетов
    {
        // Получаем все записи из таблицы tickets через модель Ticket
        $tickets = Ticket::all();

        
        // Возвращаем представление t.blade.php и передаем в него массив с тикетами
        return view('tickets', ['tickets' => $tickets,]);
    }

    public function show($id)
    {
        // Находим заявку по ID
        $ticket = Ticket::findOrFail($id);
    
        // Передаем заявку в представление
        return view('ticket', ['ticket' => $ticket]);
    }

    public function create()
    {
        //Возвращаем представление с формой
        return view('create');
    }

    public function store(Request $request)
    {
        // Валидируем данные формы
        $validated = $request->validate([
            'theme' => 'required|max:255',
            'email' => 'required|email',
        ]);

        // Создаем новую заявку в БД
        Ticket::create([
            'theme' => $validated['theme'],
            'email' => $validated['email'],
            'date' => now(), // указываем текущую дату
        ]);

        //переадресовываем список заявок
        return redirect('/tickets');
    }
}
