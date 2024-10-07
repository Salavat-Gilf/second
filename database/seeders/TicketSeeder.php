<?php

namespace Database\Seeders; // Пространство имен для сидеров

use App\Models\Ticket; // Подключаем модель Ticket для взаимодействия с таблицей tickets
use Illuminate\Database\Seeder; // Подключаем класс Seeder, который предоставляет методы для сидинга данных

class TicketSeeder extends Seeder // Объявляем класс сидера
{
    public function run() // Метод, который выполняется при запуске сидера
    {
        // Создаем записи в таблице tickets через модель Ticket
        Ticket::create(['theme' => 'Сломался принтер', 'email' => 'lexa@mail.loc', 'date' => '2024-09-15']);
        Ticket::create(['theme' => 'Не включается компьютер', 'email' => 'babanura@mail.loc', 'date' => '2024-09-16']);
        Ticket::create(['theme' => 'Забыл пароль', 'email' => 'borkwork@mail.loc', 'date' => '2024-09-17']);
    }
}
