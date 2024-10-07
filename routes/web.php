<?php

use Illuminate\Support\Facades\Route; // Подключаем фасад Route для создания маршрутов
use App\Http\Controllers\TicketController; // Подключаем контроллер TicketController для обработки запросов

// Определяем маршрут для URL "/t", который будет вызывать метод index контроллера TicketController
Route::get('/', [TicketController::class, 'index']);
