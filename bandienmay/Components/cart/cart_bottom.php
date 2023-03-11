<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
    <div class="popular">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Danh mục sản phẩm</h3>
        <!-- //tittle heading -->
        <div class="row">
            <!-- product left -->
            <!-- <div class="agileinfo-ads-display col-lg-9"> -->
            <div class="wrapper">
                <?php
                $sql_cate_home = mysqli_query($con, "SELECT * FROM tbl_category ORDER BY category_id ASC  LIMIT 1");
                while ($row_cate_home = mysqli_fetch_array($sql_cate_home)) {
                    $id_category = $row_cate_home['category_id'];
                ?>
                <!-- first section -->
                <div class=" px-sm-4 px-3 py-sm-5  py-3 mb-4">
                    <h3 class="heading-tittle text-center font-italic">

                        <div class="row">
                            <?php
                                $sql_product = mysqli_query($con, "SELECT * FROM tbl_sanpham ORDER BY sanpham_id ASC  ");
                                while ($row_sanpham = mysqli_fetch_array($sql_product)) {
                                    if ($row_sanpham['category_id'] == $id_category) {
                                ?>
                            <div class="p-2 shadow bg-body overflow-hidden"
                                style="    margin-left: 2pc; margin-bottom: 3pc;   width: 16pc;border-radius: 1pc;">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <img src="images/<?php echo $row_sanpham['sanpham_image'] ?>" alt="">
                                        <ul class="product-links">
                                            <li>
                                                <span data-tip="Add to wishlist"><i class="far fa-heart"></i></span>
                                            </li>
                                            <li>
                                                <a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"><span
                                                        data-tip="Quick view">
                                                        <i class="fas fa-eye" style="color: '#fff'"></i></span></a>

                                            </li>
                                            <li>
                                                <span data-tip="Compare"><i class="fas fa-random"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item-info-product text-center border-top mt-4">
                                        <h4 class="pt-1">
                                            <a
                                                href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
                                        </h4>
                                        <div class="info-product-price my-2">
                                            <span
                                                class="item_price"><?php echo number_format($row_sanpham['sanpham_giakhuyenmai']) . 'vnđ' ?></span>
                                            <del><?php echo number_format($row_sanpham['sanpham_gia']) . 'vnđ' ?></del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="?quanly=giohang" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="tensanpham"
                                                        value="<?php echo $row_sanpham['sanpham_name'] ?>" />
                                                    <input type="hidden" name="sanpham_id"
                                                        value="<?php echo $row_sanpham['sanpham_id'] ?>" />
                                                    <input type="hidden" name="giasanpham"
                                                        value="<?php echo $row_sanpham['sanpham_gia'] ?>" />
                                                    <input type="hidden" name="hinhanh"
                                                        value="<?php echo $row_sanpham['sanpham_image'] ?>" />
                                                    <input type="hidden" name="soluong" value="1" />
                                                    <input type="submit" name="themgiohang" value="Thêm giỏ hàng"
                                                        class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                }
                                ?>
                        </div>
                </div>
                <!-- //first section -->
                <?php
                }
                ?>

            </div>
            <!-- </div> -->
            <!-- //product left -->

            <!-- product right -->

        </div>
        <!-- //top products -->