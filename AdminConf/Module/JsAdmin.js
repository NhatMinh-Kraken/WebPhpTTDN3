(function() {
    var imageUpload = function() {
        var self = this;
        this.selector = {
            fileInput: document.getElementById('ImageUploadInputt'),
            fileInputBtn: document.getElementById('imageUploadInputBtn'),
            infoName: document.getElementById('fileInfomation_name'),
            imagePreview: document.getElementById('imagePreview'),
            status: document.getElementById('uploadFileStatus')
        };
        this.imageData = "";
        this.fileTypes = ['image/png', 'image/jpeg', ];
        this.maxSize = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self.selector.status.innerHTML = '';
            self.selector.imagePreview.setAttribute('src', "Images/default.jpg");
            self.imageData = '';

            var file = e.target.files[0];
            this.selector.infoName.innerHTML = file.name;

            if (this.fileTypes.indexOf(file.type) == -1) {
                self.selector.status.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file.size > this.maxSize) {
                self.selector.status.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader = new FileReader();
            reader.onload = function(e) {
                self.imageData = e.target.result;

                self.selector.imagePreview.onerror = function() {
                    self.imageData = "";
                    self.selector.imagePreview.setAttribute('src', "Images/default.jpg");
                    self.selector.status.innerHTML = "Nội dung không hợp lệ";
                };
                self.selector.imagePreview.setAttribute('src', self.imageData);
            };
            reader.readAsDataURL(file);
        };
        this.sendData = function() {
            if (this.imageData == "") {
                self.selector.status.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data = {
                'imageData': this.imageData
            };
            this.imageData = "";

            var request = new XMLHttpRequest();
            request.open("POST", this.uploadUrl);
            request.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self.selector.status.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self.selector.status.innerHTML = "Errorssss";
                }
            };
            request.send(JSON.stringify(data));
        };
        this.selector.fileInput.addEventListener('change', function(e) {
            self.onChangeInput(e);
        });
        this.selector.fileInputBtn.addEventListener('click', function() {
            self.selector.fileInput.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload();
    });

    //2
    var imageUploadd = function() {
        var self1 = this;
        this.selector = {
            fileInput1: document.getElementById('ImageUploadInputt1'),
            fileInputBtn1: document.getElementById('imageUploadInputBtn1'),
            infoName1: document.getElementById('fileInfomation_name1'),
            imagePreview1: document.getElementById('imagePreview1'),
            status1: document.getElementById('uploadFileStatus1')
        };
        this.imageData1 = "";
        this.fileTypes1 = ['image/png', 'image/jpeg', ];
        this.maxSize1 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self1.selector.status1.innerHTML = '';
            self1.selector.imagePreview1.setAttribute('src', "Images/default.jpg");
            self1.imageData1 = '';

            var file1 = e.target.files[0];
            this.selector.infoName1.innerHTML = file1.name;

            if (this.fileTypes1.indexOf(file1.type) == -1) {
                self1.selector.status1.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file1.size > this.maxSize1) {
                self1.selector.status1.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader1 = new FileReader();
            reader1.onload = function(e) {
                self1.imageData1 = e.target.result;

                self1.selector.imagePreview1.onerror = function() {
                    self1.imageData1 = "";
                    self1.selector.imagePreview1.setAttribute('src', "Images/default.jpg");
                    self1.selector.status1.innerHTML = "Nội dung không hợp lệ";
                };
                self1.selector.imagePreview1.setAttribute('src', self1.imageData1);
            };
            reader1.readAsDataURL(file1);
        };
        this.sendData = function() {
            if (this.imageData1 == "") {
                self1.selector.status1.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data1 = {
                'imageData1': this.imageData1
            };
            this.imageData1 = "";

            var request1 = new XMLHttpRequest();
            request1.open("POST", this.uploadUrl);
            request1.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request1.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self1.selector.status1.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self1.selector.status1.innerHTML = "Errorssss";
                }
            };
            request1.send(JSON.stringify(data1));
        };
        this.selector.fileInput1.addEventListener('change', function(e) {
            self1.onChangeInput(e);
        });
        this.selector.fileInputBtn1.addEventListener('click', function() {
            self1.selector.fileInput1.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUploadd();
    });

    //3
    var imageUpload2 = function() {
        var self2 = this;
        this.selector = {
            fileInput2: document.getElementById('ImageUploadInputt2'),
            fileInputBtn2: document.getElementById('imageUploadInputBtn2'),
            infoName2: document.getElementById('fileInfomation_name2'),
            imagePreview2: document.getElementById('imagePreview2'),
            status2: document.getElementById('uploadFileStatus2')
        };
        this.imageData2 = "";
        this.fileTypes2 = ['image/png', 'image/jpeg', ];
        this.maxSize2 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self2.selector.status2.innerHTML = '';
            self2.selector.imagePreview2.setAttribute('src', "Images/default.jpg");
            self2.imageData2 = '';

            var file2 = e.target.files[0];
            this.selector.infoName2.innerHTML = file2.name;

            if (this.fileTypes2.indexOf(file2.type) == -1) {
                self2.selector.status2.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file2.size > this.maxSize2) {
                self2.selector.status2.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader2 = new FileReader();
            reader2.onload = function(e) {
                self2.imageData2 = e.target.result;

                self2.selector.imagePreview2.onerror = function() {
                    self2.imageData2 = "";
                    self2.selector.imagePreview2.setAttribute('src', "Images/default.jpg");
                    self2.selector.status2.innerHTML = "Nội dung không hợp lệ";
                };
                self2.selector.imagePreview2.setAttribute('src', self2.imageData2);
            };
            reader2.readAsDataURL(file2);
        };
        this.sendData = function() {
            if (this.imageData2 == "") {
                self2.selector.status2.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data2 = {
                'imageData2': this.imageData2
            };
            this.imageData2 = "";

            var request2 = new XMLHttpRequest();
            request2.open("POST", this.uploadUrl);
            request2.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request2.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self2.selector.status2.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self2.selector.status2.innerHTML = "Errorssss";
                }
            };
            request2.send(JSON.stringify(data2));
        };
        this.selector.fileInput2.addEventListener('change', function(e) {
            self2.onChangeInput(e);
        });
        this.selector.fileInputBtn2.addEventListener('click', function() {
            self2.selector.fileInput2.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload2();
    });

    //4
    var imageUpload3 = function() {
        var self3 = this;
        this.selector = {
            fileInput3: document.getElementById('ImageUploadInputt3'),
            fileInputBtn3: document.getElementById('imageUploadInputBtn3'),
            infoName3: document.getElementById('fileInfomation_name3'),
            imagePreview3: document.getElementById('imagePreview3'),
            status3: document.getElementById('uploadFileStatus3')
        };
        this.imageData3 = "";
        this.fileTypes3 = ['image/png', 'image/jpeg', ];
        this.maxSize3 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self3.selector.status3.innerHTML = '';
            self3.selector.imagePreview3.setAttribute('src', "Images/default.jpg");
            self3.imageData3 = '';

            var file3 = e.target.files[0];
            this.selector.infoName3.innerHTML = file3.name;

            if (this.fileTypes3.indexOf(file3.type) == -1) {
                self3.selector.status3.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file3.size > this.maxSize3) {
                self3.selector.status3.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader3 = new FileReader();
            reader3.onload = function(e) {
                self3.imageData3 = e.target.result;

                self3.selector.imagePreview3.onerror = function() {
                    self3.imageData3 = "";
                    self3.selector.imagePreview3.setAttribute('src', "Images/default.jpg");
                    self3.selector.status3.innerHTML = "Nội dung không hợp lệ";
                };
                self3.selector.imagePreview3.setAttribute('src', self3.imageData3);
            };
            reader3.readAsDataURL(file3);
        };
        this.sendData = function() {
            if (this.imageData3 == "") {
                self3.selector.status3.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data3 = {
                'imageData3': this.imageData3
            };
            this.imageData3 = "";

            var request3 = new XMLHttpRequest();
            request3.open("POST", this.uploadUrl);
            request3.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request3.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self3.selector.status3.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self3.selector.status3.innerHTML = "Errorssss";
                }
            };
            request3.send(JSON.stringify(data3));
        };
        this.selector.fileInput3.addEventListener('change', function(e) {
            self3.onChangeInput(e);
        });
        this.selector.fileInputBtn3.addEventListener('click', function() {
            self3.selector.fileInput3.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload3();
    });

    //5
    var imageUpload4 = function() {
        var self4 = this;
        this.selector = {
            fileInput4: document.getElementById('ImageUploadInputt4'),
            fileInputBtn4: document.getElementById('imageUploadInputBtn4'),
            infoName4: document.getElementById('fileInfomation_name4'),
            imagePreview4: document.getElementById('imagePreview4'),
            status4: document.getElementById('uploadFileStatus4')
        };
        this.imageData4 = "";
        this.fileTypes4 = ['image/png', 'image/jpeg', ];
        this.maxSize4 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self4.selector.status4.innerHTML = '';
            self4.selector.imagePreview4.setAttribute('src', "Images/default.jpg");
            self4.imageData4 = '';

            var file4 = e.target.files[0];
            this.selector.infoName4.innerHTML = file4.name;

            if (this.fileTypes4.indexOf(file4.type) == -1) {
                self4.selector.status4.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file4.size > this.maxSize4) {
                self4.selector.status4.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader4 = new FileReader();
            reader4.onload = function(e) {
                self4.imageData4 = e.target.result;

                self4.selector.imagePreview4.onerror = function() {
                    self4.imageData4 = "";
                    self4.selector.imagePreview4.setAttribute('src', "Images/default.jpg");
                    self4.selector.status4.innerHTML = "Nội dung không hợp lệ";
                };
                self4.selector.imagePreview4.setAttribute('src', self4.imageData4);
            };
            reader4.readAsDataURL(file4);
        };
        this.sendData = function() {
            if (this.imageData4 == "") {
                self4.selector.status4.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data4 = {
                'imageData4': this.imageData4
            };
            this.imageData4 = "";

            var request4 = new XMLHttpRequest();
            request4.open("POST", this.uploadUrl);
            request4.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request4.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self4.selector.status4.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self4.selector.status4.innerHTML = "Errorssss";
                }
            };
            request4.send(JSON.stringify(data4));
        };
        this.selector.fileInput4.addEventListener('change', function(e) {
            self4.onChangeInput(e);
        });
        this.selector.fileInputBtn4.addEventListener('click', function() {
            self4.selector.fileInput4.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload4();
    });

    //6
    var imageUpload5 = function() {
        var self5 = this;
        this.selector = {
            fileInput5: document.getElementById('ImageUploadInputt5'),
            fileInputBtn5: document.getElementById('imageUploadInputBtn5'),
            infoName5: document.getElementById('fileInfomation_name5'),
            imagePreview5: document.getElementById('imagePreview5'),
            status5: document.getElementById('uploadFileStatus5')
        };
        this.imageData5 = "";
        this.fileTypes5 = ['image/png', 'image/jpeg', ];
        this.maxSize5 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self5.selector.status5.innerHTML = '';
            self5.selector.imagePreview5.setAttribute('src', "Images/default.jpg");
            self5.imageData5 = '';

            var file5 = e.target.files[0];
            this.selector.infoName5.innerHTML = file5.name;

            if (this.fileTypes5.indexOf(file5.type) == -1) {
                self5.selector.status5.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file5.size > this.maxSize5) {
                self5.selector.status5.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader5 = new FileReader();
            reader5.onload = function(e) {
                self5.imageData5 = e.target.result;

                self5.selector.imagePreview5.onerror = function() {
                    self5.imageData5 = "";
                    self5.selector.imagePreview5.setAttribute('src', "Images/default.jpg");
                    self5.selector.status5.innerHTML = "Nội dung không hợp lệ";
                };
                self5.selector.imagePreview5.setAttribute('src', self5.imageData5);
            };
            reader5.readAsDataURL(file5);
        };
        this.sendData = function() {
            if (this.imageData5 == "") {
                self5.selector.status5.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data5 = {
                'imageData5': this.imageData5
            };
            this.imageData5 = "";

            var request5 = new XMLHttpRequest();
            request5.open("POST", this.uploadUrl);
            request5.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request5.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self5.selector.status5.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self5.selector.status5.innerHTML = "Errorssss";
                }
            };
            request5.send(JSON.stringify(data5));
        };
        this.selector.fileInput5.addEventListener('change', function(e) {
            self5.onChangeInput(e);
        });
        this.selector.fileInputBtn5.addEventListener('click', function() {
            self5.selector.fileInput5.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload5();
    });

    //7
    var imageUpload6 = function() {
        var self6 = this;
        this.selector = {
            fileInput6: document.getElementById('ImageUploadInputt6'),
            fileInputBtn6: document.getElementById('imageUploadInputBtn6'),
            infoName6: document.getElementById('fileInfomation_name6'),
            imagePreview6: document.getElementById('imagePreview6'),
            status6: document.getElementById('uploadFileStatus6')
        };
        this.imageData6 = "";
        this.fileTypes6 = ['image/png', 'image/jpeg', ];
        this.maxSize6 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self6.selector.status6.innerHTML = '';
            self6.selector.imagePreview6.setAttribute('src', "Images/default.jpg");
            self6.imageData6 = '';

            var file6 = e.target.files[0];
            this.selector.infoName6.innerHTML = file6.name;

            if (this.fileTypes6.indexOf(file6.type) == -1) {
                self6.selector.status6.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file6.size > this.maxSize6) {
                self6.selector.status6.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader6 = new FileReader();
            reader6.onload = function(e) {
                self6.imageData6 = e.target.result;

                self6.selector.imagePreview6.onerror = function() {
                    self6.imageData6 = "";
                    self6.selector.imagePreview6.setAttribute('src', "Images/default.jpg");
                    self6.selector.status6.innerHTML = "Nội dung không hợp lệ";
                };
                self6.selector.imagePreview6.setAttribute('src', self6.imageData6);
            };
            reader6.readAsDataURL(file6);
        };
        this.sendData = function() {
            if (this.imageData6 == "") {
                self6.selector.status6.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data6 = {
                'imageData6': this.imageData6
            };
            this.imageData6 = "";

            var request6 = new XMLHttpRequest();
            request6.open("POST", this.uploadUrl);
            request6.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request6.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self6.selector.status6.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self6.selector.status6.innerHTML = "Errorssss";
                }
            };
            request6.send(JSON.stringify(data6));
        };
        this.selector.fileInput6.addEventListener('change', function(e) {
            self6.onChangeInput(e);
        });
        this.selector.fileInputBtn6.addEventListener('click', function() {
            self6.selector.fileInput6.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload6();
    });

    //8
    var imageUpload7 = function() {
        var self7 = this;
        this.selector = {
            fileInput7: document.getElementById('ImageUploadInputt7'),
            fileInputBtn7: document.getElementById('imageUploadInputBtn7'),
            infoName7: document.getElementById('fileInfomation_name7'),
            imagePreview7: document.getElementById('imagePreview7'),
            status7: document.getElementById('uploadFileStatus7')
        };
        this.imageData7 = "";
        this.fileTypes7 = ['image/png', 'image/jpeg', ];
        this.maxSize7 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self7.selector.status7.innerHTML = '';
            self7.selector.imagePreview7.setAttribute('src', "Images/default.jpg");
            self7.imageData7 = '';

            var file7 = e.target.files[0];
            this.selector.infoName7.innerHTML = file7.name;

            if (this.fileTypes7.indexOf(file7.type) == -1) {
                self7.selector.status7.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file7.size > this.maxSize7) {
                self7.selector.status7.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader7 = new FileReader();
            reader7.onload = function(e) {
                self7.imageData7 = e.target.result;

                self7.selector.imagePreview7.onerror = function() {
                    self7.imageData7 = "";
                    self7.selector.imagePreview7.setAttribute('src', "Images/default.jpg");
                    self7.selector.status7.innerHTML = "Nội dung không hợp lệ";
                };
                self7.selector.imagePreview7.setAttribute('src', self7.imageData7);
            };
            reader7.readAsDataURL(file7);
        };
        this.sendData = function() {
            if (this.imageData7 == "") {
                self7.selector.status7.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data7 = {
                'imageData7': this.imageData7
            };
            this.imageData7 = "";

            var request7 = new XMLHttpRequest();
            request7.open("POST", this.uploadUrl);
            request7.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request7.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self7.selector.status7.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self7.selector.status7.innerHTML = "Errorssss";
                }
            };
            request7.send(JSON.stringify(data7));
        };
        this.selector.fileInput7.addEventListener('change', function(e) {
            self7.onChangeInput(e);
        });
        this.selector.fileInputBtn7.addEventListener('click', function() {
            self7.selector.fileInput7.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload7();
    });

    //9
    var imageUpload8 = function() {
        var self8 = this;
        this.selector = {
            fileInput8: document.getElementById('ImageUploadInputt8'),
            fileInputBtn8: document.getElementById('imageUploadInputBtn8'),
            infoName8: document.getElementById('fileInfomation_name8'),
            imagePreview8: document.getElementById('imagePreview8'),
            status8: document.getElementById('uploadFileStatus8')
        };
        this.imageData8 = "";
        this.fileTypes8 = ['image/png', 'image/jpeg', ];
        this.maxSize8 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self8.selector.status8.innerHTML = '';
            self8.selector.imagePreview8.setAttribute('src', "Images/default.jpg");
            self8.imageData8 = '';

            var file8 = e.target.files[0];
            this.selector.infoName8.innerHTML = file8.name;

            if (this.fileTypes8.indexOf(file8.type) == -1) {
                self8.selector.status8.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file8.size > this.maxSize8) {
                self8.selector.status8.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader8 = new FileReader();
            reader8.onload = function(e) {
                self8.imageData8 = e.target.result;

                self8.selector.imagePreview8.onerror = function() {
                    self8.imageData8 = "";
                    self8.selector.imagePreview8.setAttribute('src', "Images/default.jpg");
                    self8.selector.status8.innerHTML = "Nội dung không hợp lệ";
                };
                self8.selector.imagePreview8.setAttribute('src', self8.imageData8);
            };
            reader8.readAsDataURL(file8);
        };
        this.sendData = function() {
            if (this.imageData8 == "") {
                self8.selector.status8.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data8 = {
                'imageData8': this.imageData8
            };
            this.imageData8 = "";

            var request8 = new XMLHttpRequest();
            request8.open("POST", this.uploadUrl);
            request8.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request8.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self8.selector.status8.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self8.selector.status8.innerHTML = "Errorssss";
                }
            };
            request8.send(JSON.stringify(data8));
        };
        this.selector.fileInput8.addEventListener('change', function(e) {
            self8.onChangeInput(e);
        });
        this.selector.fileInputBtn8.addEventListener('click', function() {
            self8.selector.fileInput8.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload8();
    });

    //10
    var imageUpload9 = function() {
        var self9 = this;
        this.selector = {
            fileInput9: document.getElementById('ImageUploadInputt9'),
            fileInputBtn9: document.getElementById('imageUploadInputBtn9'),
            infoName9: document.getElementById('fileInfomation_name9'),
            imagePreview9: document.getElementById('imagePreview9'),
            status9: document.getElementById('uploadFileStatus9')
        };
        this.imageData9 = "";
        this.fileTypes9 = ['image/png', 'image/jpeg', ];
        this.maxSize9 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self9.selector.status9.innerHTML = '';
            self9.selector.imagePreview9.setAttribute('src', "Images/default.jpg");
            self9.imageData9 = '';

            var file9 = e.target.files[0];
            this.selector.infoName9.innerHTML = file9.name;

            if (this.fileTypes9.indexOf(file9.type) == -1) {
                self9.selector.status9.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file9.size > this.maxSize9) {
                self9.selector.status9.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader9 = new FileReader();
            reader9.onload = function(e) {
                self9.imageData9 = e.target.result;

                self9.selector.imagePreview9.onerror = function() {
                    self9.imageData9 = "";
                    self9.selector.imagePreview9.setAttribute('src', "Images/default.jpg");
                    self9.selector.status9.innerHTML = "Nội dung không hợp lệ";
                };
                self9.selector.imagePreview9.setAttribute('src', self9.imageData9);
            };
            reader9.readAsDataURL(file9);
        };
        this.sendData = function() {
            if (this.imageData9 == "") {
                self9.selector.status9.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data9 = {
                'imageData9': this.imageData9
            };
            this.imageData = "";

            var request9 = new XMLHttpRequest();
            request9.open("POST", this.uploadUrl);
            request9.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request9.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self9.selector.status9.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self9.selector.status9.innerHTML = "Errorssss";
                }
            };
            request9.send(JSON.stringify(data9));
        };
        this.selector.fileInput9.addEventListener('change', function(e) {
            self9.onChangeInput(e);
        });
        this.selector.fileInputBtn9.addEventListener('click', function() {
            self9.selector.fileInput9.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload9();
    });

    //11
    var imageUpload10 = function() {
        var self10 = this;
        this.selector = {
            fileInput10: document.getElementById('ImageUploadInputt10'),
            fileInputBtn10: document.getElementById('imageUploadInputBtn10'),
            infoName10: document.getElementById('fileInfomation_name10'),
            imagePreview10: document.getElementById('imagePreview10'),
            status10: document.getElementById('uploadFileStatus10')
        };
        this.imageData10 = "";
        this.fileTypes10 = ['image/png', 'image/jpeg', ];
        this.maxSize10 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self10.selector.status10.innerHTML = '';
            self10.selector.imagePreview10.setAttribute('src', "Images/default.jpg");
            self10.imageData10 = '';

            var file10 = e.target.files[0];
            this.selector.infoName10.innerHTML = file10.name;

            if (this.fileTypes10.indexOf(file10.type) == -1) {
                self10.selector.status10.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file10.size > this.maxSize10) {
                self10.selector.status10.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader10 = new FileReader();
            reader10.onload = function(e) {
                self10.imageData10 = e.target.result;

                self10.selector.imagePreview10.onerror = function() {
                    self10.imageData10 = "";
                    self10.selector.imagePreview10.setAttribute('src', "Images/default.jpg");
                    self10.selector.status10.innerHTML = "Nội dung không hợp lệ";
                };
                self10.selector.imagePreview10.setAttribute('src', self10.imageData10);
            };
            reader10.readAsDataURL(file10);
        };
        this.sendData = function() {
            if (this.imageData10 == "") {
                self10.selector.status10.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data10 = {
                'imageData10': this.imageData10
            };
            this.imageData = "";

            var request10 = new XMLHttpRequest();
            request10.open("POST", this.uploadUrl);
            request10.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request10.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self10.selector.status10.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self10.selector.status10.innerHTML = "Errorssss";
                }
            };
            request10.send(JSON.stringify(data10));
        };
        this.selector.fileInput10.addEventListener('change', function(e) {
            self10.onChangeInput(e);
        });
        this.selector.fileInputBtn10.addEventListener('click', function() {
            self10.selector.fileInput10.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload10();
    });

    //12
    var imageUpload11 = function() {
        var self11 = this;
        this.selector = {
            fileInput11: document.getElementById('ImageUploadInputt11'),
            fileInputBtn11: document.getElementById('imageUploadInputBtn11'),
            infoName11: document.getElementById('fileInfomation_name11'),
            imagePreview11: document.getElementById('imagePreview11'),
            status11: document.getElementById('uploadFileStatus11')
        };
        this.imageData11 = "";
        this.fileTypes11 = ['image/png', 'image/jpeg', ];
        this.maxSize11 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self11.selector.status11.innerHTML = '';
            self11.selector.imagePreview11.setAttribute('src', "Images/default.jpg");
            self11.imageData11 = '';

            var file11 = e.target.files[0];
            this.selector.infoName11.innerHTML = file11.name;

            if (this.fileTypes11.indexOf(file11.type) == -1) {
                self11.selector.status11.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file11.size > this.maxSize11) {
                self11.selector.status11.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader11 = new FileReader();
            reader11.onload = function(e) {
                self11.imageData11 = e.target.result;

                self11.selector.imagePreview11.onerror = function() {
                    self11.imageData11 = "";
                    self11.selector.imagePreview11.setAttribute('src', "Images/default.jpg");
                    self11.selector.status11.innerHTML = "Nội dung không hợp lệ";
                };
                self11.selector.imagePreview11.setAttribute('src', self11.imageData11);
            };
            reader11.readAsDataURL(file11);
        };
        this.sendData = function() {
            1
            if (this.imageData11 == "") {
                self11.selector.status11.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data11 = {
                'imageData11': this.imageData11
            };
            this.imageData = "";

            var request11 = new XMLHttpRequest();
            request11.open("POST", this.uploadUrl);
            request11.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request11.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self11.selector.status11.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self11.selector.status11.innerHTML = "Errorssss";
                }
            };
            request11.send(JSON.stringify(data11));
        };
        this.selector.fileInput11.addEventListener('change', function(e) {
            self11.onChangeInput(e);
        });
        this.selector.fileInputBtn11.addEventListener('click', function() {
            self11.selector.fileInput11.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload11();
    });

    //13
    var imageUpload12 = function() {
        var self12 = this;
        this.selector = {
            fileInput12: document.getElementById('ImageUploadInputt12'),
            fileInputBtn12: document.getElementById('imageUploadInputBtn12'),
            infoName12: document.getElementById('fileInfomation_name12'),
            imagePreview12: document.getElementById('imagePreview12'),
            status12: document.getElementById('uploadFileStatus12')
        };
        this.imageData12 = "";
        this.fileTypes12 = ['image/png', 'image/jpeg', ];
        this.maxSize12 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self12.selector.status12.innerHTML = '';
            self12.selector.imagePreview12.setAttribute('src', "Images/default.jpg");
            self12.imageData12 = '';

            var file12 = e.target.files[0];
            this.selector.infoName12.innerHTML = file12.name;

            if (this.fileTypes12.indexOf(file12.type) == -1) {
                self12.selector.status12.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file12.size > this.maxSize12) {
                self12.selector.status12.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader12 = new FileReader();
            reader12.onload = function(e) {
                self12.imageData12 = e.target.result;

                self12.selector.imagePreview12.onerror = function() {
                    self12.imageData12 = "";
                    self12.selector.imagePreview12.setAttribute('src', "Images/default.jpg");
                    self12.selector.status12.innerHTML = "Nội dung không hợp lệ";
                };
                self12.selector.imagePreview12.setAttribute('src', self12.imageData12);
            };
            reader12.readAsDataURL(file12);
        };
        this.sendData = function() {
            1
            if (this.imageData12 == "") {
                self12.selector.status12.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data12 = {
                'imageData12': this.imageData12
            };
            this.imageData = "";

            var request12 = new XMLHttpRequest();
            request12.open("POST", this.uploadUrl);
            request12.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request12.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self12.selector.status12.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self12.selector.status12.innerHTML = "Errorssss";
                }
            };
            request12.send(JSON.stringify(data12));
        };
        this.selector.fileInput12.addEventListener('change', function(e) {
            self12.onChangeInput(e);
        });
        this.selector.fileInputBtn12.addEventListener('click', function() {
            self12.selector.fileInput12.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload12();
    });

    //14
    var imageUpload13 = function() {
        var self13 = this;
        this.selector = {
            fileInput13: document.getElementById('ImageUploadInputt13'),
            fileInputBtn13: document.getElementById('imageUploadInputBtn13'),
            infoName13: document.getElementById('fileInfomation_name13'),
            imagePreview13: document.getElementById('imagePreview13'),
            status13: document.getElementById('uploadFileStatus13')
        };
        this.imageData13 = "";
        this.fileTypes13 = ['image/png', 'image/jpeg', ];
        this.maxSize13 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self13.selector.status13.innerHTML = '';
            self13.selector.imagePreview13.setAttribute('src', "Images/default.jpg");
            self13.imageData13 = '';

            var file13 = e.target.files[0];
            this.selector.infoName13.innerHTML = file13.name;

            if (this.fileTypes13.indexOf(file13.type) == -1) {
                self13.selector.status13.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file13.size > this.maxSize13) {
                self13.selector.status13.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader13 = new FileReader();
            reader13.onload = function(e) {
                self13.imageData13 = e.target.result;

                self13.selector.imagePreview13.onerror = function() {
                    self13.imageData13 = "";
                    self13.selector.imagePreview13.setAttribute('src', "Images/default.jpg");
                    self13.selector.status13.innerHTML = "Nội dung không hợp lệ";
                };
                self13.selector.imagePreview13.setAttribute('src', self13.imageData13);
            };
            reader13.readAsDataURL(file13);
        };
        this.sendData = function() {
            1
            if (this.imageData13 == "") {
                self13.selector.status13.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data13 = {
                'imageData13': this.imageData13
            };
            this.imageData = "";

            var request13 = new XMLHttpRequest();
            request13.open("POST", this.uploadUrl);
            request13.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request13.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self13.selector.status13.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self13.selector.status13.innerHTML = "Errorssss";
                }
            };
            request13.send(JSON.stringify(data13));
        };
        this.selector.fileInput13.addEventListener('change', function(e) {
            self13.onChangeInput(e);
        });
        this.selector.fileInputBtn13.addEventListener('click', function() {
            self13.selector.fileInput13.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload13();
    });

    //15
    var imageUpload14 = function() {
        var self14 = this;
        this.selector = {
            fileInput14: document.getElementById('ImageUploadInputt14'),
            fileInputBtn14: document.getElementById('imageUploadInputBtn14'),
            infoName14: document.getElementById('fileInfomation_name14'),
            imagePreview14: document.getElementById('imagePreview14'),
            status14: document.getElementById('uploadFileStatus14')
        };
        this.imageData14 = "";
        this.fileTypes14 = ['image/png', 'image/jpeg', ];
        this.maxSize14 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self14.selector.status14.innerHTML = '';
            self14.selector.imagePreview14.setAttribute('src', "Images/default.jpg");
            self14.imageData14 = '';

            var file14 = e.target.files[0];
            this.selector.infoName14.innerHTML = file14.name;

            if (this.fileTypes14.indexOf(file14.type) == -1) {
                self14.selector.status14.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file14.size > this.maxSize14) {
                self14.selector.status14.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader14 = new FileReader();
            reader14.onload = function(e) {
                self14.imageData14 = e.target.result;

                self14.selector.imagePreview14.onerror = function() {
                    self14.imageData14 = "";
                    self14.selector.imagePreview14.setAttribute('src', "Images/default.jpg");
                    self14.selector.status14.innerHTML = "Nội dung không hợp lệ";
                };
                self14.selector.imagePreview14.setAttribute('src', self14.imageData14);
            };
            reader14.readAsDataURL(file14);
        };
        this.sendData = function() {
            1
            if (this.imageData14 == "") {
                self14.selector.status14.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data14 = {
                'imageData14': this.imageData14
            };
            this.imageData = "";

            var request14 = new XMLHttpRequest();
            request14.open("POST", this.uploadUrl);
            request14.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request14.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self14.selector.status14.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self14.selector.status14.innerHTML = "Errorssss";
                }
            };
            request14.send(JSON.stringify(data14));
        };
        this.selector.fileInput14.addEventListener('change', function(e) {
            self14.onChangeInput(e);
        });
        this.selector.fileInputBtn14.addEventListener('click', function() {
            self14.selector.fileInput14.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload14();
    });

    //16
    var imageUpload15 = function() {
        var self15 = this;
        this.selector = {
            fileInput15: document.getElementById('ImageUploadInputt15'),
            fileInputBtn15: document.getElementById('imageUploadInputBtn15'),
            infoName15: document.getElementById('fileInfomation_name15'),
            imagePreview15: document.getElementById('imagePreview15'),
            status15: document.getElementById('uploadFileStatus15')
        };
        this.imageData15 = "";
        this.fileTypes15 = ['image/png', 'image/jpeg', ];
        this.maxSize15 = 30 * 1024 * 1024; // 30MB
        this.onChangeInput = function(e) {
            // Reset file data / image preview
            self15.selector.status15.innerHTML = '';
            self15.selector.imagePreview15.setAttribute('src', "Images/default.jpg");
            self15.imageData15 = '';

            var file15 = e.target.files[0];
            this.selector.infoName15.innerHTML = file15.name;

            if (this.fileTypes15.indexOf(file15.type) == -1) {
                self15.selector.status15.innerHTML = "File không hợp lệ (chỉ file hình jpg và hình png được chấp nhận)";
                return;
            }

            if (file15.size > this.maxSize15) {
                self15.selector.status15.innerHTML = "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                return;
            }

            var reader15 = new FileReader();
            reader15.onload = function(e) {
                self15.imageData15 = e.target.result;

                self15.selector.imagePreview15.onerror = function() {
                    self15.imageData15 = "";
                    self15.selector.imagePreview15.setAttribute('src', "Images/default.jpg");
                    self15.selector.status15.innerHTML = "Nội dung không hợp lệ";
                };
                self15.selector.imagePreview15.setAttribute('src', self15.imageData15);
            };
            reader15.readAsDataURL(file15);
        };
        this.sendData = function() {
            1
            if (this.imageData15 == "") {
                self15.selector.status15.innerHTML = 'Vui lòng chọn hình để tải lên';
                return;
            }

            var data15 = {
                'imageData15': this.imageData15
            };
            this.imageData = "";

            var request15 = new XMLHttpRequest();
            request15.open("POST", this.uploadUrl);
            request15.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            request15.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    self15.selector.status15.innerHTML = "Upload Thành Công";
                } else {
                    console.log(this.responseText);
                    self15.selector.status15.innerHTML = "Errorssss";
                }
            };
            request15.send(JSON.stringify(data15));
        };
        this.selector.fileInput15.addEventListener('change', function(e) {
            self15.onChangeInput(e);
        });
        this.selector.fileInputBtn15.addEventListener('click', function() {
            self15.selector.fileInput15.click();
        });
    };
    window.addEventListener("DOMContentLoaded", function() {
        console.log('DOM is loaded');
        new imageUpload15();
    });
})();

// js: Loading

$(window).on('load', function(event) {
    $('body').removeClass('preloading');
    $('.loadding').delay(200).fadeOut('fast');
});



//************************************************************************************************************************************************************ */