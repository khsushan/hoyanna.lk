<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of event
 *
 * @author Ushan
 */
class Event extends MY_Model{

    const DB_TABLE = 'event';
    const DB_TABLE_PK = 'id';

    public $id;
    public $name;
    public $location;
    public $date;
    public $starttime;
    public $endtime;
    public $userid;

    //add new event 
    function addEvent($array) {
        $this->name = $array[0]["name"];
        $this->location = $array[0]["location"];
        $this->date = $array[0]["date"];
        $this->starttime = $array[0]["starttime"];
        $this->endtime = $array[0]["endtime"];
        $this->userid = $array[0]["userid"];
        $this->save();
    }

    function updateEvent() {
        
    }

    function getAllEvent() {
        
    }

    function getAllEventByUser($userid) {
        $query = $this->db->get_where('event', array('$userid' => $userid), 0, 0);
        return $query->result_array();
    }

    function getAllEventByDate($date) {
        $query = $this->db->get_where('event', array('$date' => $date), 0, 0);
        return $query->result_array();
    }

    function getUserByEvent($eventid) {
        $query = $this->db->get_where('event', array('$id' => $eventid), 0, 0);
        return $query->result_array();
    }

    function send_sms() {
        $url = 'https://api.dialog.lk/sms/send';
        $data = array('message' => 'test', 'destinationAddresses' => 'tel:94776728576', 'password' => 'a0fa553d85d95ca70602ccf32344ed54', 'applicationId' => 'APP_018054');
        //$jason_data =  json_encode($data);
        // use key 'http' even if you send the request to https://...
        $options = stream_context_create(array(
            'http' => array(
                'header' => "Content-type: application/json\r\n",
                'method' => 'POST',
                'content' => json_encode($data)
            )
        ));
//        $context = stream_context_create($options);
//        $result = file_get_contents($url, false, $context);
//
//        var_dump($result);
        $response = file_get_contents($url, FALSE, $options);
        // Check for errors
        if ($response === FALSE) {
            die('Error');
        }

// Decode the response
        $responseData = json_decode($response, TRUE);

// Print the date from the response
        echo $responseData['published'];
    }

}
