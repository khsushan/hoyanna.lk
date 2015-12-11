<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vacancycontroller
 *
 * @author Ushan
 */
class Vacancy_Controller  extends CI_Controller{
    
    function index(){
        $this->load->model('Vacancy');
        $vacancy =  new Vacancy();
        $array = $vacancy->getVacancyByUser(1);
        $data["vacancies"] = $array;
        $this->load->view('mainView',$data);
    }

    public function addVacancy() {
        $this->load->model('Vacancy');
        $vacancy = new Vacancy();
        $array["name"] = "testing";//request name;
        $array["description"] = "test desc"; //request desc
        $array["typeid"] = 1; //request desc
        $array["userid"] = 1; //request desc
        $vacancy->addVacancy($array);
        
    }
    
    function getVacancyTypes(){
        $this->load->model('VacancyType');
        $vacancyType = new VacancyType();
        $vacancyType->getVacancyTypes();
    }
    
    function getAllVacancy(){
        $this->load->model('Vacancy');
        $vacancy =  new Vacancy();
        $vacancy->getAllVacancy();
    }
    
    function getVacancyByID(){
        $this->load->model('Vacancy');
        $vacancy =  new Vacancy();
        $vacancy->getVacancyById(1);
    }
    
    function getVacancyByUserID(){
        $this->load->model('Vacancy');
        $vacancy =  new Vacancy();
        $vacancy->getVacancyByUser(1);
        
    }
    
    function getRequestByUser(){
        
    }
    
    
}
