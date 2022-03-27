<?php

namespace App\View\Components;

use App\Models\sensormid;
use Illuminate\View\Component;

class Sensor extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $sensor = sensormid::query()->orderBy('id','DESC')->first();
        return view('components.sensor',compact('sensor'));
    }
}
