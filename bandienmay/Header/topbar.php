<?php
// session_destroy();
// unset('dangnhap');
if (isset($_POST['dangnhap_home'])) {
    $taikhoan = $_POST['email_login'];
    $matkhau = md5($_POST['password_login']);
    if ($taikhoan == '' || $matkhau == '') {
        echo '<script>alert("Làm ơn không để trống")</script>';
    } else {
        $sql_select_admin = mysqli_query($con, "SELECT * FROM tbl_khachhang WHERE email='$taikhoan' AND password='$matkhau' LIMIT 1");
        $count = mysqli_num_rows($sql_select_admin);
        $row_dangnhap = mysqli_fetch_array($sql_select_admin);
        if ($count > 0) {
            $_SESSION['dangnhap_home'] = $row_dangnhap['name'];
            $_SESSION['khachhang_id'] = $row_dangnhap['khachhang_id'];

            header('Location: index.php?quanly=giohang');
        } else {
            echo '<script>alert("Tài khoản mật khẩu sai")</script>';
        }
    }
} elseif (isset($_POST['dangky'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $note = $_POST['note'];
    $address = $_POST['address'];
    $giaohang = $_POST['giaohang'];

    $sql_khachhang = mysqli_query($con, "INSERT INTO tbl_khachhang(name,phone,email,address,note,giaohang,password) values ('$name','$phone','$email','$address','$note','$giaohang','$password')");
    $sql_select_khachhang = mysqli_query($con, "SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
    $row_khachhang = mysqli_fetch_array($sql_select_khachhang);
    $_SESSION['dangnhap_home'] = $name;
    $_SESSION['khachhang_id'] = $row_khachhang['khachhang_id'];

    header('Location:index.php?quanly=giohang');
}
?>










<div class='header'>
    <div class='header-top'>
        <div class='header-top-left'>

            <div class='htl-icon' style="margin-top: 7px;    display: flex;">
                <?php
                if (isset($_SESSION['dangnhap_home'])) {

                ?>
                    <li class="text-center " style="list-style: none;
    margin-left: 5pc;">
                        <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>" class="text-white">
                            <i class="fas fa-truck mr-2"></i>Xem đơn hàng : <?php echo $_SESSION['name']; ?></a>
                    </li>
                <?php
                }
                ?>
                <span class='htl-icon-left' style="color: #fff;">
                    <i class="fa-solid fa-location-dot" style="margin-right: 5px    ;"></i>
                    <span>319 - C16 Lý Thường Kiệt, P.15, Q.11, Tp.HCM</span>
                </span>

                <span class='htl-icon-right' style=" color: #fff;">
                    <i class="fa-solid fa-phone" style="margin-right: 10px;"></i>
                    <span class='htl-icon-right-num'>033 4630 884</span>
                </span>
            </div>
        </div>
        <div class='header-top-right'>

            <div class="dropdown" style="float: right;
                                        margin-right: 6pc;
                                        ">
                <a href="Components/Login/login.php" class="btn btn-success" style="background-color: #3333;
    border: none;
    font-weight: 700;
    font-size: 16px;">Login
                    <i class="bi bi-box-arrow-left"></i> </a>
                <button type="button" class="btn btn-danger" style="background-color: #3333;
    border: none;
    font-weight: 700;
    font-size: 16px;"><a href="Components/Login/register.php" style="color:#fff;text-decoration:none ;">Register
                        <i class="bi bi-box-arrow-in-right"></i>
                    </a></button>
            </div>
        </div>
    </div>
    <div class='header-center'>

        <div class='hct-img'>
            <a href="index.php"><img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png" alt="" /></a>
        </div>

        <div class="col-5 agileits_search" style="margin-top: 1pc;">
            <form class="form-inline" action="index.php?quanly=timkiem" method="POST">
                <input class="form-control mr-sm-2" name="search_product" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" required>
                <button class="btn my-2 my-sm-0 " style="padding: 6px 0;
    border-radius: 7px;
    background-color: #a95959;
    color: #fff;" name="search_button" type="submit">Tìm kiếm</button>
            </form>

        </div>
        <div class='hct-icon'>

            <div class='hct-icon-cart' style="margin-right: 2pc;">
                <span>
                    <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                        <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                            <form action="#" method="post" class="last">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">

                                <a href="index.php?quanly=giohang"><i class="fa-solid fa-cart-shopping"></i></a>
                            </form>
                        </div>
                    </div>

                </span>
                <span>0</span>
            </div>
        </div>
    </div>

    <!-- //////////////////               MENU      ////////////////////////////////////////////////////////////////////////////////////// -->





    <?php
    $sql_category = mysqli_query($con, 'SELECT * FROM tbl_category ORDER BY category_id DESC');
    ?>
    <div class="navbar-inner">
        <div class="">
            <nav class=" navbar-expand-lg ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class='header-bottom'>
                        <ul id='header-bottom-text'>

                            <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link" href="index.php">Trang chủ
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?quanly=introduce">Giới Thiệu</a>
                            </li>
                            <?php
                            $sql_category_danhmuc = mysqli_query($con, 'SELECT * FROM tbl_category ORDER BY category_id ASC ');
                            while ($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)) {
                            ?>
                                <li class="nav-item  mr-lg-2 mb-lg-0 mb-2">

                                    <a class="nav-link " href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc['category_id'] ?>" role="button" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $row_category_danhmuc['category_name'] ?>
                                    </a>

                                </li>
                            <?php
                            }
                            ?>
                            <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                                <?php
                                $sql_danhmuctin = mysqli_query($con, "SELECT * FROM tbl_danhmuc_tin ORDER BY danhmuctin_id ASC ");

                                ?>
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tin tức
                                </a>
                                <div class="dropdown-menu">
                                    <?php
                                    while ($row_danhmuctin = mysqli_fetch_array($sql_danhmuctin)) {
                                    ?>
                                        <a class="dropdown-item" style="color: #333;" href="?quanly=tintuc&id_tin=<?php echo $row_danhmuctin['danhmuctin_id'] ?>"><?php echo $row_danhmuctin['tendanhmuc'] ?></a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </li>
                            <li>
                                <a href="index.php?quanly=blogs">BLOGS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?quanly=contact">Liên hệ</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- //navigation -->
</div>