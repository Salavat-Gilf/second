<?php

namespace App\Models; // Определяет пространство имен для модели Ticket, указывая, что она находится в директории Models

use Illuminate\Database\Eloquent\Factories\HasFactory; // Подключаем трейт HasFactory для использования фабрик
use Illuminate\Database\Eloquent\Model; // Подключаем базовый класс Model от Laravel, чтобы модель могла работать с базой данных

class Ticket extends Model // Объявляем класс Ticket, который наследуется от Model
{
    use HasFactory; // Используем трейт HasFactory для создания фабрик, упрощающих создание моделей для тестов и заполнения базы данных
}
