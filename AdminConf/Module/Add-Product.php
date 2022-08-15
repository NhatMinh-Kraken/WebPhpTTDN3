<div class="main-content-wrap">
    <div class="container">
        <div class="rows">
            <div class="row-detail-product">
                <div class="row-detail-product-header">
                    <div class="detail-product-header">
                        <h1 class="entry-title">
                            Mercedes giá lăn bánh, đánh giá xe, khuyến mãi
                        </h1>
                    </div>
                    <form method="POST" action="XuLy.php" enctype="multipart/form-data">
                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Tên Xe</label>
                                <input type="text" class="form-control" id="exampleInputNameCar1" name="TenXe" placeholder="Tên Xe">
                            </div>
                        </div>

                        <div class="form-group padding">
                            <div class="Name-Product-Car">
                                <label for="exampleInputNameCar1">Loại Xe</label>
                                <select id="loaixe" name="loaixe" class="form-control">
                                    <option value="">Chọn loại xe</option>
                                    <?php
                                        include('config.php');
                                        $sql = "SELECT IdLoaiXe, tenloaixe FROM loaixe"; 
                                        $ktloaixe = mysqli_query($mysqli,$sql);
                                        $num = mysqli_num_rows($ktloaixe);
                                        if($num > 0){
                                            while($row = mysqli_fetch_array($ktloaixe))
                                            {   
                                    ?>
                                    <option value="<?php echo $row['IdLoaiXe'] ?>"><?php echo $row['tenloaixe'] ?></option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>
                                
                            </div>
                        </div>

                        <div class="detail-product-content">
                            <div class="form-group padding">
                                <div class="Name-Product-Car">
                                    <label for="exampleInputDetail1">Dòng Giới Thiệu 1</label>
                                    <textarea type="text" class="form-control" id="exampleInputDetail1" placeholder="Dòng Giới Thiệu 1" name="Dong-GIoi-Thieu1"></textarea>
                                </div>
                            </div>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload">
                                    <input type="file" id="ImageUploadInputt" accept=".jpg,.png" name="hinhanh1">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus"></div>
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetail1">Dòng Giới Thiệu 2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetail1"
                                            placeholder="Dòng Giới Thiệu 2" name="Dong-GioiThieu-2"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <h2 id="ThongSo-KyThuat" class="detail-product-content-h2">
                                    <b>Thông Số Kỹ Thuật</b>
                                </h2>
                                <table class="detail-product-content-table" border="1" cellpadding="1">
                                    <tbody>
                                        <tr>
                                            <td><label for="exampleInputSoChoNgoi">Số Chỗ Ngồi</label></td>
                                            <td><input type="number" class="form-control" id="exampleInputSoChoNgoi" placeholder="Số Chỗ Ngồi" name="So-Cho-Ngoi"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputKieuXe">Kiểu Xe</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputKieuXe" placeholder="Kiểu Xe" name="Kieu-Xe"></td>

                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputXuatXu">Xuất Xứ</label></td>
                                            <td><select id="exampleInputKieuXe" name="Xuat-Xu" class="form-control">
                                                        <option value="0">Chọn Xuất Xứ</option>
                                                        <option value="1">Nhập Khẩu</option>
                                                        <option value="2">Trong Nước</option>
                                                    </select></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputKichThuocDRC">Kích thước DxRxC</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputKichThuocDRC" name="KichThuoc-DRC" placeholder="Kích thước DxRxC"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputChieuDai">Chiều Dài Cơ Sở</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputChieuDai" name="Chieu-Dai-Co-So" placeholder="Chiều Dài Cơ Sở"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputDongCo">Động Cơ</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputDongCo" name="Dong-Co" placeholder="Động Cơ"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputDungTichCongTac">Dung Tích Công Tác</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputDungTichCongTac" name="Dung-Tich-Cong-Tac" placeholder="Dung Tích Công Tác"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputDungTichBinhNhienLieu">Dung Tích Bình Nhiên
                                                    Liệu</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputDungTichBinhNhienLieu" name="Dung-Tich-Binh-Nhien-Lieu" placeholder="Dung Tích Bình Nhiên Liệu"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputLoaiNhienLieu">Loại Nhiên Liệu</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputLoaiNhienLieu" name="Loai-Nhien-Lieu" placeholder="Loại Nhiên Liệu"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputCongSuatCucDai">Công Suất Cực Đại</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputCongSuatCucDai" name="Cong-Suat-Cuc-Dai" placeholder="Công Suất Cực Đại"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputMomenXoan">Mô-men Xoắn Cực Đại</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputMomenXoan" name="Momen-Cuc-Dai" placeholder="Mô-men Xoắn Cực Đại"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputHopSo">Hộp Số</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputHopSo" name="Hop-So" placeholder="Hộp Số"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputHeDanDong">Hệ Dẫn Động</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputHeDanDong" name="He-Dan-Dong" placeholder="Hệ Dẫn Động"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputHeThongTreo">Hệ Thống Treo</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputHeThongTreo" name="He-Thong-Treo" placeholder="Hệ Thống Treo"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTayLaiTroLuc">Tay Lái Trợ Lực</label></td>
                                            <td><select id="exampleInputTayLaiTroLuc" name="Tay-Lai-Tro-Luc" class="form-control">
                                                        <option value="0">Chọn Loại Trợ Lực</option>
                                                        <option value="1">Điện</option>
                                                        <option value="2">Cơ</option>
                                                    </select></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputCoMam">Cỡ Mâm</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputCoMam" name="Co-Mam" placeholder="Cỡ Mâm"></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group padding">
                                <h2 id="Gia-Ban" class="detail-product-content-h2">
                                    <b>Giá Bán</b>
                                </h2>
                                <table class="detail-product-content-table" border="1" cellpadding="1">
                                    <tbody>
                                        <tr>
                                            <td><label for="exampleInputGiaNiemYet">Giá Niêm Yết</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputGiaNiemYet" name="Gia-Niem-Yet" placeholder="Giá Niêm Yết"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputGiaHCM">Giá HCM</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputGiaHCM" name="Gia-HCM" placeholder="Giá HCM"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputGiaHaNoi">Giá Hà Nội</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputGiaHaNoi" name="Gia-HN" placeholder="Giá Hà Nội"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputGiaTinhKhac">Giá Các Tỉnh Khác</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputGiaTinhKhac" name="Gia-Tinh-Khac" placeholder="Giá Tỉnh Khác"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h2 id="Mau-Sac" class="detail-product-content-h2">
                                <b>Màu Sắc</b>
                            </h2>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview1" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload1">
                                    <input type="file" id="ImageUploadInputt1" accept=".jpg,.png" name="AnhMau1">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name1" disabled placeholder="Upload Image">Upload Image</span>
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
                                    <img loading="lazy" id="imagePreview2" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload2">
                                    <input type="file" id="ImageUploadInputt2" accept=".jpg,.png" name="AnhMau2">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name2" disabled placeholder="Upload Image">Upload Image</span>
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
                                    <img loading="lazy" id="imagePreview3" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload3">
                                    <input type="file" id="ImageUploadInputt3" accept=".jpg,.png" name="AnhMau3">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name3" disabled placeholder="Upload Image">Upload Image</span>
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
                            <h2 id="Dien-Mao" class="detail-product-content-h2">
                                <b>Diện Mạo Hiện Đại Và Thể Thao Hơn</b>
                            </h2>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDienMao1">Dòng Giới Thiệu Diện Mạo 1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailDienMao1"
                                            placeholder="Dòng Giới Thiệu Diện Mạo 1" name="Gioi-THieu-DienMao-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDienMao2">Dòng Giới Thiệu Diện Mạo 2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailDienMao2"
                                            placeholder="Dòng Giới Thiệu Diện Mạo 2" name="Gioi-THieu-DienMao-2"></textarea>
                                    </span>
                                </p>
                            </div>
                            <h4 class="Detalt-Car-title">
                                Đầu Xe
                            </h4>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview4" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload4">
                                    <input type="file" id="ImageUploadInputt4" accept=".jpg,.png" name="AnhDauXe1">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name4" disabled placeholder="Upload Image">Upload Image</span>
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
                                        <label for="exampleInputDetailDienMaoDauXe1">Dòng Giới Thiệu Diện Mạo Đầu Xe
                                            1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailDienMaoDauXe1"
                                            placeholder="Dòng Giới Thiệu Đầu Xe 1" name="Gioi-THieu-DauXe-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDienMaoDauXe2">Dòng Giới Thiệu Diện Mạo Đầu Xe
                                            2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailDienMaoDauXe2"
                                            placeholder="Dòng Giới Thiệu Đầu Xe 2" name="Gioi-THieu-DauXe-2"></textarea>
                                    </span>
                                </p>
                            </div>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview5" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload5">
                                    <input type="file" id="ImageUploadInputt5" accept=".jpg,.png" name="AnhDauXe2">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name5" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn5"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus5"></div>
                            </p>
                            <p class="detail-product-content-Note">
                                
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailTanNhiet1">Dòng Giới Thiệu Tản Nhiệt 1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailTanNhiet1"
                                            placeholder="Dòng Giới Thiệu Tản Nhiệt 1" name="Gioi-THieu-TanNhiet-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailTanNhiet2">Dòng Giới Thiệu Tản Nhiệt 2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailTanNhiet2"
                                            placeholder="Dòng Giới Thiệu Tản Nhiệt 2" name="Gioi-THieu-TanNhiet-2"></textarea>
                                    </span>
                                </p>
                            </div>
                            <h4 class="Detalt-Car-title">
                                Thân Xe
                            </h4>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview6" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload6">
                                    <input type="file" id="ImageUploadInputt6" accept=".jpg,.png" name="AnhThanXe1">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name6" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn6"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus6"></div>
                            </p>
                            <p class="detail-product-content-Note">
                                
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailThanXe1">Dòng Giới Thiệu Thân Xe 1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailThanXe1"
                                            placeholder="Dòng Giới Thiệu Thân Xe 1" name="Gioi-THieu-ThanXe-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview7" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload7">
                                    <input type="file" id="ImageUploadInputt7" accept=".jpg,.png" name="AnhThanXe2">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name7" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn7"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus7"></div>
                            </p>
                            <p class="detail-product-content-Note">
                                
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailThanDuoi">Dòng Giới Thiệu Thân Dưới</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailThanDuoi"
                                            placeholder="Dòng Giới Thiệu Thân Dưới" name="Gioi-THieu-ThanDuoi-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <h4 class="Detalt-Car-title">
                                Đuôi Xe
                            </h4>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview8" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload8">
                                    <input type="file" id="ImageUploadInputt8" accept=".jpg,.png" name="AnhDuoiXe">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name8" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn8"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus8"></div>
                            </p>
                            <p class="detail-product-content-Note">
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDuoiXe1">Dòng Giới Thiệu Đuôi Xe 1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailDuoiXe1"
                                            placeholder="Dòng Giới Thiệu Đuôi Xe 1" name="Gioi-THieu-DuoiXe-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDuoiXe2">Dòng Giới Thiệu Đuôi Xe 2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailDuoiXe2"
                                            placeholder="Dòng Giới Thiệu Đuôi Xe 2" name="Gioi-THieu-DuoiXe-2"></textarea>
                                    </span>
                                </p>
                            </div>
                            <h4 class="Detalt-Car-title">
                                Nội Thất Rộng Rải, Sang Trọng
                            </h4>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailNoiThat1">Dòng Giới Thiệu Nội Thất 1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailNoiThat1"
                                            placeholder="Dòng Giới Thiệu Nội Thất 1" name="Gioi-THieu-NoiThat-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailNoiThat2">Dòng Giới Thiệu Nội Thất 2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailNoiThat2"
                                            placeholder="Dòng Giới Thiệu Nội Thất 2" name="Gioi-THieu-NoiThat-2"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailNoiThat3">Dòng Giới Thiệu Nội Thất 3</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailNoiThat3"
                                            placeholder="Dòng Giới Thiệu Nội Thất 3" name="Gioi-THieu-NoiThat-3"></textarea>
                                    </span>
                                </p>
                            </div>
                            <h4 class="Detalt-Car-title">
                                Khoang Lái
                            </h4>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview9" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload9">
                                    <input type="file" id="ImageUploadInputt9" accept=".jpg,.png" name="AnhKhoangLai">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name9" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn9"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus9"></div>
                            </p>
                            <p class="detail-product-content-Note">
                                
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailKhoangLai">Dòng Giới Thiệu Khoang Lái</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailKhoangLai"
                                            placeholder="Dòng Giới Thiệu Khoang Lái" name="Gioi-THieu-KhoangLai"></textarea>
                                    </span>
                                </p>
                            </div>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview10" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload10">
                                    <input type="file" id="ImageUploadInputt10" accept=".jpg,.png" name="AnhHangGheTruoc">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name10" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn10"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus10"></div>
                            </p>
                            <p class="detail-product-content-Note">
                                
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailHangGheTruoc">Dòng Giới Thiệu Hàng Ghế
                                            Trước</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailHangGheTruoc"
                                            placeholder="Dòng Giới Thiệu Hàng Ghế Trước" name="Gioi-THieu-HangGheTruoc"></textarea>
                                    </span>
                                </p>
                            </div>
                            <h4 class="Detalt-Car-title">
                                Khoang Hành Khách
                            </h4>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview11" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload11">
                                    <input type="file" id="ImageUploadInputt11" accept=".jpg,.png" name="AnhHangGheHanhKhach">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name11" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn11"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus11"></div>
                            </p>
                            <p class="detail-product-content-Note">
                                
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailKhoangHanhKhach1">Dòng Giới Thiệu Khoang Hành
                                            Khách 1</label>
                                        <textarea type="text" class="form-control"
                                            id="exampleInputDetailKhoangHanhKhach1"
                                            placeholder="Dòng Giới Thiệu Khoang Hành Khách 1" name="Gioi-THieu-KhoangHanhKhach-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailKhoangHanhKhach2">Dòng Giới Thiệu Khoang Hành
                                            Khách 2</label>
                                        <textarea type="text" class="form-control"
                                            id="exampleInputDetailKhoangHanhKhach2"
                                            placeholder="Dòng Giới Thiệu Khoang Hành Khách 2" name="Gioi-THieu-KhoangHanhKhach-2"></textarea>
                                    </span>
                                </p>
                            </div>
                            <h4 class="Detalt-Car-title">
                                Khoang Hành Lý
                            </h4>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview12" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload12">
                                    <input type="file" id="ImageUploadInputt12" accept=".jpg,.png" name="AnhHanhLy">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name12" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn12"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus12"></div>
                            </p>
                            <p class="detail-product-content-Note">
                               
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailKhoangHanhLy1">Dòng Giới Thiệu Khoang Hành Lý
                                            1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailKhoangHanhLy1"
                                            placeholder="Dòng Giới Thiệu Khoang Hành Lý 1" name="Gioi-THieu-HanhLy-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailKhoangHanhLy2">Dòng Giới Thiệu Khoang Hành Lý
                                            2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailKhoangHanhLy2"
                                            placeholder="Dòng Giới Thiệu Khoang Hành Lý 2" name="Gioi-THieu-HanhLy-2"></textarea>
                                    </span>
                                </p>
                            </div>
                            <h4 class="Detalt-Car-title">
                                Tiện Nghi Bậc Nhất Phân Khúc
                            </h4>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailTienNghi">Dòng Giới Thiệu Tiện Nghi</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailTienNghi"
                                            placeholder="Dòng Giới Thiệu Tiện Nghi" name="Gioi-THieu-TienNghi"></textarea>
                                    </span>
                                </p>
                            </div>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview13" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload13">
                                    <input type="file" id="ImageUploadInputt13" accept=".jpg,.png" name="AnhTienNghi">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name13" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn13"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus13"></div>
                            </p>
                            <p class="detail-product-content-Note">
                                
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailCongNghe1">Dòng Giới Thiệu Công Nghệ 1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailCongNghe1"
                                            placeholder="Dòng Giới Thiệu Công Nghệ 1" name="Gioi-THieu-CongNghe-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailCongNghe2">Dòng Giới Thiệu Công Nghệ 2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailCongNghe2"
                                            placeholder="Dòng Giới Thiệu Công Nghệ 2" name="Gioi-THieu-CongNghe-2"></textarea>
                                    </span>
                                </p>
                            </div>
                            <h4 class="Detalt-Car-title">
                                Động Cơ Và Hộp Số
                            </h4>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview14" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload14">
                                    <input type="file" id="ImageUploadInputt14" accept=".jpg,.png" name="AnhDongCo">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name14" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn14"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus14"></div>
                            </p>
                            <p class="detail-product-content-Note">
                                
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDongCo1">Dòng Giới Thiệu Động CƠ 1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailDongCo1"
                                            placeholder="Dòng Giới Thiệu Động Cơ 1" name="Gioi-THieu-DongCo-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailDongCo2">Dòng Giới Thiệu Động CƠ 2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailDongCo2"
                                            placeholder="Dòng Giới Thiệu Động Cơ 2" name="Gioi-THieu-DongCo-2"></textarea>
                                    </span>
                                </p>
                            </div>
                            <h4 class="Detalt-Car-title">
                                Vận Hành Mạnh Mẽ, Êm Ái
                            </h4>
                            <p>
                                <div>
                                    <img loading="lazy" id="imagePreview15" class="detail-product-content-img" src="Images/default.jpg" title="Ảnh Xem Trước" width="640" height="auto" sizes="(max-width: 640px) 100vw, 640px" alt="Ảnh xem trước">
                                </div>
                                <div class="padding imageUpload15">
                                    <input type="file" id="ImageUploadInputt15" accept=".jpg,.png" name="AnhVanHanh">
                                    <div class="input-group col-xs-12">
                                        <span class="form-control file-upload-info" id="fileInfomation_name15" disabled placeholder="Upload Image">Upload Image</span>
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" id="imageUploadInputBtn15"
                                            type="button">Upload</button>
                                    </span>
                                    </div>
                                </div>
                                <div id="uploadFileStatus15"></div>
                            </p>
                            <p class="detail-product-content-Note">
                                
                            </p>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailVanHanh1">Dòng Giới Thiệu Vận Hành 1</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailVanHanh1"
                                            placeholder="Dòng Giới Thiệu Vận Hành 1" name="Gioi-THieu-VanHanh-1"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailVanHanh2">Dòng Giới Thiệu Vận Hành 2</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailVanHanh2"
                                            placeholder="Dòng Giới Thiệu Vận Hành 2" name="Gioi-THieu-VanHanh-2"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailVanHanh3">Dòng Giới Thiệu Vận Hành 3</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailVanHanh3"
                                            placeholder="Dòng Giới Thiệu Vận Hành 3" name="Gioi-THieu-VanHanh-3"></textarea>
                                    </span>
                                </p>
                            </div>
                            <h4 class="Detalt-Car-title">
                                An Toàn Đầy Đủ Tiện Nghi, Hiện Đại, Thông Minh
                            </h4>
                            <div class="form-group padding">
                                <p class="detail-product-content-p">
                                    <span style="font-weight: 400;">
                                        <label for="exampleInputDetailAnToan">Dòng Giới Thiệu An Toàn</label>
                                        <textarea type="text" class="form-control" id="exampleInputDetailAnToan"
                                            placeholder="Dòng Giới Thiệu An Toàn" name="AnToan"></textarea>
                                    </span>
                                </p>
                            </div>
                            <div class="form-group padding">
                                <h2 id="ThongSo-KyThuat" class="detail-product-content-h2">
                                    <b>Tiêu Chuẩn An Toàn</b>
                                </h2>

                                <table class="detail-product-content-table" border="1" cellpadding="1">
                                    <tbody>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan1">Tiêu Chuẩn 1</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan1" placeholder="Tiêu Chuẩn 1" name="TieuChuan-1"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan2">Tiêu Chuẩn 2</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan2" placeholder="Tiêu Chuẩn 2" name="TieuChuan-2"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan3">Tiêu Chuẩn 3</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan3" placeholder="Tiêu Chuẩn 3" name="TieuChuan-3"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan4">Tiêu Chuẩn 4</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan4" placeholder="Tiêu Chuẩn 4" name="TieuChuan-4"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan5">Tiêu Chuẩn 5</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan5" placeholder="Tiêu Chuẩn 5" name="TieuChuan-5"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan6">Tiêu Chuẩn 6</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan6" placeholder="Tiêu Chuẩn 6" name="TieuChuan-6"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan7">Tiêu Chuẩn 7</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan7" placeholder="Tiêu Chuẩn 7" name="TieuChuan-7"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan8">Tiêu Chuẩn 8</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan8" placeholder="Tiêu Chuẩn 8" name="TieuChuan-8"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan9">Tiêu Chuẩn 9</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan9" placeholder="Tiêu Chuẩn 9" name="TieuChuan-9"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan10">Tiêu Chuẩn 10</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan10" placeholder="Tiêu Chuẩn 10" name="TieuChuan-10"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan11">Tiêu Chuẩn 11</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan11" placeholder="Tiêu Chuẩn 11" name="TieuChuan-11"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="exampleInputTieuChuan12">Tiêu Chuẩn 12</label></td>
                                            <td><input type="text" class="form-control" id="exampleInputTieuChuan12" placeholder="Tiêu Chuẩn 12" name="TieuChuan-12"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="footer-laithu">
                                <div class="button-laithu">
                                    <input class="button-laithu-link" type="submit" value="Thêm Sản Phẩm" name="ThemSanPhamXe">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>