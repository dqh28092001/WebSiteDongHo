<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = '';
}
$sql_cate = mysqli_query($con, "SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id DESC");
$sql_category = mysqli_query($con, "SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id DESC");

$row_title = mysqli_fetch_array($sql_category);
$title = $row_title['category_name'];
?>
<!-- top Products -->
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = '';
}
$sql_cate = mysqli_query($con, "SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id DESC");
$sql_category = mysqli_query($con, "SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id DESC");

$row_title = mysqli_fetch_array($sql_category);
$title = $row_title['category_name'];
?>
<!-- top Products -->
<?php include_once('db/connect.php');
?>



<div class='men'>
    <div class='men-click'>
        <div class='men-click-link'>
            <a href="index.php">TRANG CHỦ </a>
            <span> / <?php echo $title ?></span>
        </div>
        <div class='men-click-list'>
            <span>Hiển thị một kết quả duy nhất</span>
            <select id="cars">
                <option value="volvo">Thứ tự mặc định</option>
                <option value="saab">Thứ tự theo mức độ phổ biến</option>
                <option value="opel">Thứ tử theo điểm đánh giá</option>
                <option value="audi">Mới nhất</option>
                <option value="min">Thứ tự theo giá: thấp tới cao</option>
                <option value="max">Thứ tự theo giá: cao tới thấp</option>
            </select>
        </div>
    </div>
    <!-- {/* ------------------------------------------------------------------ */} -->
    <div class='men-list' style="display:flex">
        <div class='men-left'>
            <!-- <div style="margin-left:5pc; margin-top:1pc;">
                <h5>DANH MỤC SẢN PHẨM</h5>
            </div> -->
            <!-- <div class='men-left-buying'>
                <div class='men-list-sp' style="text-align: center;">
                    <span>Demo</span>
                </div>
                <hr style="border-top: 'border-top: 1px dashed  rgba(0,0,0,-0.9)'; margin-top: '5px'; margin-bottom: 0!important;  " />
                <span style="margin-left: 35px;">Sản Phẩm: </span>
                < <div class='men-list-demo'>

                    <select id="cars" style="text-align: center;">
                        <option value="volvo">Đồng hồ Nam</option>
                        <option value="saab">Đồng hồ Nữ</option>
                    </select>
                </div> -->

            <!-- {/* -------------------------------------------------------------- */} -->
            <h2 style="margin-top: 7pc;
    margin-bottom: 1pc;
    margin-left: 7pc;
