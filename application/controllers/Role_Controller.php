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
class Role_Controller extends CI_Controller {

    //put your code here
    function redirectRole() {
        $userName = $this->input->post('userName');
        $password = $this->input->post('password');

        $this->load->model('user');
        $user = new user();
        $results = $user->searchUserByUsename($userName);
        if (($results[0]->userid) == 1) {
            $this->load->model('Vacancy');
            $vacancy = new Vacancy();
            $array = $vacancy->getVacancyByUser($results[0]->userid);
            $data["vacancies"] = $array;
            $this->load->view('mainView', $data);
        } else if (($results[0]->userid) == 2) {
            $this->load->view('employerView');
        } else if (($results[0]->userid) == 3) {
            $this->load->view('organizerview');
        }
    }

}
