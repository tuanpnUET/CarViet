<?php
require_once(ROOT.'Helper/Controller.php');
class ContactAdminController extends Controller
{
    function index()
    {
        require(ROOT . 'Model/ContactAdmin.php');

        $ContactAdmins = new ContactAdmin();

        $this->data['ContactAdmins'] = $ContactAdmins->getAll();
        $this->set($this->data);
        $this->render("index");
    }

}
?>