<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    /**
     * Create a new component instance.
     */
    public $title='';
    public $type='';
    public $class='';
    public $message='';

    public function __construct($title, $type)
    {
        $this->title= $title;
        $this->type= $type;

        switch($type){
            case 'danger':
                $class="alert alert-danger";
                break;
            
            case 'info':
                $class="alert alert-info";
                break;
        }

        $this->class=$class;

        if($class=="alert alert-info"){
            $this->message="LA CLASE ERA INFO";
        }else{
            $this->message="LA CLASE ERA OTRA";
        }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
