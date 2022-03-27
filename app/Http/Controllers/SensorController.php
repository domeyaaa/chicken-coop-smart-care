<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sensormid;

class SensorController extends Controller
{
    //middle sensor
    public function sendDataSensor(Request $request){

        $temp = $request->temp;
        $hum = $request->hum;
        $lux = $request->lux;
        $ammonia = $request->ammonia;

        $sm = new sensormid();
        $sm->sm_temperature = $temp;
        $sm->sm_humudity = $hum;
        $sm->sm_light_intensity = $lux;
        $sm->sm_ammonia = $ammonia;
        $sm->save();
        dd($sm->save());
    }
}
