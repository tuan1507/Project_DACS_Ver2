<?php
include("../model/pdo.php");
include("../model/danhmucsanpham.php");
include("../model/sanpham.php");
include("header.php");

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'add_dmsp':
            if(isset($_POST['themdanhmuc'])&&($_POST['themdanhmuc'])) {
                $tendanhmuc=$_POST['tendanhmuc'];
                $motadanhmuc=$_POST['motadanhmuc'];
                insert_danhmuc($tendanhmuc,$motadanhmuc);
            }
            $listdanhmuc = loadall_danhmuc();
            include("danhmucsanpham/add_dmsp.php");
            break;
        case "danhsachdm":
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

                //------------------------ controller san pham ----------------------------
        case "add_sp":
            if(isset($_POST['themsanpham'])&&($_POST['themsanpham'])) {
                $tensanpham=$_POST['tensanpham'];
                $soluongsanpham=$_POST['soluongsanpham'];
                $giasanpham=$_POST['giasanpham'];
                $giasanphamkm=$_POST['giasanphamkm'];
                $filename=$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $motasanpham=$_POST['motasanpham'];
                $iddanhmuc=$_POST['iddanhmuc'];

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  }
                insert_sanpham($tensanpham,$soluongsanpham,$giasanpham,$giasanphamkm,$filename,$motasanpham,$iddanhmuc);
            }
            $listdanhmuc =loadall_danhmuc();
            $listsanpham =loadall_sanpham();
            include("sanpham/add_sanpham.php");
            break;
        case "xoasp":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
            }
            $listsanpham= loadall_sanpham();
            include("sanpham/add_sanpham.php");
            break;
        case "suasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham();
                $listdanhmuc = loadall_danhmuc();
                include("sanpham/update_sanpham.php");
                break;
        case "capnhatsanpham":
            if(isset($_POST['capnhatsanpham'])&&($_POST['capnhatsanpham'])) {

                $tensanpham=$_POST['tensanpham'];
                $soluongsanpham=$_POST['soluongsanpham'];
                $giasanpham=$_POST['giasanpham'];
                $giasanphamkm=$_POST['giasanphamkm'];
                $filename=$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $motasanpham=$_POST['motasanpham'];
                $iddanhmuc=$_POST['iddanhmuc'];
                $idsanpham=$_POST['id'];
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  }
            }
            update_sanpham($tensanpham,$soluongsanpham,$giasanpham,$giasanphamkm,$filename,$motasanpham,$iddanhmuc,$idsanpham);
            $listsanpham= loadall_sanpham();
            $listdanhmuc= loadall_danhmuc();
            $sanpham = loadone_sanpham($idsanpham);
            include("sanpham/add_sanpham.php");
            break;
    }
}
?>