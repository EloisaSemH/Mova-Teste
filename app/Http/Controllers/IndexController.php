<?php

namespace App\Http\Controllers;

use App\Http\Models\Friday;
use App\Http\Models\Monday;
use App\Http\Models\Saturday;
use App\Http\Models\Sunday;
use App\Http\Models\Thursday;
use App\Http\Models\Tuesday;
use App\Http\Models\Wednesday;
use App\Http\Models\Weekdays;
use App\Http\Requests\AppFormRequest;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function message(AppFormRequest $request)
    {
        if(is_null($request->weekday))
            return 'Por favor, selecione um dia da semana';

        $class = new Weekdays();
        switch ($request->weekday){
            case 'sunday':
                $class = new Sunday();
                break;
            case 'monday':
                $class = new Monday();
                break;
            case 'tuesday':
                $class = new Tuesday();
                break;
            case 'wednesday':
                $class = new Wednesday();
                break;
            case 'thursday':
                $class = new Thursday();
                break;
            case 'friday':
                $class = new Friday();
                break;
            case 'saturday':
                $class = new Saturday();
                break;
        }
        return $class->getMessage();
    }
}
