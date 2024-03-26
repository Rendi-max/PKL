<?php

    namespace App\View\Components;
    use Illuminate\View\Component;
    
    class Footer extends Component
    {
        public $background;
        public function __construct($background)
        {
            $this->background = $background;   
        }

        public function render(){
            return view('components.Footer');
        }
    }