<?php
/**
 * @package cachebuster
 * @subpackage controllers
 */
require_once dirname(__FILE__) . '/model/cachebuster/cachebuster.class.php';
abstract class CachebusterManagerController extends modExtraManagerController {
    /** @var Cachebuster $cachebuster */
    public $cachebuster;
    public function initialize() {
        $this->cachebuster = new Cachebuster($this->modx);

        $this->addCss($this->cachebuster->config['cssUrl'].'mgr.css');
        $this->addJavascript($this->cachebuster->config['jsUrl'].'mgr/cachebuster.js');
        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            Cachebuster.config = '.$this->modx->toJSON($this->cachebuster->config).';
        });
        </script>');
        return parent::initialize();
    }
    public function getLanguageTopics() {
        return array('cachebuster:default');
    }
    public function checkPermissions() { return true;}
}
/**
 * @package cachebuster
 * @subpackage controllers
 */
class IndexManagerController extends CachebusterManagerController {
    public static function getDefaultController() { return 'home'; }
}