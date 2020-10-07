<?php
require_once(ROOT.'Helper/Controller.php');
Class ContactController extends Controller {
	  function index()
    {
        if (isset($_POST["hoten"]))
        {
            require(ROOT . 'Model/Contact.php');

             $contacts = new Contact();

            if ($contacts->index($_POST['hoten'],$_POST['sdt'],$_POST['email'],$_POST['noidung'],$_POST['diachi']))
            {
                
                 header("Location: " . WEBROOT . "index.php/Contact/index");
               
            }
        }

        $this->render("index");
    }



}
  
?>