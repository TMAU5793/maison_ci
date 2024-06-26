<section class="content home header-top">
	<div class="banner slick mb-0">
		<div><img src="<?= base_url('images/banner.jpg') ?>" alt=""></div>
		<div><img src="<?= base_url('images/banner-2.jpg') ?>" alt=""></div>
	</div>
	<div class="design-concept pb-60" id="concept">
		<div class="container-fluid max-w-1600">
			<div class="row ptb-60">
				<div class="col-md-4 ff-trajan f-40">
					<div class="title-icon"></div>
					<div class="pl-5">
						<span class="d-block l-height-40">design</span>
						<span class="d-block l-height-40">concept</span>
					</div>
					<div class="h-line-220"></div>
				</div>
				<div class="col-md-8 text-uppercase">
					<span class="c-gold">จากความสง่างามของกรุงปารีสที่โดดเด่นด้วยความเป็น "Stylish Elegance" สู่การออกแบบที่อยู่อาศัย "Elegant Stylish House”</span>
					<span>บนโครงการ Maison Blanche (เมซอง บลองช) “บ้านเดี่ยวส่วนตัวใจกลางสุขุมวิท” ด้วยดีไซน์โมเดิร์นนีโอคลาสิค ที่ยังคงความสมบูรณ์แบบ หรูหรา และโดดเด่นแบบสไตล์ลีส ช่วยเติมเต็มในชีวิตยุคใหม่แบบ Exclusive บนพื้นที่ส่วนตัว 4 ห้องนอน 6 ห้องน้ำ ห้องแม่บ้าน สระว่ายน้ำ และมุมพิเศษ working from home ส่วนตัว เพื่อเป็นทั้งพื้นที่แห่งการพักผ่อน พื้นที่แห่งการอยู่อาศัยแบบสง่างาม มุมแห่งความครีเอทีฟ และยังเป็นพื้นที่ ที่สร้างความอบอุ่นได้อย่างดีที่สุด</span>
				</div>
			</div>
			<div class="design-concept-img">
				<img src="<?= base_url('images/desugn-concept.jpg') ?>" alt="">
			</div>
		</div>
	</div>
	<div class="project-detail pb-60" id="project">
		<div class="container-fluid max-w-1600">
			<div class="row pb-60">
				<div class="col-md-4 ff-trajan f-40">
					<div class="title-icon"></div>
					<div class="pl-5">
						<span class="d-block l-height-40">project</span>
						<span class="d-block l-height-40">detail</span>
					</div>
				</div>
			</div>
			<div class="row pb-60">
				<div class="col-md-5 text-right">
					<h2>เริ่มต้นเพียง 28 ล้านบาท</h2>
					<span class="d-block">เมซอง บลองซ์ ด้วยการออกแบบอย่างพิถีพิถัน</span>
					<span class="d-block">และใช้วัสดุคุณภาพ คือบ้านในฝันกลางเมือง</span>
					<span class="d-block">ที่แห่งความปรารถนาอย่างแท้จริง</span>
				</div>
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-6 text-center">
							<div>
								<p>พื้นที่ขนาด</p>
								<p>280- 450 ตรม.</p>
							</div>
							<div class="border-tb">
								<p>บ้านสามชั้นครึ่ง 4 ห้องนอน</p>
								<p>6 ห้องน้ำพร้อมห้องแม่บ้าน</p>
							</div>
							<div>
								<p>สระว่ายน้ำ ลิฟท์ส่วนตัวจากอิตาล</p>
								<p>สุขภัณฑ์จากวิเลอร์รอย แอนด์บอช</p>
							</div>
						</div>
						<div class="col-md-6 text-center">
							<div>
								<p>มุมทำงาน</p>
								<p>สำหรับหรูสง่า</p>
							</div>
							<div class="border-tb">
								<p>ครัวฝรั่งและ</p>
								<p>ครัวไทย</p>
							</div>
							<div>
								<p>ที่จอดรถ 3 คัน</p>
								<p>และมีที่จอดรถสำหรับแขก</p>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<div class="design-concept-img">
			<img src="<?= base_url('images/project-detail.jpg') ?>" alt="">
		</div>
	</div>
	<div class="gallery pb-60" id="gallery-section">
		<div class="row m-0">
			<div class="col-md-8">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="exterior_content" role="tabpanel" aria-labelledby="exterior_tab">
						<div class="row">
							<?php for ($i=1; $i < 7; $i++) { ?>
								<div class="col-md-4 p-0 zoom-in">
									<a class="fancybox" data-fancybox="gallery" data-width="2048" data-height="" data-caption="" href="<?= base_url('images/gallery/g-'.$i.'.jpg') ?>" title="">
										<img src="<?= base_url('images/gallery/g-'.$i.'.jpg') ?>">
									</a>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="tab-pane fade" id="interior_content" role="tabpanel" aria-labelledby="interior_tab">
						<div class="row">
							<?php for ($i=1; $i < 7; $i++) { ?>
								<div class="col-md-4 p-0 zoom-in">
									<a class="fancybox" data-fancybox="gallery" data-width="2048" data-height="" data-caption="" href="<?= base_url('images/gallery/g-'.$i.'.jpg') ?>" title="">
										<img src="<?= base_url('images/gallery/g-'.$i.'.jpg') ?>">
									</a>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="tab-pane fade" id="facilities_content" role="tabpanel" aria-labelledby="facilities_tab">
						<div class="row">
							<?php for ($i=1; $i < 7; $i++) { ?>
								<div class="col-md-4 p-0 zoom-in">
									<a class="fancybox" data-fancybox="gallery" data-width="2048" data-height="" data-caption="" href="<?= base_url('images/gallery/g-'.$i.'.jpg') ?>" title="">
										<img src="<?= base_url('images/gallery/g-'.$i.'.jpg') ?>">
									</a>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="title-icon"></div>
				<div class="pl-5">
					<span class="d-block l-height-40 ff-trajan f-40 mb-3">Gallery</span>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="exterior_tab" data-toggle="pill" href="#exterior_content" role="tab" aria-controls="exterior_content" aria-selected="true">Exterior</a>
						<a class="nav-link" id="interior_tab" data-toggle="pill" href="#interior_content" role="tab" aria-controls="interior_content" aria-selected="false">Interior</a>
						<a class="nav-link" id="facilities_tab" data-toggle="pill" href="#facilities_content" role="tab" aria-controls="facilities_content" aria-selected="false">Facilities</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="service" id="service">
		<div class="container-fluid max-w-1600">
			<div class="row ptb-60">
				<div class="col-md-4 ff-trajan f-40">
					<div class="title-icon-white"></div>
					<div class="pl-5 c-white">
						<span class="d-block l-height-40">concierge</span>
						<span class="d-block l-height-40">service</span>
					</div>
				</div>
				<div class="col-md-8 text-uppercase">
					<span class="c-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </span>
				</div>
			</div>			
		</div>
		<div class="row service-img m-0 pb-60">
			<div class="col-md-6">
				<div class="zoom-in service-main">
					<div class="service-main" style="background-image: url('../../images/services/s-1.jpg')"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-12 mb-4">
						<div class="zoom-in">
							<img src="<?= base_url('images/services/s-2.jpg') ?>" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="zoom-in">
							<img src="<?= base_url('images/services/s-3.jpg') ?>" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="zoom-in">
							<img src="<?= base_url('images/services/s-4.jpg') ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<div class="promotion ptb-60" id="promotions">
		<div class="ff-trajan f-40 d-flex max-w-320 pb-60">
			<div style="max-width: 26px;">
				<img src="<?= base_url('images/icons/list.png') ?>" alt="">
			</div>
			<div class="pl-3">
				<span class="d-block l-height-60">promotions</span>
			</div>
		</div>
		<div class="fontainer-fluid max-w-1600">
			<div class="row promotion-box">
				<div class="col-sm-5 col-md-4 c-white text-center p-3">
					<div class="p-5">
						<h2>รับส่วนลดพิเศษ</h2>
						<div class="under-line"></div>
						<h2>ก่อนเปิดขายโครงการ</h2>
						<h2>สำหรับผู้ลงทะเบียน</h2>
						<h2>400,000 บาท</h2>
						<p class="f-14 pb-60">และแถม Build in Closet ทุกห้อง*</p>						
					</div>
					<div class="logo-black center-x-bottom">
						<img src="<?= base_url('images/logo-black.png') ?>" alt="">
					</div>
				</div>
				<div class="col-sm-7 col-md-8 p-3">
					<div class="promotion-box-img" style="background-image: url('../../images/promotion.jpg');"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="map-location max-w-1600" id="location">
		<div class="row m-0 pb-60">
			<div class="col-md-8 pl-0 pr-5">
				<img src="<?= base_url('images/map.jpg') ?>" alt="">
			</div>
			<div class="col-md-4">
				<div class="mid-left">
					<div class="title-icon"></div>
					<div class="pl-5">
						<span class="d-block l-height-40 ff-trajan f-40">location</span>					
					</div>
					<div class="mt-3">
						<h4>sukhumvit 67, bangkok</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="register max-w-1600" id="register">
		<div class="pb-60">
			<div class="row m-0">			
				<div class="col-md-4">
					<div class="title-icon"></div>
					<div class="pl-5">
						<span class="d-block l-height-40 ff-trajan f-40">Registration</span>
						<p>ลงทะเบียนรับข่าวสารและ ข้อเสนอพิเศษก่อนใคร</p>
					</div>
				</div>
				<div class="col-md-8">
					<form id="frm_register" action="" method="">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
								</div>
							</div>
							<div class="col-md-12 f-20">
								<button type="submit" class="btn-sumit">SUBMIT</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	$(document).ready(function($) {
		$('.slick').slick({
			dots: true,
			arrows: false,
			autoplay: true
		});
	});
</script>