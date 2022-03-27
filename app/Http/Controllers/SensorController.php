<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sensormid;

class SensorController extends Controller
{
    //get data sensor from query string
    public function sendDataSensor(Request $request){

        $temp = $request->sm_temperature;
        $hum = $request->sm_humudity;
        $lux = $request->sm_light_intensity;
        $ammonia = $request->sm_ammonia;

        $sm = new sensormid();
        $sm->sm_temperature = $temp;
        $sm->sm_humudity = $hum;
        $sm->sm_light_intensity = $lux;
        $sm->sm_ammonia = $ammonia;
        $sm->save();
        dd($sm->save());
    }
}
