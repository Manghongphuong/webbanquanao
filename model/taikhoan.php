<?php
function insert_taikhoan($user,$pass,$email,$sdt,$address,$fullname){
    $sql="insert into user(username,password,email,phone_number,address,fullname) values('$user','$pass','$email','$sdt','$address','$fullname')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql='SELECT * from user where username="'.$user.'" and password= "'.$pass.'" ';
    $sp=pdo_query_one($sql);
    return $sp; 
}
function loadall_khachhang(){
    $sql="select * from user "; //order by id desc
    $dskh=pdo_query($sql);
    return $dskh;
}
function delete_taikhoan($ma){
    $sql="delete from user where ma=".$ma;
    pdo_execute($sql);
}
function insert_thanhvien($fullname,$email,$sdt,$address,$chucvu,$role){
    $sql="insert into thanhvien(fullname,email,phone_number,address,chucvu,role_id) 
    values('$fullname','$email','$sdt','$address','$chucvu','$role')";
    pdo_execute($sql);
}
function loadall_thanhvien(){
    $sql="select * from thanhvien"; //order by id desc
    $dstv=pdo_query($sql);
    return $dstv;
}
function delete_thanhvien($id){
    $sql="delete from thanhvien where id=".$id;
    pdo_execute($sql);
}
function loadone_thanhvien($id){
    $sql="select * from thanhvien where id=".$_GET['id'];
    $tv=pdo_query_one($sql);
    return $tv; 
}
function update_thanhvien($id,$fullname,$email,$address,$sdt,$chucvu,$role){
    $sql="update thanhvien set fullname ='".$fullname."', email='".$email."', address='".$address."', phone_number='".$sdt."', chucvu='".$chucvu."', role_id='".$role."' where id=".$id;
    pdo_execute($sql);
}

//   function loadone_quenmk($email){
//     $sql="select * from taikhoan where email='".$email."' ";
//     $sp=pdo_query_one($sql);
//     return $sp; 
// }
// function update_taikhoan($id,$user,$hovaten,$pass,$email,$adress,$sdt){
//     $sql="update taikhoan set user='".$user."',hovaten='".$hovaten."' ,pass='".$pass."', email='".$email."', adress='".$adress."', sdt='".$sdt."' where id=".$id;
//     pdo_execute($sql);
// }
// function delete_taikhoan($id){
//     $sql="delete from taikhoan where id=".$id;
//     pdo_execute($sql);
// }
// //load all len admin tai khoan
//  function loadall_taikhoan(){
//      $sql="select * from user order by ma desc";
//      $listtaikhoan=pdo_query($sql);
//     return $listtaikhoan;
//  }
  ?> 