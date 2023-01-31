<div class="row">
    <div class="row form_title">
        <h1>Danh sách loại hàng hóa</h1>
    </div>
    <div class="row form_content ">
        <div class="row mb10 form_dsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td>
                        <a href="' . $suadm . '"><input type="button" value="Sửa"></a>
                        <a href="' . $xoadm . '"><input type="button" value="xóa"></a>
                    </td>
                </tr>';
                }
                ?>


            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=listdm"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>