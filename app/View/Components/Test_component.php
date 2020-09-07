<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Test_component extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    //atributos passado pela view
    public $att;
    public $list;
        
    public function __construct($att )
    {
        // $this->list = $list;
        $list = [1,2,3];
        $this->list = $list;
        $this->att = $att;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render(){
        return view('components.test_component');
    }
}
