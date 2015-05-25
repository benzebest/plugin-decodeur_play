<?php
/* 
  */

 require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';
include_file('core', 'authentification', 'php');
if (!isConnect()) {
    include_file('desktop', '404', 'php');
    die();
 }
 ?>
 <form class="form-horizontal">
	<fieldset>
		<div class="form-group">
			<label class="col-lg-2 control-label">Decodeur TV Play IP</label>
			<div class="col-lg-2">
				<input class="configKey form-control" data-l1key="decodeurAddr" />
			</div>
		</div>
	</fieldset>
 </form>