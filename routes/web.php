<?php

use Illuminate\Support\Facades\Route; // Подключаем фасад Route для создания маршрутов
use App\Http\Controllers\TicketController; // Подключаем контроллер TicketController для обработки запросов


// Определяем маршрут для URL "/t", который будет вызывать метод index контроллера TicketController
Route::get('/tickets', [TicketController::class, 'index']);
// Маршрут для отображения конкретной заявки по ID
Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('tickets.show');

// Mаршрут для формы добавления заявки
// Показать форму для создания новой заявки
Route::get('create', [TicketController::class, 'create'])->name('create');

// Обработать отправку формы и сохранить заявку
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
