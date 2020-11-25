<?php
require_once 'data/user.php';

class UserController{
    
    private $data;
    
    public function __CONSTRUCT(){
        $this->data = new User();
    }
    
    public function Index(){
                $usr = new User();
        
        if(isset($_REQUEST['id'])){
            $usr = $this->data->Search($_REQUEST['id']);
        }
        require_once 'views/header.php';
        require_once 'views/dashboard.php';
        require_once 'views/footer.php';
    }
    
    public function Save(){
        $usr = new User();
        
        $usr->id = $_REQUEST['id'];
        $usr->name = $_REQUEST['name'];
        $usr->type = 'user';
        $usr->user = $_REQUEST['user'];
        $usr->email = $_REQUEST['email'];
        $usr->password = $_REQUEST['password'];

        $usr->id > 0 
            ? $this->data->Update($usr)
            : $this->data->Create($usr);
        
        header('Location: index.php');
    }
    
    public function Delete(){
        $this->data->Delete($_REQUEST['id']);
        header('Location: index.php');
    }
}