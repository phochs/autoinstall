<?php
    /*
     * Program Flow:
     * - Get the configuration
     * - Check the listen addresses against the client IP address
     * - Check what response is needed
     * - If the request is a software list for the client:
     *  - Get the client in the main configuration
     *  - Get the groups the client is a member of
     *  - Parse all software references info a list with included and excluded software
     *  - Get the details for each software reference
     *  - Create a JSON string for the response
     * - If the request is to get a script:
     *  - Get the details for the specified software
     *  - Get the location of the script
     *  - Return the contents of the file
     */
    define('VERSION', '0.1dev');
    require('../include.php');
    $response = array();
    $response['version'] = '0.1dev';
    $response['host'] = 'NYI';
    
    $globalSettings = Spyc::YAMLLoad($config['configPath'].'\config\settings.yaml');
    var_dump($globalSettings);