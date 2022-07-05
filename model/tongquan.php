<?php
    function soluongdonhang(){
        $sql = "select count(*) as SoLuongdh from `orders`";
        $donhang=pdo_query($sql);
        return $donhang;
    }
     function soluongloaihang(){
         $sql = "select count(*) as SoLuonglh from `category`";
         $loaihang=pdo_query($sql);
         return $loaihang;
     }
     function soluongsanpham(){
         $sql = "select count(*) as SoLuongsp from `product`";
         $sanpham=pdo_query($sql);
         return $sanpham;
     }
     function soluongkhachhang(){
         $sql = "select count(*) as SoLuongkh from `user`";
         $khachhang=pdo_query($sql);
         return $khachhang;
     }
     function loadall_thongke(){
         $sql="select category.id as loaihang, category.name as tenloaihang, count(product.id) as countsp, min(product.price) as minprice, max(product.price) as maxprice, avg(product.price) as avgprice";
         $sql.=" from product left join category on category.id=product.category_id";
         $sql.= " group by category.id order by category.id desc";
         $listhongke=pdo_query($sql);
         return $listhongke;
      }
    //   function bieudo_donhang(){
    //     $sql = "SELECT status, COUNT(status) AS size_status FROM orders GROUP BY status";
    //     $trangthaidh=pdo_query($sql);
    //     return $trangthaidh;
    //  }
    //  function ttdh($n){
    //     switch ($n) {
    //         case '0':
    //             $tt="Đơn hàng mới";
    //             break;
    //        case '1':
    //             $tt="Chưa xử lý";
    //             break;
    //         case '2':
    //             $tt="Đang giao hàng";
    //             break;
    //         case '3':
    //              $tt="Đã giao hàng";
    //               break;
            
    //         default:
    //            $tt="Đơn hàng mới";
    //             break;
    //     }
    //     return $tt;
    // }
?>