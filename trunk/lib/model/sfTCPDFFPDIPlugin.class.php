<?php

class sfTCPDFFPDI extends FPDI {

    private $_tplIdx = null;
    
    function Header() {
        if($this->_tplIdx !== null){
            $this->useTemplate($this->_tplIdx);
        }
    }

    public function setPdfBackground($path) {
        $this->setSourceFile($path);
        $this->_tplIdx = $this->importPage(1);
    }

    public function removeBackground() {
        $this->_tplIdx = null;
    }

    public function saveAsFile($savePath) {
        return $this->Output($savePath, 'F');
    }

}

?>
