<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of requestcontroller
 *
 * @author Ushan
 */
class Request_Controller extends CI_Controller {
    //put your code here
    function getRequestByVacancyId(){
        $elmId = $_POST['elmId'];
        $this->load->model('Request');
        $request = new request();
        $array = $request->getAllRequestByVacancy($elmId);
        $data["requests"] = $array;
        return $data;
    }
    
    
    
}
