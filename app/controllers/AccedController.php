<?php


require_once (__DIR__.'/../models/User.php');


class adilController extends BaseController{
    
    private $UserModal;
     public function __construct(){
        $this->UserModal=new User();
     }

    public function test(){
        
        $this->render("info");
        
    }
 
}