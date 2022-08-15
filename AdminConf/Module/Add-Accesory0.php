<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Phụ Kiện Nội, Ngoại Thất Mercesde-Benz, Chất Lượng, Uy Tín Đặt Lên Hàng Đầu
                        </h1>
                    </div>
                    <form method="POST" action="XuLyThemPhuKien.php" enctype="multipart/form-data">
                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Tên Phụ Kiện</label>
                                <input type="text" class="form-control" id="exampleInputNameCar1" name="TenPhuKien"
                                    placeholder="Tên Phụ Kiện">
                            </div>
                        </div>

                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Loại Phụ Kiện Body</label>
                                <select id="loaiphukien" name="loaiphukienBody" class="form-control">
                                    <option value="">Chọn Loại Phụ Kiện</option>
                                    <?php
                                        include('config.php');
                                        $sql = "SELECT IdLoaiPhuKienBody, TenLoaiPhuKienBody FROM loaiphukienbody"; 
                                        $ktloaixe = mysqli_query($mysqli,$sql);
                                        $num = mysqli_num_rows($ktloaixe);
                                        if($num > 0){
                                            while($row = mysqli_fetch_array($ktloaixe))
                                            {   
                                    ?>
                                    <option value="<?php echo $row['IdLoaiPhuKienBody'] ?>">
                                        <?php echo $row['TenLoaiPhuKienBody'] ?></option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>

                            </div>
                        </div>

                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Loại Phụ Kiện Bảo Vệ</label>
                                <select id="loaiphukien" name="loaiphukienBaoVe" class="form-control">
                                    <option value="">Chọn Loại Phụ Kiện</option>
                                    <?php
                                        include('config.php');
                                        $sql2 = "SELECT IdLoaiPhuKienBaoVe, TenLoaiPhuKienBaoVe FROM loaiphukienbaove"; 
                                        $ktloaixe2 = mysqli_query($mysqli,$sql2);
                                        $num2 = mysqli_num_rows($ktloaixe2);
                                        if($num2 > 0){
                                            while($row2 = mysqli_fetch_array($ktloaixe2))
                                            {   
                                    ?>
                                    <option value="<?php echo $row2['IdLoaiPhuKienBaoVe'] ?>">
                                        <?php echo $row2['TenLoaiPhuKienBaoVe'] ?></option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>

                            </div>
                        </div>

                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Loại Phụ Kiện Tiện Nghi</label>
                                <select id="loaiphukien" name="loaiphukienTienNghi" class="form-control">
                                    <option value="">Chọn Loại Phụ Kiện</option>
                                    <?php
                                        include('config.php');
                                        $sql3 = "SELECT IdLoaiPhuKienTienNghi, TenLoaiPhuKienTienNghi FROM loaiphukientiennghi"; 
                                        $ktloaixe3 = mysqli_query($mysqli,$sql3);
                                        $num3 = mysqli_num_rows($ktloaixe3);
                                        if($num3 > 0){
                                            while($row3 = mysqli_fetch_array($ktloaixe3))
                                            {   
                                    ?>
                                    <option value="<?php echo $row3['IdLoaiPhuKienTienNghi'] ?>">
                                        <?php echo $row3['TenLoaiPhuKienTienNghi'] ?></option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>

                            </div>
                        </div>

                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Loại Phụ Kiện Trang Tri</label>
                                <select id="loaiphukien" name="loaiphukienTrangTri" class="form-control">
                                    <option value="">Chọn Loại Phụ Kiện</option>
                                    <?php
                                        include('config.php');
                                        $sql4 = "SELECT IdLoaiPhuKienTrangTri, TenLoaiPhuKienTrangTri FROM loaiphukientrangtri"; 
                                        $ktloaixe4 = mysqli_query($mysqli,$sql4);
                                        $num4 = mysqli_num_rows($ktloaixe4);
                                        if($num4 > 0){
                                            while($row4 = mysqli_fetch_array($ktloaixe4))
                                            {   
                                    ?>
                                    <option value="<?php echo $row4['IdLoaiPhuKienTrangTri'] ?>">
                                        <?php echo $row4['TenLoaiPhuKienTrangTri'] ?></option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>

                            </div>
                        </div>

                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Loại Phụ Kiện Mâm Xe</label>
                                <select id="loaiphukien" name="loaiphukienMamXe" class="form-control">
                                    <option value="">Chọn Loại Phụ Kiện</option>
                                    <?php
                                        include('config.php');
                                        $sql5 = "SELECT IdLoaiPhuKienMamXe, TenLoaiPhuKienMamXe FROM loaiphukienmamxe"; 
                                        $ktloaixe5 = mysqli_query($mysqli,$sql5);
                                        $num5 = mysqli_num_rows($ktloaixe5);
                                        if($num5 > 0){
                                            while($row5 = mysqli_fetch_array($ktloaixe5))
                                            {   
                                    ?>
                                    <option value="<?php echo $row5['IdLoaiPhuKienMamXe'] ?>">
                                        <?php echo $row5['TenLoaiPhuKienMamXe'] ?></option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>

                            </div>
                        </div>

                        <div class="detail-product-content">

                            <h2 id="AnhPhuKien" class="detail-product-content-h2">
                                <b>Ảnh Chi Tiết Phụ Kiện</b>
                            </h2>

                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview" class="detail-product-content-img"
                                    src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto"
                                    sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            <div class="padding imageUpload">
                                <input type="file" id="ImageUploadInputt" accept=".jpg,.png" name="AnhPhuKien1">
                                <div class="input-group col-xs-12">
                                    <span class="form-control file-upload-info" id="fileInfomation_name" disabled
                                        placeholder="Upload Image">Upload Image</span>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div id="uploadFileStatus"></div>
                            </p>
                            <p class="detail-product-content-Note">

                            </p>

                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview1" class="detail-product-content-img"
                                    src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto"
                                    sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            <div class="padding imageUpload1">
                                <input type="file" id="ImageUploadInputt1" accept=".jpg,.png" name="AnhPhuKien2">
                                <div class="input-group col-xs-12">
                                    <span class="form-control file-upload-info" id="fileInfomation_name1" disabled
                                        placeholder="Upload Image">Upload Image</span>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn1"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div id="uploadFileStatus1"></div>
                            </p>
                            <p class="detail-product-content-Note">

                            </p>
                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview2" class="detail-product-content-img"
                                    src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto"
                                    sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            <div class="padding imageUpload2">
                                <input type="file" id="ImageUploadInputt2" accept=".jpg,.png" name="AnhPhuKien3">
                                <div class="input-group col-xs-12">
                                    <span class="form-control file-upload-info" id="fileInfomation_name2" disabled
                                        placeholder="Upload Image">Upload Image</span>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn2"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div id="uploadFileStatus2"></div>
                            </p>
                            <p class="detail-product-content-Note">

                            </p>
                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview3" class="detail-product-content-img"
                                    src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto"
                                    sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            <div class="padding imageUpload3">
                                <input type="file" id="ImageUploadInputt3" accept=".jpg,.png" name="AnhPhuKien4">
                                <div class="input-group col-xs-12">
                                    <span class="form-control file-upload-info" id="fileInfomation_name3" disabled
                                        placeholder="Upload Image">Upload Image</span>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn3"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div id="uploadFileStatus3"></div>
                            </p>
                            <p class="detail-product-content-Note">

                            </p>

                            <p>
                            <div>
                                <img loading="lazy" id="imagePreview4" class="detail-product-content-img"
                                    src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto"
                                    sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                            </div>
                            <div class="padding imageUpload4">
                                <input type="file" id="ImageUploadInputt4" accept=".jpg,.png" name="AnhPhuKien5">
                                <div class="input-group col-xs-12">
                                    <span class="form-control file-upload-info" id="fileInfomation_name4" disabled
                                        placeholder="Upload Image">Upload Image</span>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn4"
                                            type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div id="uploadFileStatus4"></div>
                            </p>
                            <p class="detail-product-content-Note">

                            </p>


                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailXuatXu">Xuất Xứ:
                                        </label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailXuatXu"
                                            placeholder="Xuất Xứ Sản Phẩm" name="XuatXu"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailChatLuong">Chất Liệu Sản Phẩm:
                                        </label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailChatLuong"
                                            placeholder="Chất Liệu Sản Phẩm" name="ChatLieu"></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailBoPhuKien">Bộ Phụ Kiện Đầy Đủ Gồm: </label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailBoPhuKien"
                                            placeholder="Bộ Phụ Kiện Đầy Đủ Gồm:" name="BoPhuKien"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailPhuKien1">Dòng Giới Thiệu Phụ Kiện 1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailPhuKien1"
                                            placeholder="Dòng Giới Thiệu Phụ Kiện 1"
                                            name="Gioi-THieu-PhuKien-1"></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailPhuKien2">Dòng Giới Thiệu Phụ Kiện 2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailPhuKien2"
                                            placeholder="Dòng Giới Thiệu Phụ Kiện 2"
                                            name="Gioi-THieu-PhuKien-2"></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailPhuKien3">Dòng Giới Thiệu Phụ Kiện 3</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailPhuKien3"
                                            placeholder="Dòng Giới Thiệu Phụ Kiện 3"
                                            name="Gioi-THieu-PhuKien-3"></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailGiaBan">Giá Bán</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailGiaBan"
                                            placeholder="Giá Bán" name="GiaBan"></textarea>
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailSoLuong">Số Lượng</label>
                                        <input type="number" class="form-control" id="exampleInputDetailSoLuong"
                                            placeholder="Số Lượng" name="SoLuong">
                                    </span>
                                </p>
                            </div>

                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailTinhTrang">Tình Trạng</label>
                                        <select id="exampleInputDetailTinhTrang" name="TinhTrang" class="form-control">
                                            <option value="0">Chọn Tình Trạng</option>
                                            <option value="1">Còn Hàng</option>
                                            <option value="2">Hết Hàng</option>
                                        </select>
                                    </span>
                                </p>
                            </div>



                            <div class="footer-laithu">
                                <div class="button-laithu">
                                    <input class="button-laithu-link" type="submit" value="Thêm Phụ Kiện"
                                        name="ThemPhuKien">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>