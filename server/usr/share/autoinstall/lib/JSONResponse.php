<?php
/**
 * Description of response
 *
 * @author phochs
 */
class JSONResponse {
    protected $m_version;
    protected $m_host;
    protected $m_code = 0;
    protected $m_errorMessage = '';
    protected $m_software;
    
    public function __construct() {
        $this->m_version = VERSION;
        $this->m_host = gethostname();
    }
    
    protected function display() {
        $output = ['version' => $this->m_version, 'host' => $this->m_host, 'code' => $this->m_code];
        if($this->m_code == 0) {
            $output['software'] = $this->m_software->asArray();
        } else {
            $output['message'] = $this->m_errorMessage;
        }
        
        echo json_encode($output);
    }
    
    public function fail($p_message=null) {
        $this->m_code = 1;
        if (!empty($p_message)) {
            $this->m_errorMessage = $p_message;
        }
        $this->display();
    }
}
