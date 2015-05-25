<?php
if (!isConnect('admin')) {
    throw new Exception('{{401 - Accès non autorisé}}');
 }
 sendVarToJS('eqType', 'mail');
 ?>