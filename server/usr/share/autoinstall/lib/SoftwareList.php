<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SoftwareList
 *
 * @author phochs
 */
class SoftwareList {
    protected $m_softwareList = array();
    
    public function add($p_application) {
        $this->m_softwareList[$p_application->getName()] = $p_application;
    }
    
    public function remove($p_application) {
        if(is_object($p_application)) {
            unset($this->m_softwareList[$p_application->getName()]);
        } else {
            unset($this->m_softwareList[$p_application]);
        }
    }
    
    public function asArray() {
        $return = array();
        foreach ($this->m_softwareList as $application) {
            $return[$application->getName()] = $application->asArray();
        }
        
        return $return;
    }
}
