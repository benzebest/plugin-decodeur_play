<?php
if (!isConnect('admin')) {
    throw new Exception('{{401 - Acc�s non autoris�}}');
 }
 sendVarToJS('eqType', 'mail');
 ?>