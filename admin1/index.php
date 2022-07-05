<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/tintuc.php";
include "../model/cart.php";
include "../model/gopy.php";
include "../model/tongquan.php";
include "./header.php";
$dm=null;
//controller
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        //danhmuc
        case 'tmdanhmuc':
            //kiểm tra xem người dùng có click vào nút gửi hay không?
            if(isset($_POST['gui'])&&($_POST['gui'])){           
            $tenloai=$_POST['tenloai'];
            insert_danhmuc($tenloai);
                $thongbao="Thêm thành công";
            }
            include "danhmuc/themmoi.php";
            break;
        case 'dsdanhmuc':
            $listdm = loadall_danhmuc();
            include "danhmuc/danhsach.php";
            break;
        case 'xoadm':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdm = loadall_danhmuc();
            include "danhmuc/danhsach.php";
            break;
        case 'suadm':
            if (isset($_GET['id'])&&($_GET['id']>0)){
                $dm=loadone_danhmuc($_GET['id']);
            }
            $listdm = loadall_danhmuc();
            include "danhmuc/capnhat.php";
            break;
        case 'cndanhmuc':
            if(isset($_POST['update'])&&($_POST['update'])){
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao = 'Cập nhật thành công';
            }
            $listdm=loadall_danhmuc();
            include "danhmuc/capnhat.php";
            break;
        //sản phẩm
        case 'dstsp':
            if (isset($_POST['gui'])&&($_POST['gui'])) {
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['tongquat'];
                    $date=date('d/m/Y');
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    // $mota=$_POST['mota'];
                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm,$date);
                    $thongbao = 'Thêm thành công';
            }
            $listdm=loadall_danhmuc();
            include "sanpham/themmoi.php";
            break;
        case 'dssp':
            // $listdm=loadall_danhmuc();
            $listsp=loadall_sanpham();
            include "sanpham/danhsach.php";
            break;
        case 'xoasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sanpham($_GET['id']);
            }
            $listsp=loadall_sanpham();
            include "sanpham/danhsach.php";
            break;
        case 'suasp':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                $sp=loadone_sanpham($_GET['id']);
            }
            $listdm=loadall_danhmuc();
            include "sanpham/capnhat.php";
            break;
        case 'cnsp':
            if(isset($_POST['gui'])&&($_POST['gui'])){
                $id=$_POST['id'];
                $category_id=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                    // echo "Sorry, there was an error uploading your file.";
                    }
                update_sanpham($id,$category_id,$tensp,$giasp,$mota,$hinh);
                $thongbao = 'Cập nhật thành công';
            }
            $listdm=loadall_danhmuc();
            $listsp=loadall_sanpham('',0);
            include "sanpham/danhsach.php";
            break;
        //taikhoan
        case 'dangky':
            if(isset($_POST['save'])&&($_POST['save'])){
                $user=$_POST['username'];
                $fullname=$_POST['fullname'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $address=$_POST['address'];
                insert_taikhoan($user,$pass,$email,$sdt,$address,$fullname);
                $thongbao = 'Đăng ký thành công';
                include 'taikhoan/dangky.php';
            }else {
                include 'taikhoan/dangky.php';
            }
            break;
        case 'dangnhap':
            if(isset($_POST['save'])&&($_POST['save'])){
                $user=$_POST['username'];
                $pass=$_POST['pass'];
                $checkuser=checkuser($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user'] = $checkuser;
                    echo '<script>window.location="index.php "</script>';
                }   
            }else {
            }
            include 'taikhoan/dangnhap.php';
            break; 
        case 'dangxuat':
            session_destroy();
            echo '<script>window.location="index.php "</script>';
            break;   
        //thanhvien
        case 'themtv':
            if(isset($_POST['gui'])&&($_POST['gui'])){ 
                $fullname=$_POST['fullname'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $address=$_POST['address'];
                $chucvu=$_POST['chucvu'];
                $role=$_POST['role'];
                insert_thanhvien($fullname,$email,$sdt,$address,$chucvu,$role);
                $thongbao = 'Thêm thành công';
            }
            include "khachhang/themtv.php";
            break;
         case 'dstv':
             $dstv=loadall_thanhvien();
             include "khachhang/danhsach.php";
             break;
        case 'xoatv':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_thanhvien($_GET['id']);
            }
            $dstv=loadall_thanhvien();
            include "khachhang/danhsach.php";
            break;
        case 'suatv':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                $tv=loadone_thanhvien($_GET['id']);
            }
            $dstv=loadall_thanhvien();
            include "khachhang/capnhat.php";
            break;
        case 'cntv':
             if(isset($_POST['gui'])&&($_POST['gui'])){
                 $id=$_POST['id'];
                 $fullname=$_POST['fullname'];
                 $email=$_POST['email'];
                 $address=$_POST['address'];
                 $sdt=$_POST['sdt'];
                 $chucvu=$_POST['chucvu'];
                 $role=$_POST['role'];
                 update_thanhvien($id,$fullname,$email,$address,$sdt,$chucvu,$role);
             }
            $dstv=loadall_thanhvien();
            include "khachhang/danhsach.php";
            break;
            //khachhang
         case 'dskh':
             $dskh=loadall_khachhang();
             include "khachhang/dskhachhang.php";
             break; 
        case 'xoakh':
            if(isset($_GET['ma'])&&($_GET['ma']>0)){
                delete_taikhoan($_GET['ma']);
            }
            $dskh=loadall_khachhang();
            include "khachhang/dskhachhang.php";
            break;
        //bình luận  
        case 'binhluan':
            $listbinhluan=loadall_binhluan(0);
            include "binhluan/danhsach.php";
            break;
        case 'xoabl':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_binhluan($_GET['id']);
            }
            $listbinhluan=loadall_binhluan('',0);
            include "binhluan/danhsach.php";
            break;   
        //đơn hàng
        case 'donhang':
            $listbill=loadall_bill();
            include "donhang/danhsach.php";
            break;
        case 'xoabill':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_bill($_GET['id']);
            }
            $listbill=loadall_bill(0);
            include "donhang/danhsach.php";
            break;
        case 'suabill':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                 $bill=loadone_bill($_GET['id']);
             }
             $listbill=loadall_bill(0);
            include "donhang/capnhat.php";
            break;
         case 'cnbill':
             if(isset($_POST['update'])&&($_POST['update'])){
                 $id=$_POST['id'];
                 $iduser=$_POST['iduser'];
                 $fullname=$_POST['kh'];
                 $pttt=$_POST['pttt'];
                 $note=$_POST['ghichu'];
                 $address=$_POST['diachi'];
                 $order_date=$_POST['daymua'];
                 $delivery_date=$_POST['daygiao'];
                 $status=$_POST['trangthai'];
                 $total_money=$_POST['tongtien'];
                 update_bill($id,$iduser,$fullname,$pttt,$note,$order_date,$delivery_date,$status,$total_money);
                 $thongbao = 'Cập nhật thành công';
             }
             $listbill=loadall_bill(0);
             include "donhang/danhsach.php";
             break;
        //tintuc
        case 'tintuc':
            //kiểm tra xem người dùng có click vào nút gửi hay không?
            if(isset($_POST['gui'])&&($_POST['gui'])){
                $id_tv=$_POST['id_tv'];
                $name=$_POST['tenbv'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $day=date('h:i:sa d/m/Y');
                $img=$_FILES['hinh']['name'];
                $mota=$_POST['tongquat'];
                $chitiet=$_POST['chitiet'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                    // echo "Sorry, there was an error uploading your file.";
                    }        
                insert_tintuc($id_tv,$name,$img,$mota,$chitiet,$day);
                     $thongbao="Thêm thành công";
                }
            $dstv=loadall_thanhvien();
            include 'tintuc/themmoi.php';
            break;
        case 'dstintuc':
            $listnews=loadall_tintuc();
            include 'tintuc/danhsach1.php';
            break;
        case 'xoabv':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_tintuc($_GET['id']);
            }
            $listnews=loadall_tintuc();
            include 'tintuc/danhsach1.php';
            break; 
        case 'suabv':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $bv=loadone_tintuc($_GET['id']);
            }
            $dstv=loadall_thanhvien();
            $listnews=loadall_tintuc();
            include 'tintuc/capnhat.php';
            break;
        case 'cntt':
            if(isset($_POST['gui'])&&($_POST['gui'])){
                $id=$_POST['id'];
                $id_tv=$_POST['id_tv'];
                $name=$_POST['tenbv'];
                $img=$_FILES['hinh']['name'];
                $mota=$_POST['tongquat'];
                $chitiet=$_POST['chitiet'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    } else {
                    }         
                    update_tintuc($id,$id_tv,$name,$img,$mota,$chitiet);
                     $thongbao="Cập nhật thành công";
                }
            $dstv=loadall_thanhvien();
            $listnews=loadall_tintuc("",0);
            include 'tintuc/danhsach1.php';
            break; 
        //lienhe
        case 'lienhe':
            $dslh=loadall_lienhe();
            include 'lienhe/danhsach.php';
            break;
        case 'xoalh':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_lienhe($_GET['id']);
            }
            $dslh=loadall_lienhe();
            include 'lienhe/danhsach.php';
            break;
        case 'tongquan':
            $donhang=soluongdonhang();
            $loaihang=soluongloaihang();
            $sanpham=soluongsanpham();
            $khachhang=soluongkhachhang();
            $listhongke=loadall_thongke();
            include 'tongquan/tongquan1.php';
            break;
        default:
            include "./home.php";
            break;
    }
}
else {
    include "./home.php";
}
include "./footer.php";
?>