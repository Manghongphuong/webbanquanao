<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm,$date){
    $sql="insert into product(title,price,img,mota,category_id,updated_at ) values('$tensp','$giasp','$hinh','$mota','$iddm','$date')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from product where id=".$id;
    pdo_execute($sql);
}
 function loadall_sanpham_home(){
     $sql="select * from product where 1 order by id desc limit 0,9 ";
     $listsp=pdo_query($sql);
     return $listsp;
 }

function loadall_sanpham(){
    $sql="select * from product "; //order by id desc
    $listsp=pdo_query($sql);
    return $listsp;
}
function loadall1_sanpham($kyw,$iddm=0){
    $sql="select * from product where 1";
    if($kyw!=""){
        $sql.=" and title like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and category_id ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsp=pdo_query($sql);
    return $listsp;
}
function loadone_sanpham($id){
    $sql="select * from product where id=".$_GET['id'];
    $sp=pdo_query_one($sql);
    return $sp; 
}

function update_sanpham($id,$category_id,$tensp,$giasp,$mota,$hinh){

    if($hinh!="")
    $sql="update product set category_id ='".$category_id."', title='".$tensp."', price='".$giasp."', mota='".$mota."', img='".$hinh."' where id=".$id;
    else
    $sql="update product set category_id ='".$category_id."', title='".$tensp."', price='".$giasp."', mota='".$mota."' where id=".$id;
    pdo_execute($sql);
}
//tên sản phẩm theo danh mục
function load_ten_spdm($iddm){
    if ($iddm>0) {
        $sql="select * from category where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    } 
}
// function load_sanpham_cungloai($id,$iddm){
//     $sql="select * from sanpham where iddm=".$iddm." AND id<>".$id;
//     $listsp=pdo_query($sql);
//     return $listsp;
// }
// function loadall_sanpham_top10(){
//     $sql="select * from product where 1 order by view desc limit 0,10";
//     $listsp=pdo_query($sql);
//     return $listsp;
// }
?>