<?php
    namespace App\View\Components;
    use Illuminate\View\Component;

    class Sidebar extends Component
    {
        public $name;
        public $email;
        public $link;

        public function __construct($name, $email, $link){
            $this->name = $name;
            $this->email = $email;
            $this->link = $link;
        }

        public function render(){
            return view('components.Sidebar');
        }
    }