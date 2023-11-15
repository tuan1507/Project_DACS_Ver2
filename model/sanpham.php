<?php
function insert_sanpham($tensanpham,$soluongsanpham,$giasanpham,$giasanphamkm,$hinhanh,$motadanhmuc,$iddm){
    $sql = "INSERT INTO sanpham (ten_sanpham,soluong_sanpham,giasp,giasp_saukm,hinhanh_sanpham,mota_sanpham,id_danhmuc_sanpham)
                VALUE ('".$tensanpham."','".$soluongsanpham."','".$giasanpham."','".$giasanphamkm."','".$hinhanh."','".$motadanhmuc."','".$iddm."')";
    pdo_execute($sql);
}
function loadall_sanpham() {
    $sql = "SELECT * from sanpham ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function delete_sanpham($id) {
    $sql = "DELETE FROM sanpham WHERE id_sanpham=".$id;
    pdo_execute($sql);
}
function loadone_sanpham($id) {
    $sql = "SELECT * FROM sanpham WHERE id_sanpham=".$id;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
function   update_sanpham($tensanpham,$soluongsanpham,$giasanpham,$giasanphamkm,$filename,$motasanpham,$iddanhmuc,$id_sanpham) {
    $sql = "UPDATE sanpham SET ten_sanpham='".$tensanpham."', soluong_sanpham = '".$soluongsanpham."',giasp ='".$giasanpham."',
    giasp_saukm ='".$giasanphamkm."', hinhanh_sanpham ='".$filename."',mota_sanpham='".$motasanpham."',id_danhmuc_sanpham = '".$iddanhmuc."' where id_sanpham=".$id_sanpham;
                pdo_execute($sql);
}
?>