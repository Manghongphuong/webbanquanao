<?php
function insert_tintuc($id_tv,$name,$img,$mota,$chitiet,$day){
    $sql="insert into news(id_tv,name,img,mota,chitiet,day) values('$id_tv','$name','$img','$mota','$chitiet','$day')";
            pdo_execute($sql);
}
function loadall_tintuc(){
    $sql="select * from news "; //order by id desc
    $listnews=pdo_query($sql);
    return $listnews;
}
function nguoidang($n){
    switch ($n) {
        case '1':
            $tv="Mang Hồng Phương";
            break;
       case '2':
            $tv="Nguyễn Tấn Cường";
            break;
        case '3':
            $tv="Nguyễn Văn Thủy";
            break;
        default:
           $tv="Mang Hồng Phương";
            break;
    }
    return $tv;
}
function delete_tintuc($id){
    $sql="delete from news where id=".$id;
    pdo_execute($sql);
}
function loadone_tintuc($id){
    $sql="select * from news where id=".$_GET['id'];
    $bv=pdo_query_one($sql);
    return $bv; 
}
function update_tintuc($id,$id_tv,$name,$img,$mota,$chitiet){
    if($img!="")
    $sql="update news set id_tv ='".$id_tv."', name='".$name."', img='".$img."', mota='".$mota."', chitiet='".$chitiet."' where id=".$id;
    else
    $sql="update news set id_tv ='".$id_tv."', name='".$name."', mota='".$mota."', chitiet='".$chitiet."' where id=".$id;
    pdo_execute($sql);
}
?>