">Sản Phẩm</h2>
            <div class='men-left-img'>
                <div class='sp'>
                    <div class='men-left-list-img'>
                        <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-16-100x100.jpg"
                            alt="" />
                        <div class='men-left-list-text'>
                            <span>Naruto</span>
                            <h5>640,000 đ</h5>
                        </div>
                    </div>
                    <hr
                        style="border-top: 'border-top: 1px dashed  rgba(0,0,0,-0.9)'; margin-top: '5px'; margin-bottom: '5px' " />
                    <div class='men-left-list-img'>
                        <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-14-300x300.jpg"
                            alt="" />
                        <div class='men-left-list-text'>
                            <span>Henzo</span>
                            <h5>640,000 đ</h5>
                        </div>
                    </div>
                    <hr
                        style="border-top: 'border-top: 1px dashed  rgba(0,0,0,-0.9)'; margin-top: '5px'; margin-bottom: '5px' " />
                    <div class='men-left-list-img'>
                        <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13-100x100.jpg"
                            alt="" style=" padding-left: '10px' " />
                        <div class='men-left-list-text'>
                            <span>Sasuke</span>
                            <h5>640,000 đ</h5>
                        </div>
                    </div>
                    <hr
                        style="border-top: 'border-top: 1px dashed rgba(0,0,0,-0.9)'; margin-top: '5px'; margin-bottom: '5px' " />
                    <div class='men-left-list-img'>
                        <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/product-13-100x100.jpg"
                            alt="" style=" margin-left: '8px'; padding-top: '5px'; width: '47px' " />
                        <div class='men-left-list-text'>
                            <span>Bmoor</span>
                            <h5>640,000 đ</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- {/* -------------------------------------------------- */} -->
            <h2 style="       margin-top: 8pc;
    margin-left: 3pc;
    font-size: 27px;
    margin-bottom: 2pc;
    font-weight: 600;">BÀI VIẾT MỚI NHẤT</h2>
            <div class='men-left-list'>

                <div class='men-list-img'>
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5Ojf/2wBDAQoKCg0MDRoPDxo3JR8lNzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzf/wAARCAAvADADASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAABgcFCAADBAH/xAAyEAACAQIDBgQEBgMAAAAAAAABAgMEEQAFEgYTITFBYQciUZEUcYGhFTNCYmPBcrGy/8QAGQEAAwADAAAAAAAAAAAAAAAAAgMEAAEF/8QAHxEAAgMAAQUBAAAAAAAAAAAAAQIAAxEEEhMhMUFx/9oADAMBAAIRAxEAPwB3YzGYj62q1REJKY0YlFlUartxvyvyI7Y0TMnVPV09OLzSqtu/HGhM2oHNlqUv+4Ef7wKZjvN38RqbclyoYq6k/MMBz9u+IWorNLEhuAAviR+QytmSyvjK66DGirBlDKQQeRBx7hcZTntVRSAxnVGT5o25Ef1hg0dTHWU0dRCbo4vx5jscOquFn7E3UNX79TRnNS9JldRNF+aE0x/5Hgv3Iwq9vdtKrZTJqLLcrDLWyXC1B46UsNRAPUljx7ezD27eWLZPMJ4Bd4FWe3ZHVz9lOK9bVzS58lLVUPkmgU6QjG7gniQfbh3OD3G8wM1PE6KbbfPcurdddmBraNiN5E77xSDY+QnqL/LBZX1W4mXUBomAkj0n9J5dx158cAFBkGaZ5UU8tQjRqFKzSSn0YkH1tYgX7e5DmFVD+JSLDJrihAiS/oot9eWFckBgD9lHDYhiPkIoc1UWATBx4f5pJUvVUsg8oUSJ26H+sKuGrRVu7qB1vg48KKr43N654gTFDAFLdLswt/ycTUghxkr5PSazsZk0Uc8LwzKHjkUq6nkQeBGK557spXbM5/WZeyPJRsu+opit1YagLHuAeI9Rfrix+NFZR09bFuqqFJUvcBhex9R6YvYaJy1bJXUTVdJQrMZ5dIWwXWdLegHA4G4mkTgxOLOSZBCI2jhWLdHnG6C2Iibw+yapfVPQ0yn+LUv2FsK7ZjksAiDgSaqmSKGN5JGIVUUXJJ6DFhvD/Z1tnMhSGoC/GTneT6eh6L9B974kco2cynKLNRUUEcgFt4EGr354lcGlfT5g2XFxk//Z"
                        alt="" />
                    <span>Chiếc đồng hồ của CEO...</span>
                </div>
                <div class='men-list-img'>
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5Ojf/2wBDAQoKCg0MDRoPDxo3JR8lNzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzf/wAARCAA1ADYDASIAAhEBAxEB/8QAGwABAAMAAwEAAAAAAAAAAAAAAAYHCAIEBQP/xAAzEAABAwMCBAQFAQkAAAAAAAABAAIDBAURBhIHEyExQVFhkRQyUnGBFRYiIzNCcqGxwf/EABgBAQEBAQEAAAAAAAAAAAAAAAABAgME/8QAGhEBAQEBAQEBAAAAAAAAAAAAAAESESECUf/aAAwDAQACEQMRAD8Au5EUC4oa8/ZalZRW4sfdahuW7hkQM+ojxJ8B6e6Tol12vdrs0YkutfT0rT8olkALvsO5/C8BvE3RrpOWL0zd5mCUD324Wbq6tqrhVSVVdUSVE8hy6SRxcSuut5TrXttudDdIOfbayCqi+uGQOA9Djsu0sz8ObPqO4XGWr0xVMpZaXbzJZJNrTnOGkYO4HB6YwtAaeus9aySjubIYrrShvxMUL9zSD8r2+O04PfqCCFmzivYREUBZQ1dd5L3qW43CRxcJZ3cvPgwHDR7ALV6x/cKZ9FX1NJKCJIJXRuB82kg/6W/lK+BREWkXbw9oJbFpyOQNZzatomc4ktByMtBweuMjv4k4UrsrGC+uuRb/ABZhyATJ1dH3BwT1GfvjrjoohoK7/qVgp+dFO98DPh3GNrpGYaBjc0diQe5HXBUhtVeJtQR0Rjq2MdKJGh+WOy3H7209dhBA+4d08vJN79ei5z4nqIi7OIqL41aPlork/UNFGXUlUR8SGj+VJ2yfR3n558wr0XCaKOeJ8U8bJIngtex7QQ4eRB7qy8GO0V6ak4M26tmfPYqx1A5xyYJG748+hzlv+VGW8E7/AMzDrjbBH9QfIT7bP+reohwYv1utH6pFcamOEymIsDz82N+ce4VpWi1xV2pZdTE7mGnbBSdP6e7nfY5wPz6KP6V4RWi0TR1V2lNzqGHLWPZtiaf7eu78nHorHAAAAGAOwCzb+HBERZUREQEREBERAREQf//Z"
                        alt="" />
                    <span>12 Chiếc đồng hồ dành cho...</span>
                </div>
                <div class='men-list-img'>
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5Ojf/2wBDAQoKCg0MDRoPDxo3JR8lNzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzf/wAARCAAsACoDASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAABgcACAIEBQP/xAAvEAABAwIEBQMEAQUAAAAAAAABAgMEBREABiExBxITQWFRcYEVIjKhFCRCQ5LR/8QAFgEBAQEAAAAAAAAAAAAAAAAAAQAC/8QAFxEBAQEBAAAAAAAAAAAAAAAAABEBQf/aAAwDAQACEQMRAD8Ad2BmtZ8y7R3VMvzes+nQtRk9Qj3I0B8E4DeJ+cZTsl+hUZ1bbTQ5Jb7ZIWtZ/wAaCNvQnzb3WSYrjym4iVEOJTcNMAE2FyeZdxrYX3/WCw5lO2HxQoct0toi1JPKLqJYSbD1slRP6wVUur0+rNldPlIe5fySNFJ90nUfIxXSnPrYcadTIcbseUdRAFyDte50vr21x3pL0umhqrwFPR5KTd0pWCEgmw21sbag33HqBiu0zIfeJgdyPmdrM9IEiwRKZPJIbGwV2I8H/o7YIsLKtv8ATxY4ly3pC3pfKHeUgm6iSpSdtbE77nEpzyEzILn8taqdElDoIW2AoArBNwPXc6nbGWX5K6hLejw3XI1QZHXjW3HLcLQkevKToB298a0pDzUB9uItLsISihMnkKHHDynSxNwCNx5F8Z61x7N1hcyPHjilMOsBwlfObFbqxYEkWItcbnsMZy2X0OMsv3EuS27FUEnmAcSSkaC43CDpvbGrFRaEkvU1T8RD3SdUl3kc6ihoB7WO4OPCRIaamKajq5otOjqBUTe7yr2sRv8AcUj2STh1YMuDKJ0OtxJN0qhVNhxpxKTfpuIuoX/1VY+cO/FfOCzD0nO7S21L6MZlbzgvp+JQm/n7z+8WDwjSI4r5Qk0KsKzDSg6mG851VOM3BivE6nT+0nW/Y/FxAZmdc6TkmCh59pwuIfhvFslVx9xTYgE2Gth2xaRxCHG1NuJStCgQpKhcEHcEYU/EXhvlyPBdqcOO7Gcvq00sdM/BBt8EDFFmlXUK29IefdZZbpweUS6844XHlEn7td9SewHvjnpRKltMsU6M8pkrshKUFSnXDpc297D5843aBQIdTqqYjxdQ2VWu2qx/YOLG5SyXRcrMj6c06t4jV+Q5zr27dh8AYIa53CzJ6sq0QrmgfU5llyANemB+KAfF9fJ8YNcTEwsv/9k="
                        alt="" style=" padding-left: '10px' " />
                    <span>10 Thương hiệu đồng hồ cao....</span>
                </div>
                <div class='men-list-img'>
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5Ojf/2wBDAQoKCg0MDRoPDxo3JR8lNzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzf/wAARCAAwAC8DASIAAhEBAxEB/8QAGgAAAwADAQAAAAAAAAAAAAAABQYHAAMEAv/EADIQAAEDAwIDBgQGAwAAAAAAAAECAwQABRESIQYTMQcyQVFhgRQVIkIXIzRxgpGiscH/xAAXAQADAQAAAAAAAAAAAAAAAAAAAQID/8QAGREBAQADAQAAAAAAAAAAAAAAAAECETEh/9oADAMBAAIRAxEAPwC3VpmS48GM5JmPNsMNjK3HFYA96A8dcUt8L2rmoSHZjv0sNf7UfQbUpSLm5cuyRc29SZCnJLp5jjbSVL/UHACSUjGBjGRtRebORRLRdoF6jrkWyQH2UL5alhJA1YB8QM7Eb+tdtK/Z2IybbObgkmK3LDbSj1UlLLSQT67U10E8VlD7fdEy506KWlNqjO6EFQOHBgEkbeZI9qIUBAO0i7OXLjCejVlqORHbGemjvf5Zo5cFcnsmt7O31rBPutSqXL7aZsjj2+xmI6lrTIcdKQcYSshQO/mFZrveh8Qv29FvfEZMRsAIbdW0NOOmPH3qdxR/7HFFXC0glWo/Gr3/AIIprvk/5dAU99xOlP74J/5S72V29du4deZcU0pSpalflL1AfSkdfPame6QW7jCcjOnAV3VD7T4Gq3L7Ek0S1w7vHcc+IUvXpJSRpX0z6+J69RT1U7XcWVXEQX3mzLQ9yCnmbrUCRuM7k598CqJToJHGfCrUi6/PWm9Z5HKkNgkFWCNKtvIZB9qU3AllKCxbI7hV0St1ST/SgKsZ32NAbhwvFfWt2Ir4dxQ7oGUZ88eFZ5Y2+xUsaOztx12xul6KiKoSVDlpGB3U700UG4Xtsq029yPNebecLpUlTYwNOAP72NF81WPCvU7s3BMj8Rbnf7lGSiMh4uxFFwKLqiMZwDsBv1wc4qh1lZTJ/9k="
                        alt="" style=" margin-left: '8px'; padding-top: '5px'; width: '47px' " />
                    <span>6 Chiếc đồng hồ ấn tượng lại...</span>
                </div>
                <div class='men-list-img'>
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5Ojf/2wBDAQoKCg0MDRoPDxo3JR8lNzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzf/wAARCAArADEDASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAAAAcEBQIDCAb/xAAwEAABAwMDAQYFBAMAAAAAAAABAgMEAAURBhIxIRNBUWFxsQcUIlKRIzOBoUNiwf/EABgBAQADAQAAAAAAAAAAAAAAAAMBAgQA/8QAIREAAgIBBAIDAAAAAAAAAAAAAAECAxETITFBEhQiQlH/2gAMAwEAAhEDEQA/AHdUWbOZiDCzlZGQgc1lcZjdvgSJj37bDanFY7wBnFJKdqG/vvPTX47gSTuJ7M4QO4eVdh9Fkl2N5F3DhPKfUVtTOB676SCdYzx/lH91kNZze9xJo5K7pISKq/R6NTm1EJUoDPfmpdIMaznAc/1TJ+GuqFaggSGJOPmIqh1+5B4/GCPxXQ1fuiJqtL4M9nRRRSBFBryKqbpSbGS8We1LSS4B1SC4nOPPGaVdxgHSyPn7St9ssqSpalv5D6T0IUCeevPnTkv0JVxs0yI0QHXGj2ZPcsdUn8gVzTcLrPvs1MGYshxt3sywQQUngjgcEYqH4pZZMYzlLERuWXSek7xbGLmLe6PmfqLanVp2qzgjAI781NXoPTHUCCtHpIX/ANNURurdlskCzRlKDiFNNhaTnKisFR9zV5dtQxo7rGV7t3T6Tz61l15Ps3etFPgXWtdJCxuKkRnnHoRIylRyprPGccg+P8Hzufgi8DqWY03u2GEpRz4haMe5qXe7xCurLsNMdR3Da40s7dw8UK7iOh61N+C1ichru1ydyW1OfLR1FO0qSk5USPXaPUGmrtc9mZ7qVXuuBo0UUUoAUvtYfD9uXeF6itCEids/VY6AOq+4f7e/PPLBoqGsrBaMnF5RzhPflw5zip7TrLzWQlDiSkgnpnB8veq1Mw7Fy1vqQ4nJbB6hQ8/CumpkGJOR2c2KxIR9rzYWPwajxrHaIiw5FtUFhY4U1HQkj+QKHRx2aPZb6E9pPSl21YWpFxYegQk4UHz9KljwSDznx49qdcSM1DjNRo6djTSQlKfACttFLGCjwDZZKb3CiiirBn//2Q=="
                        alt="" style="margin-left: '2px'; padding-top: '6px'; width: '50px' " />
                    <span>Casio sẽ ra mắt đồng hồ thông...</span>
                </div>
                <div class='men-list-img'>
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5Ojf/2wBDAQoKCg0MDRoPDxo3JR8lNzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzf/wAARCAAvADADASIAAhEBAxEB/8QAGwAAAgIDAQAAAAAAAAAAAAAABgcFCAADBAH/xAAyEAACAQIDBgQEBgMAAAAAAAABAgMEEQAFEgYTITFBYQciUZEUcYGhFTNCYmPBcrGy/8QAGQEAAwADAAAAAAAAAAAAAAAAAgMEAAEF/8QAHxEAAgMAAQUBAAAAAAAAAAAAAQIAAxEEEhMhMUFx/9oADAMBAAIRAxEAPwB3YzGYj62q1REJKY0YlFlUartxvyvyI7Y0TMnVPV09OLzSqtu/HGhM2oHNlqUv+4Ef7wKZjvN38RqbclyoYq6k/MMBz9u+IWorNLEhuAAviR+QytmSyvjK66DGirBlDKQQeRBx7hcZTntVRSAxnVGT5o25Ef1hg0dTHWU0dRCbo4vx5jscOquFn7E3UNX79TRnNS9JldRNF+aE0x/5Hgv3Iwq9vdtKrZTJqLLcrDLWyXC1B46UsNRAPUljx7ezD27eWLZPMJ4Bd4FWe3ZHVz9lOK9bVzS58lLVUPkmgU6QjG7gniQfbh3OD3G8wM1PE6KbbfPcurdddmBraNiN5E77xSDY+QnqL/LBZX1W4mXUBomAkj0n9J5dx158cAFBkGaZ5UU8tQjRqFKzSSn0YkH1tYgX7e5DmFVD+JSLDJrihAiS/oot9eWFckBgD9lHDYhiPkIoc1UWATBx4f5pJUvVUsg8oUSJ26H+sKuGrRVu7qB1vg48KKr43N654gTFDAFLdLswt/ycTUghxkr5PSazsZk0Uc8LwzKHjkUq6nkQeBGK557spXbM5/WZeyPJRsu+opit1YagLHuAeI9Rfrix+NFZR09bFuqqFJUvcBhex9R6YvYaJy1bJXUTVdJQrMZ5dIWwXWdLegHA4G4mkTgxOLOSZBCI2jhWLdHnG6C2Iibw+yapfVPQ0yn+LUv2FsK7ZjksAiDgSaqmSKGN5JGIVUUXJJ6DFhvD/Z1tnMhSGoC/GTneT6eh6L9B974kco2cynKLNRUUEcgFt4EGr354lcGlfT5g2XFxk//Z"
                        alt="" style=" margin-left: '4px'; padding-top: '1px'; width: '50px' " />
                    <span>Chiếc đồng hồ của CEO....</span>
                </div>
            </div>

        </div>

        <div class='men-list-right'>

            <!-- top Products -->
            <div class="ads-grid py-sm-5 py-4">
                <div class="popular">
                    <!-- tittle heading -->
                    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3"> <?php echo $title ?> </h3>
                    <!-- //tittle heading -->
                    <div class="row">
                        <!-- product left -->
                        <!-- <div class="agileinfo-ads-display col-lg-9"> -->
                        <div class="wrapper">

                            <!-- first section -->
                            <div class=" px-sm-4 px-3   py-3 mb-4">
                                <h3 class="heading-tittle text-center font-italic">

                                    <div class="row">
                                        <?php
                                        while ($row_sanpham = mysqli_fetch_array($sql_cate)) {
                                        ?>
                                        <div class="p-2 shadow bg-body overflow-hidden"
                                            style=" margin-left: 30px;margin-bottom: 5pc; width: 16pc;border-radius: 1pc;">
                                            <div class="product-grid">
                                                <div class="product-image">
                                                    <img src="images/<?php echo $row_sanpham['sanpham_image'] ?>"
                                                        alt="">
                                                    <ul class="product-links">
                                                        <li>
                                                            <span data-tip="Add to wishlist"><i
                                                                    class="far fa-heart"></i></span>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"><span
                                                                    data-tip="Quick view">
                                                                    <i class="fas fa-eye"
                                                                        style="color: '#fff'"></i></span></a>

                                                        </li>
                                                        <li>
                                                            <span data-tip="Compare"><i
                                                                    class="fas fa-random"></i></span>
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
                                                                <input type="submit" name="themgiohang"
                                                                    value="Thêm giỏ hàng" class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                            </div>
                            <!-- //first section -->


                        </div>
                        <!-- </div> -->
                        <!-- //product left -->

                        <!-- product right -->

                    </div>
                    <!-- //top products -->
                </div>
            </div>

        </div>
    </div>
    <!-- //top products -->
    <!-- //top products -->