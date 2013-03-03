<?php
$t = time();
if($placeholder) $modx->setPlaceholder($placeholder,$t);
return $t;