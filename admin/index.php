<?php
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
//controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiểm tra người dùng có lick vào nút add hay ko
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {

                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = 'Thêm thành công';
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdm = loadall();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['$id']);
            }

            $listdm = loadall();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone($_GET[$id]);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {

                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($tenloai, $id);
                $thongbao = 'Update thành công';
            }
            $listdm = loadall();
            include "danhmuc/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


include "footer.php";
