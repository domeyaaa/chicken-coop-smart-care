<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dht22;

class SensorController extends Controller
{
    public function sendDataSensor(Request $request){
        $temp = $request->temperature;
        $hum = $request->humidity;
        $fah = $request->fahrenheit;

        $dht22 = new dht22;
        $dht22->temperature = $temp;
        $dht22->humidity = $hum;
        $dht22->fahrenheit = $fah;
        $dht22->save();
    }
}
