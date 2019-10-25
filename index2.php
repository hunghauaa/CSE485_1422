<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['name'])) {
	 header('Location: dangnhap.php');
}
?><!doctype html>
<html lang="en">
  <head>
    <title>Đại học Nguyễn Tất Thành</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index2.css">
    <script src="https://kit.fontawesome.com/99a72c5f82.js" crossorigin="anonymous"></script>
  </head>
  <body>
	<div class="row">
		<div class="col-md-12">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="#" style="color: #fdb913; font-size: 13px">HOTLINE:  0902.298.300-0906.298.300</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" >SINH VIÊN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">GIẢNG VIÊN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">ĐÀO TẠO QUỐC TẾ</a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <span class="icon"><i class="fa fa-search"></i></span>
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <img src="http://ntt.edu.vn/web/frontend/images/ico-flagen.jpg" alt="">
                    </form>
                </div>
            </nav>
		</div>
    </div>
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav">
                        <li><img src="http://ntt.edu.vn/web/frontend/images/logo_ntt.png" alt=""></li>
                        <li class="nav-item1">
                            <a class="nav-link active" href="#"><i class="fas fa-info-circle"></i><span style="color: black;">Giới thiệu</span></a>
                        </li>
                        <li class="nav-item1">
                            <a class="nav-link" href="#"><i class="fa fa-mortar-board"></i> <span style="color: black;">Tuyển sinh</span></a>
                        </li>
                        <li class="nav-item1">
                            <a class="nav-link " href="#"><i class="fas fa-book"></i> <span style="color: black;">Đào tạo</span></a>
                        </li>
                        <li class="nav-item1">
                            <a class="nav-link" href="#"><i class="fas fa-bookmark"></i> <span style="color: black;">Nghiên cứu</span></a>
                        </li>
                        <li class="nav-item1">
                            <a class="nav-link" href="#"><i class="far fa-handshake"></i> <span style="color: black;">Hợp tác doanh nghiệp</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
         <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" id="carousel-412809">
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#carousel-412809" class="active">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-412809">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-412809">
                        </li>
                        <li data-slide-to="3" data-target="#carousel-412809">
                        </li>
                        <li data-slide-to="4" data-target="#carousel-412809">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" alt="Carousel Bootstrap First" src="http://ntt.edu.vn/web/upload/images/slider/Chinh-sach-hoc-bong-NTTU_Web-Slider.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    Chính sách học bổng của Trường đại học Nguyễn Tất Thành năm 2019
                                </h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Second" src="http://ntt.edu.vn/web/upload/images/slider/Lien-thong-NTTU_Web-Slider.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    Tuyển sinh liên thông 2019
                                </h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third" src="http://ntt.edu.vn/web/upload/images/slider/Tham-van-chuyen-gia-NTTU_Web-Slider.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    Lịch phát sóng Chương trình Tham vấn chuyên gia
                                </h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third" src="http://ntt.edu.vn/web/upload/images/slider/Tuyen-sinh-Thac-sy-NTTU-2019.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    Tuyển sinh trình độ Thạc Sĩ năm 2019 tại Đại học Nguyễn Tất Thành
                                </h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third" src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201910_tin/Thac-sy-MUST_Web-Slider.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    Tuyển sinh Thạc sĩ quốc tế chuyên ngành Chuỗi cung ứng
                                </h4>
                            </div>
                        </div>
                    </div> <a class="carousel-control-prev" href="#carousel-412809" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-412809" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
                    <a href=""><u style="color: black;">Tin tức</u></a><br><br>
					<div class="card">
                        <img class="card-img-top" alt="Bootstrap Thumbnail First" src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201910_tin/Thac-sy-MUST_Web-Post.jpg" />
                        <br>
                        <br>
						<div class="card-block">
							<h5 class="card-title">
                            ĐH Nguyễn Tất Thành và ĐH MUST, Malaysia, phối hợp đào tạo ngành Quản lý Chuỗi cung
							</h5>
							<p class="card-text">
                            NTTU - Trường ĐH Nguyễn Tất Thành phối hợp với Trường ĐH MUST, Malaysia đào tạo ngành Quản lý Chuỗi cung ứng trình độ thạc sỹ. Chương trình học toàn thời gian trong vòng 1,5 năm được chia làm 3 học kỳ tổng
                            </p>
                            <br><br>
							<p>
                            <a class="btn" href="#">Xem thêm</a>							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
                    <br><br>
					<div class="card">
                        <img class="card-img-top" alt="Bootstrap Thumbnail Second" src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201910_tin/t%E1%BA%A3i%20xu%E1%BB%91ng.png" />
                        <br>
                        
						<div class="card-block">
							<h5 class="card-title">
                            51 sinh viên khoa Dược bậc đại học khóa 2014 – 2019 bảo vệ thành công khóa luận tốt nghiệp
							</h5>
							<p class="card-text">
                            NTTU - Vừa qua, khoa Dược Trường ĐH Nguyễn Tất Thành đã tổ chức thành công buổi bảo vệ Khóa luận tốt nghiệp cho sinh viên đại học hệ chính quy khóa 2014 – 2019. Sau 5 năm tích cực học tập và nghiên cứu,
                            </p>
                            <br><br>
							<p>
                            <a class="btn" href="#">Xem thêm</a>							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
                    <br><br>
					<div class="card">
                        <img class="card-img-top" alt="Bootstrap Thumbnail Third" src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201910_tin/Thac-sy-Dot-2_Web-Post.jpg" />
                        <br>
                        <br>
						<div class="card-block">
							<h5 class="card-title">
                                 ĐH Nguyễn Tất Thành tuyển sinh Thạc sỹ đợt 2 năm 2019
							</h5>
							<p class="card-text">
                            NTTU – Viện Nghiên cứu và Đào tạo sau đại học Trường ĐH Nguyễn Tất Thành thông báo tuyển sinh bậc sau đại học đợt 2 năm 2019. Hồ sơ nhận đến ngày 30/10/2019
                            </p>
                            <br><br><br><br>
							<p>
                            <a class="btn" href="#">Xem thêm</a>							</p>
						</div>
					</div>
                </div>
                <div class="col-md-3">
                    <a href=""><u style="color: black;">Media</u></a>
                    <br><br>    
					<div class="card">
                    <iframe style="width: inherit;" src="https://www.youtube.com/embed/AWEnDkvhJHE" frameborder="0" allowfullscreen=""></iframe>
                        <br>
                        <br>
                        <br>

						<div class="card-block">
                            <ul>
                                <li><a href="">ĐH Nguyễn Tất Thành tiến hành tổ chức kiểm định chương trình đào tạo theo tiêu chuẩn AUN-QA</a></li>
                                <li><a href="">ĐIỂM TIN THÁNG 8</a></li>
                                <li><a href="">ĐH Nguyễn Tất Thành – 20 năm dấu ấn một chặng đường</a></li>
                            </ul>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
							<p>
								<a class="btn" href="#">Xem thêm</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <br>
    <hr>
    
    <div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
                <a href="#"><u style="color: black;">Hợp tác quốc tế</u> </a> <br><br>
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201910_tin/72329960_550533865752919_8452850179488350208_n.jpg" />
						<div class="card-block">
							<h5 class="card-title">
                            Sinh viên Hàn Quốc tham gia học tập Tiếng Việt ngắn hạn tại ĐH Nguyễn Tất Thành
							</h5>
							<p class="card-text">
                            NTTU – Sáng ngày 07/10/2019, tại cơ sở quận 7, Trường ĐH Nguyễn Tất Thành đã tổ chức thành công chương trình Khai giảng khóa học Tiếng Việt ĐH Kyungsung (Hàn Quốc)
                            </p>
                            <br> <br> <br> <br>
							<p>
								<a class="btn" href="#">Xem thêm</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
                <a href="#"><u style="color: black;">Môi trường học tập</u> </a> <br><br>
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="http://ntt.edu.vn/web/upload/images/3e3.JPG" />
						<div class="card-block">
							<h5 class="card-title">
                            Tìm hiểu về các câu lạc bộ tại Trường ĐH Nguyễn Tất Thành
							</h5>
							<p class="card-text">
                            NTTU - Những năm gần đây, bên cạnh việc nâng cao chất lượng đào tạo, Trường ĐH Nguyễn Tất Thành không ngừng phát triển mô hình câu lạc bộ sinh viên nhằm tạo môi trường học tập và vui chơi tốt nhất cho người học. Thông qua mô hình CLB, các bạn sinh viên có thể dễ dàng trao đổi kiến
							</p>
							<p>
								<a class="btn" href="#">Xem thêm</a>
							</p>
						</div>
					</div>
				</div>
                <div class="col-md-4 aa">
                    <a href="#"><u style="color: black;"> Sự kiện nổi bật</u> </a> 
                    <br><br>
                    <ul class="list-event">
                        <li class="media event">
                            <div class="oct">
                                <span>Oct <br> <b>10</b></span>
                            </div>
                            <div class="media-body">
                                <h5>Ngày Doanh nhân Việt Nam và Đại hội CLB Doanh nghiệp Trường Đại học Nguyễn Tất Thành</h5>
                                <i class="far fa-clock" > 7:30</i><br>
                                <span>
                                Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM
                                </span>
                            </div>
                        </li>
                        <br>
                        <li class="media event">
                            <div class="oct">
                                <span>Oct <br> <b>05</b></span>
                            </div>
                            <div class="media-body">
                                <h5>Lễ tốt nghiệp cho Sinh viên bậc Đại học liên thông từ Trung cấp khóa 2016; bậc Cao đẳng liên thông từ Trung cấp khóa 2017</h5>
                                <i class="far fa-clock" > 7:30</i><br>
                                <span>
                                Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM
                                </span>
                            </div>
                        </li>
                        <br>
                        <li class="media event">
                            <div class="oct">
                                <span>Oct <br> <b>25</b></span>
                            </div>
                            <div class="media-body">
                                <h5>Đại hội đại biểu Đoàn TNCS Hồ CHí Minh - Trường ĐH Nguyễn Tất Thành lần VII, nhiệm kỳ 2019 - 2022</h5>
                                <i class="far fa-clock" > 7:30</i><br>
                                <span>
                                Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
			</div>
		</div>
    </div>
    <br>
    <hr>
    <div class="row">
		<div class="col-md-12 abc">
            <div class="than">
            <div class="cot1">
                <ul class="ds1">
                    <li class="heading"><a href=""><b> ĐẠI HỌC NGUYỄN TẤT THÀNH</b></a></li> <br>
                    <li class="ds-1"><a href="#">Thư ngỏ</a></li>
                    <li class="ds-1"><a href="#">Tầm nhìn - Sứ mạng</a></li>
                    <li class="ds-1"><a href="#">Văn hóa ĐH Nguyễn Tất Thành</a></li>
                    <li class="ds-1"><a href="#">Thông tin 3 công khai</a></li>
                    <li class="ds-1"><a href="#">Đảm bảo chất lượng</a></li>
                    <li class="ds-1"><a href="#">Phát triển bền vững</a></li>
                    <li class="ds-1"><a href="#">Trường Trung cấp Nguyễn Tất Thành</a></li>
                    <li class="ds-1"><a href="#">Trường Tiểu học Anh Việt Mỹ</a></li>

                </ul>
            </div>
            <div class="cot2">
                <ul class="ds2">
                <li class="heading"><a href=""><b> PHÒNG-BAN</b></a></li> <br>
                <li class="heading"><a href=""><b> THƯ VIỆN</b></a></li> <br>
                <li class="heading"><a href=""><b> E-LEARNING</b></a></li> <br>
                </ul>
            </div>
            <div class="cot3">
                <ul class="ds1">
                    <li class="heading"><a href=""><b> TRUNG TÂM - VIỆN</b></a></li> <br>
                    <li class="ds-1"><a href="#">Viện Đào Tạo Quốc Tế</a></li>
                    <li class="ds-1"><a href="#">Viện Công Nghệ Cao</a></li>
                    <li class="ds-1"><a href="#">Viện Đào tạo Sau đại học</a></li>
                    <li class="ds-1"><a href="#">Trung tâm Thông tin Thư viện</a></li>
                    <li class="ds-1"><a href="#">TT Ngoại Ngữ</a></li>
                    <li class="ds-1"><a href="#">TT Tin Học NTT</a></li>
                    <li class="ds-1"><a href="#">TT QH Doanh Nghiệp & Khởi nghiệp</a></li>
                    <li class="ds-1"><a href="#">TT Đào tạo theo nhu cầu XH</a></li>
                    <li class="ds-1"><a href="#">TT Xuất khẩu lao động Texgamex</a></li>
                    <li class="ds-1"><a href="#">Công đoàn Trường ĐH Nguyễn Tất Thành</a></li>

                </ul>
            </div>
            <div class="cot4">
            <ul class="ds2">
                <li class="mb-2"><a href="#" class="btn"><i class="fab fa-facebook-square"></i>  Facebook</a></li>
                <li class="mb-2"><a href="#" class="btn"><i class="fab fa-google-plus-g"></i>  Google Plus</a></li>
                <li class="mb-2"><a href="#" class="btn"><i class="fab fa-youtube"></i>  Youtube</a></li>
                <li class="mb-2"><a href="#" class="btn"><i class="fas fa-envelope"></i>  Email</a></li>
                <li class="mb-2"><a href="#" class="btn"><i class="far fa-comments"></i>  Zalo</a></li>
                <li class="mb-2"><a href="#" class="btn"> <i class="fa fa-mortar-board"></i>  E-office</a></li>
                <li class="mb-2"><a href="#" class="btn"><i class="fas fa-users"></i>  Tuyển dụng</a></li>
            </ul>

            </div>
            </div>

		</div>
    </div>
    <div class="row">
		<div class="col-md-12">
            <div class="address">
                                        <div class="add1">           
                                            <p>
                                                <b>THÔNG TIN LIÊN HỆ </b><br>
                                                    Trụ sở chính: <b>300A – Nguyễn Tất Thành, Phường 13, Quận 4, TP. Hồ Chí Minh, Việt Nam</b> <br>
                                                    Điện thoại: <b> 1900 2039 </b>		Fax: <b>028 39 404 759</b><br>
                                                    Hotline: <b>0902 298 300 – 0906 298 300 – 0912 298 300 – 0914 298 300</b><br>
                                                    Email: <b>tttvtsinh@ntt.edu.vn – bangiamhieu@ntt.edu.vn </b>

                                                </p>
                                        </div>
                                                <div class=add2>
                                                    <p>©2017. Bản quyền thuộc về trường <b>Đại học Nguyễn Tất Thành</b></p>
                                                
                                                </div>
            </div>
		</div>
	</div>
 </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>