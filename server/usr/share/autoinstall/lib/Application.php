<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Application
 *
 * @author phochs
 */
class Application {
    protected $m_name;
    protected $m_status;
    protected $m_description;
    protected $m_updates = array();
    
    public function __construct($p_name=null, $p_status=null, $p_description=null, $p_updates=null) {
        if(!is_null($p_name)) {
            $this->setName($p_name);
        }
        if(!is_null($p_status)) {
            $this->setStatus($p_status);
        }
        if(!is_null($p_description)) {
            $this->setDescription($p_description);
        }
        if(!is_null($p_updates)) {
            $this->m_updates = $p_updates;
        }
    }
    
    public function setName($p_name) {
        if(is_string($p_name)) {
            $this->m_name = $p_name;
            return true;
        }
        
        return false;
    }
    
    public function setStatus($p_status) {
        if(is_string($p_status)) {
            if($p_status == 'install' || $p_status == 'remove') {
                $this->m_status = $p_status;
                return true;
            }
        }
        
        return false;
    }
    
    public function setDescription($p_description) {
        if(is_string($p_description)) {
            $this->m_description = $p_description;
            return true;
        }
        
        return false;
    }
    
    public function addUpdate(Update $p_update) {
        $this->m_updates[] = $p_update;
    }
    
    public function getName() {
        return $this->m_name;
    }
    
    public function getStatus() {
        return $this->m_status;
    }
    
    public function getDescription() {
        return $this->m_description;
    }
    
    public function getUpdates() {
        return $this->m_updates;
    }
    
    public function asArray() {
        $return = ['name' => $this->m_name, 'status' => $this->m_status, 'description' => $this->m_description, 'updates' => array()];
        foreach ($this->m_updates as $update) {
            $return['updates'][] = $update;
        }
    }
}
