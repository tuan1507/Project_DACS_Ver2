<?php
include("../model/pdo.php");
include("../model/danhmucsanpham.php");
include("header.php");

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'add_dmsp':
            if(isset($_POST['themdanhmuc'])&&($_POST['themdanhmuc'])) {
                $tendanhmuc=$_POST['tendanhmuc'];
                $motadanhmuc=$_POST['motadanhmuc'];
                insert_danhmuc($tendanhmuc,$motadanhmuc);
                $thongbao = "them thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            include("danhmucsanpham/add_dmsp.php");
            break;
        case "xoadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc= loadall_danhmuc();
                include("danhmucsanpham/add_dmsp.php");
                break;
        case "suadm":
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $danhmuc = loadone_danhmuc($_GET['id']);
                    }
                    include("danhmucsanpham/update_dmsp.php");
                    break;
        case "capnhatdanhmuc":
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                        $tendanhmuc=$_POST['tendanhmuc'];
                        $motadanhmuc=$_POST['motadanhmuc'];
                        $iddanhmuc=$_POST['id'];
                        update_danhmuc($tendanhmuc,$motadanhmuc,$iddanhmuc);
                    }
                    $listdanhmuc= loadall_danhmuc();
                    include("danhmucsanpham/add_dmsp.php");
                    break;
    }
}
?>