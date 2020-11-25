<?php
    class Controller
    {
        var $vars = [];
        var $layout = "Layout";
        var $vars2 = [];
        var $segments = [];
        var $data = null;

        function __construct()
        {

            $this->segments = $this->getSegmentsFromUrl();
            
        }
        public function getSegmentsFromUrl(){
            $url = $_SERVER["REQUEST_URI"];
            $url = trim($url);
            $request = new stdClass();
            if ($url == "/CarViet/")
            {
                $request->controller = "Home";
                $request->action = "index";
                $request->params = [];
            }
            else
            {
                $explode_url = explode('/', $url);
                $explode_url = array_slice($explode_url, 2);
                $request->controller = $explode_url[1];
                $request->action = $explode_url[2];
                $request->params = array_slice($explode_url, 3);

            }
            return $request;
        }

        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);
            
        }
        function setvar2($d1)
        {
            $this->vars2 = array_merge($this->vars, $d1);
        }

        function render($filename)
        {
            extract($this->vars);
            if(count($this->vars2)!=0)
                extract($this->vars2);
            ob_start();
            require(ROOT . "View/" . ucfirst(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php');
            $content_for_layout = ob_get_clean();

            if ($this->layout == false)
            {
                $content_for_layout;

            }
            else
            {
                require(ROOT . "View/Shared/" . $this->layout . '.php');
            }
        }

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }
        }

    }
?>