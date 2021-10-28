<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Weekdays extends Model
{
    public $message = '';

    public function getMessage(): string
    {
        return 'Você selecionou ' . $this->message;
    }
}
