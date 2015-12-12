<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of request
 *
 * @author Ushan
 */
class Request extends MY_Model {
    
    const DB_TABLE = 'request';
    const DB_TABLE_PK = 'id';
    
    public $id;
    public $description;
    public $vacancyid;
    public $userid;


    //put your code here
    //add new requesst
    function addRequest($description,$username,$vacancy_id){
        $this->description = $description;
        $this->vacancyid = $vacancy_id;
        $this->userid = $username;
        $this->save();
    }
    
    function updateRequest(){
        $query = $this->db->get_where('request', array('comment_id' => $comment_id),0, 0);
        return $query->result_array();
    }
    
    function getAllRequest(){}
    
    function getAllRequestByUser($userid){
        $query = $this->db->get_where('request', array('$userid' => $userid),0, 0);
        return $query->result_array();
    }
    
    function getAllRequestByVacancy($vacancyid){
        $this->db->select('request.id ,user.firstname,user.nic,user.emailaddress');
        $this->db->from('request');
        $this->db->join('user', 'user.userid = request.userid');
        $this->db->where('request.vacancyid',$vacancyid);
        $query = $this->db->get();
        var_dump($query->result_array());
        return $query->result_array();
    }
    
    function getUserByrequest($requestid){
        $query = $this->db->get_where('request', array('$id' => $requestid),0, 0);
        return $query->result_array();
    }
    
 }
