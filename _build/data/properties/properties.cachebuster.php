<?php
/**
 * @package cachebuster
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'param',
        'desc' => 'prop_cachebuster.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'cachebuster:properties',
    ),
    array(
        'name' => 'placeholder',
        'desc' => 'prop_cachebuster.placeholder',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'cachebuster:properties',
    ),
    array(
        'name' => 'site_ver',
        'desc' => 'prop_cachebuster.site_ver',
        'type' => 'textfield',
        'options' => '',
        'value' => 'cb.site_ver',
        'lexicon' => 'cachebuster:properties',
    ),
);
return $properties;