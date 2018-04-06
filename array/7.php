<?php
	function get_members(){
		return ['abc','def','ghi'];
	}
	$members = get_members();

	for($i = 0 ; $i < count($members); $i++){
		echo ucfirst($members[$i]).'<br/>';
	}
?>