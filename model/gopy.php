<?php
function insert_lienhe($lastname,$firstname,$email,$phonenum,$subject,$note){
    $sql="insert into feedback(lastname,firstname,email,phone_number,subject_name,note) values('$lastname','$firstname','$email','$phonenum','$subject','$note')";
            pdo_execute($sql);
}
function loadall_lienhe(){
    $sql="select * from feedback"; //order by id desc
    $dslh=pdo_query($sql);
    return $dslh;
}
function delete_lienhe($id){
    $sql="delete from feedback where id=".$id;
    pdo_execute($sql);
}
?>