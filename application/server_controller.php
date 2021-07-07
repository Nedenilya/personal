<?php
try{
        echo ' 1 ';
        $db = mysqli_connect('nedenilya.beget.tech', 'nedenilya_pers', 'Personal2', 'nedenilya_pers');
    
        $query = 'select * from admins where email='.$_POST['email'].' and phone='.$_POST['phone'];
        $result = mysqli_query($db, $query);
    	var_dump($_POST);
    	if($result)
    	{
    	    $row = mysqli_fetch_array($result);
    	    echo 'Hello admin, '.$row['name'];
    	}
    	
}catch (Exception $e) {
    echo $e->getMessage();
}
    
?>