<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Update
 *
 * @author phochs
 */
class Update {
    protected $m_description = '';
    protected $m_repositories = array('included' => array(), 'excluded' => array());
    protected $m_packages = array('included' => array(), 'excluded' => array());
    protected $m_scripts = array('install' => false, 'update' => false, 'remove' => false);
}
