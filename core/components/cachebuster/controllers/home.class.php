<?php
/**
 * @package cachebuster
 * @subpackage controllers
 */
class CachebusterHomeManagerController extends CachebusterManagerController {
    public function process(array $scriptProperties = array()) {

    }
    public function getPageTitle() { return $this->modx->lexicon('cachebuster'); }
    public function loadCustomCssJs() {
        $this->addJavascript($this->cachebuster->config['jsUrl'].'mgr/widgets/cachebuster.grid.js');
        $this->addJavascript($this->cachebuster->config['jsUrl'].'mgr/widgets/home.panel.js');
        $this->addLastJavascript($this->cachebuster->config['jsUrl'].'mgr/sections/index.js');
    }
    public function getTemplateFile() { return $this->cachebuster->config['templatesPath'].'home.tpl'; }
}