<?php

		if (isset($_GET['cart'])) {
   		 switch ($_GET['cart']) {
       		 case 'add':
            	$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
            	echo json_encode(['code' => 'OK', 'answer' => 'Error product']);
            	break;
    	 }
		}