<?php
    session_start();
    include './model/pdo.php';
    include 'view/header.php';
    include './model/taikhoan.php';
    include './model/danhmuc.php';
    include './model/sanpham.php';
    include './model/cart.php';
    include './model/global.php';
    include './model/tintuc.php';
    include './model/gopy.php';
    if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
    $dsdm=loadall_danhmuc();
    $sptc=loadall_sanpham_home();
    $spnew=loadall_sanpham();
    $tintuc=loadall_tintuc();
    if(isset($_GET['act'])&&($_GET['act']!='')){
        $act=$_GET['act'];
        switch ($act){
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $user=$_POST['username'];
                    $fullname=$_POST['fullname'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $address=$_POST['address'];
                    insert_taikhoan($user,$pass,$email,$sdt,$address,$fullname);
                    $thongbao = 'Đăng ký thành công';
                    include 'view/login.php';
                }else {
                    include 'view/login.php';
                }
                break;
            case 'dangnhap':
                 if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                     $user=$_POST['username'];
                     $pass=$_POST['pass'];
                     $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)){
                         $_SESSION['user'] = $checkuser;
                         echo '<script>window.location="index.php "</script>';
                    }else{
                       //  $thongbao="Tài khoản không tồn tại vui lòng kiểm tra hoặc đăng ký tài khoản"
                       echo " 
                       Tài khoản không chính xác vui lòng kiểm tra hoặc đăng ký tài khoản ";
                    }
                 }
                 include 'view/login.php';
                 break;
            case 'dangxuat':
                session_destroy();
                echo '<script>window.location="index.php "</script>';
                break;
            case 'danhmuc':
                if(isset($_POST['timkiem'])&&($_POST['timkiem']!="")){
                    $kyw=$_POST['timkiem'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }
                else {
                    $iddm=0;
                }
                $dssp=loadall1_sanpham($kyw,$iddm);
                $tendm=load_ten_spdm($iddm);
                include 'view/sanphamdm.php';
                break;
            case 'sanphamct':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    include 'view/product-details.php';
                }
                else {
                    include 'view/product-details.php';
                }
                break;
            case 'addcart':
                $tamtinh=0;
                $tong=0;
                $phi=0;
                if(isset($_POST['addcart'])&&($_POST['addcart'])){
                    $id=$_POST['id'];
                    $title=$_POST['tensp'];
                    $hinh=$_POST['img'];
                    $price=$_POST['giasp'];
                    $num=1;
                    $thanhtien=$num*$price;
                    $tamtinh+=$thanhtien;
                    $giohang=[$id,$title,$hinh,$price,$num,$thanhtien,$tamtinh];
                    array_push($_SESSION['cart'],$giohang);
                }
                include 'view/cart.php';
                break;
            case 'xoacart' :
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['cart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['cart']=[];
                }
                echo '<script>window.location="index.php?act=addcart"</script>';
                break;
            case 'muangay':
                $tamtinh=0;
                $tong=0;
                $phi=0;
                include "view/thanhtoan.php";
                break;
            case 'bill':
                if(isset($_POST['dathang'])&&($_POST['dathang'])){
                     if(isset($_SESSION['user'])) $user_id=$_SESSION['user']['ma'];
                     else $id=0;
                    $fullname=$_POST['fullname'];
                    // $email=$_POST['email'];
                    $address=$_POST['address'];   
                    $phone_number=$_POST['phone_number'];
                    $pttt=$_POST['pttt'];
                    $note=$_POST['ghichu'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $order_date=date('d/m/Y');
                    $total_money=tonghang();
                    $order_id = insert_bill($user_id,$fullname,$address,$phone_number,$pttt,$note,$order_date,$total_money);
                    
                    foreach ($_SESSION['cart'] as $mycart) {
                        insert_cart($_SESSION['user']['ma'],$order_id,$mycart[0],$mycart[1],$mycart[2],$mycart[3],$mycart[4],$mycart[5]);
                    }
                    // //xóa SS cart
                     $_SESSION['cart']=[];
                }  

                $bill= loadone_bill($order_id);
                $billct= loadall_cart($order_id);
                include 'view/hoadon.php';
                break;
            case 'donhang':
                $listbill=loadall_bill($_SESSION['user']['ma']);
                include 'view/donhang.php';
                break;
            case 'shop':
                include 'view/shop.php';
                break;
            case 'tintuc':
                include 'view/tintuc.php';
                break;
            case 'docthem':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $onebv=loadone_tintuc($id);
                    extract($onebv);
                    include 'view/docthem.php';
                }
                else {
                    include 'view/docthem.php';
                }
                break;
            case 'lienhe':
                if(isset($_POST['gui'])&&($_POST['gui'])){
                    $lastname=$_POST['lastname'];
                    $firstname=$_POST['firstname'];
                    $email=$_POST['email'];
                    $phonenum=$_POST['phonenum'];
                    $subject=$_POST['subject'];
                    $note=$_POST['message'];
                    insert_lienhe($lastname,$firstname,$email,$phonenum,$subject,$note);
                    $thongbao = 'Chúc mừng bạn gửi thành công';
                    include 'view/lienhe.php';
                }else {
                    include 'view/lienhe.php';
                }
                break;
            default:
                include 'view/home.php';
                break;
        
        }
    }
    else{
        include 'view/home.php';
    }
    include 'view/footer.php';
?>