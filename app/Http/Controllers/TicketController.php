<?php

namespace App\Http\Controllers; // Пространство имен для контроллеров

use App\Models\Ticket; // Подключаем модель Ticket, чтобы использовать её в методах контроллера
use Illuminate\Http\Request; // Подключаем класс Request для работы с HTTP-запросами

class TicketController extends Controller // Определяем класс TicketController, который наследуется от базового класса контроллера
{
    public function index() // Объявляем метод index, который будет обрабатывать запрос на отображение всех тикетов
    {
        // Получаем все записи из таблицы tickets через модель Ticket
        $data = Ticket::all();
        $date = date("Y-m-d");

        // dd($tickets);
        
        // Возвращаем представление t.blade.php и передаем в него массив с тикетами
        return view('t', ['table' => $data,  'date'=> $date]);
    }
}
