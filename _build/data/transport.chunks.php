<?php
/**
 * @package polls
 * @subpackage build
 */
$chunks = array();

$chunks[1]= $modx->newObject('modChunk');
$chunks[1]->fromArray(array(
    'id' => 1,
    'name' => 'smartcache',
    'description' => 'Smart caching, loads fresh if cachebust System Setting is on',
    'snippet' => file_get_contents($sources['elements'].'chunks/smartcache.chunk.tpl'),
),'',true,true);
$properties = include $sources['data'].'properties/properties.cachebuster.php';
$chunks[1]->setProperties($properties);
unset($properties);

return $chunks;

