<?php
/**
 * phpThumbOf
 *
 * Copyright 2012-2013 by JP DeVries <mail@devries.jp>
 *
 * phpThumbOf is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * phpThumbOf is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package cb
 */
/**
 * System Settings
 *
 * @var modX $modx
 * @package cb
 * @subpackage build
 */
$settings = array();

$settings['cb.cachebuster']= $modx->newObject('modSystemSetting');
$settings['cb.cachebuster']->fromArray(array(
    'key' => 'cb.cachebust',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'cachebuster',
    'area' => 'cache',
),'',true,true);

$settings['cb.site_ver']= $modx->newObject('modSystemSetting');
$settings['cb.site_ver']->fromArray(array(
    'key' => 'cb.site_ver',
    'value' => '0.1',
    'xtype' => 'textfield',
    'namespace' => 'cachebuster',
    'area' => 'cache',
),'',true,true);

return $settings;