<?php

    namespace App\View\Components;
    use Illuminate\View\Component;
    
    class Delete extends Component
    {
        public $route;
        public $id;
        public $background;
        public $message;

        public function __construct($route, $id, $message, $background)
        {
            $this->route        = $route;
            $this->id           = $id;
            $this->message      = $message;
            $this->background   = $background;
        }

        public function render(){
            return view('components.ModalDelete');
        }
    }