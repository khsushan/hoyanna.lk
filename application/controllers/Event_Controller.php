<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of eventcontroller
 *
 * @author Ushan
 */
class Event_Controller extends CI_Controller{
    //put your code here
    
    function index(){
         $this->load->model('event');
         $event = new event();
         $event->send_sms();
    }
}
