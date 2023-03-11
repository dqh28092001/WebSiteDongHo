<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = '';
}
$sql_chitiet = mysqli_query($con, "SELECT * FROM tbl_sanpham WHERE sanpham_id='$id'");
?>
<!-- page -->

<div class="container">
    <ul class="w3_short" style="margin-top: 4pc;">
        <li>
            <a href="index.php" style="font-size: 20px;">Trang chủ</a>
            <i>|</i>
        </li>
        <li style="font-size: 20px;">Product Details</li>
    </ul>
</div>


<!-- //page -->
<?php
while ($row_chitiet = mysqli_fetch_array($sql_chitiet)) {
?>
<!-- Single Page -->
<div class="container">
    <div class="card" style="background-color: #f7f7f7;">
        <form action="#.php" method="post">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <ul class="slides">
                                <li data-thumb="images/<?php echo $row_chitiet['sanpham_image'] ?>">
                                    <div class="thumb-image">
                                        <img src="images/<?php echo $row_chitiet['sanpham_image'] ?>"
                                            data-imagezoom="true" class="img-fluid" alt="" style="width: 30pc;">
                                    </div>
                                </li>


                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="details col-md-6" style="margin-top: 3pc;">
                        <h3 class="mb-3" style="text-transform: UPPERCASE;font-weight: bold;">
                            <?php echo $row_chitiet['sanpham_name'] ?></h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="far fa-star"></span>
                                <span class="far fa-star"></span>
                            </div>
                            <p style="text-transform: UPPERCASE;
                                font-weight: bold;"><?php echo $row_chitiet['sanpham_chitiet'] ?></p><br><br>
                        </div>

                        <p style="text-transform: UPPERCASE;
                                font-weight: bold;"><?php echo $row_chitiet['sanpham_mota'] ?></p>
                        <p class=" mb-3">
                            <span
                                class="item_price"><?php echo number_format($row_chitiet['sanpham_giakhuyenmai']) . 'vnđ' ?></span>
                            <del
                                class="mx-2 font-weight-light"><?php echo number_format($row_chitiet['sanpham_gia']) . 'vnđ' ?></del>
                            <label>Miễn phí vận chuyển</label>
                        </p>

                        <input type="hidden" id="name<?php echo $rowProDetail['id'] ?>"
                            value='<?php echo $rowProDetail['name'] ?>'>
                        <input type="hidden" id="price<?php echo $rowProDetail['id'] ?>"
                            value='<?php echo $rowProDetail['price'] ?>'>

                        <input type="hidden" class="form-control" id="quantity<?php echo $rowProDetail['id'] ?>"
                            value="1" min="1" max="10" width="50%">

                        <div>


                        </div>
        </form>
        <div class="occasion-cart">
            <div class="  item_add single-item hvr-outline-out">
                <form action="?quanly=giohang" method="post">
                    <fieldset>
                        <input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['sanpham_name'] ?>" />
                        <input type="hidden" name="sanpham_id" value="<?php echo $row_chitiet['sanpham_id'] ?>" />
                        <input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['sanpham_gia'] ?>" />
                        <input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['sanpham_image'] ?>" />
                        <input type="hidden" name="soluong" value="1" />
                        <input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" style="padding: 10px 3pc;
    background-color: #cb8484;
    color: #fff;
    border: none;
    border-radius: 1pc;" />
                        <button class="like btn btn-default mt-4" type="button" style="    background-color: #cb8484;
    margin-bottom: 30px;;"><span class="fa fa-heart"></span></button>
                    </fieldset>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- //Single Page -->
<?php
}
?>