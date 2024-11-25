d<!DOCTYPE html> 

<?php

dump("hi");
dd($creditClick);
?>
<html>
 <frameset rows="50,*"> 
	<frame src="http://localhost:8000/frames/earn-credits-top-frame/{{ $creditClick->key }}">
	<frame src="http://listjoe.com"> 
</frameset>
 </html>
