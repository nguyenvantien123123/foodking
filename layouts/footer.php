<footer style="background-color: #81d742 !important;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4>GIỚI THIỆU</h4>
				<ul>
					<li>LIÊN HỆ CÔNG TY CỔ PHẦN NHÓM 7 CỦA CHÚNG TÔI</li>
					<li><i class="bi bi-mailbox2"></i> khongco@gmail.com</li>
					<li><i class="bi bi-telephone-fill"></i> 123456789</li>
					<li><i class="bi bi-map-fill"></i> Ha Noi, Viet Nam</li>
					<li>Zeek đem lại sự khác biệt với đội ngũ tài xế có kinh nghiệm giao các loại hàng hoá đặc thù và đòi hỏi chất lượng dịch vụ cao. Việc giao các loại đồ tươi sống, hoa quả hay bánh kem... sẽ trở nên dễ dàng hơn với đội ngũ tài xế của Zeek</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4>SẢN PHẨM MỚI NHẤT</h4>
				<ul>
					<li>LIÊN HỆ CÔNG TY CỔ PHẦN NHÓM 7 CỦA CHÚNG TÔI</li>
					<li>Email: khongco@gmail.com </li>
					<li>Phone: 123456789</li>
					<li>Chúng tôi luôn luôn đem lại những muốn ăn hàng đầu thế giới.</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4>TIN TỨC MỚI NHẤT</h4>
				<ul>
					<li>LIÊN HỆ CÔNG TY CỔ PHẦN NHÓM 7 CỦA CHÚNG TÔI</li>
					<li>Email: khongco@gmail.com</li>
					<li>Phone: 123456789</li>
					<li>Chúng tôi luôn cập nhập tin tức mới nhất của của hàng của chúng tôi.</li>
				</ul>
			</div>
		</div>
	</div>
	<div style="background-color: #3f9609; width: 100%; text-align: center; padding: 20px;">
		© 2018 Zic Zac Group . Được thiết kế bời nhóm 7 bao gồm: Phạm Thị Mơ, Nguyễn Thị Ngoan, Lê Thị Phương Thương, Nguyễn Văn Tiến, Nguyễn Quyết Thắng
	</div>
</footer>

<?php
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}
$count = 0;
// var_dump($_SESSION['cart']);
foreach($_SESSION['cart'] as $item) {
	$count += $item['num'];
}
?>
<script type="text/javascript">
	function addCart(productId, num) {
		$.post('api/ajax_request.php', {
			'action': 'cart',
			'id': productId,
			'num': num
		}, function(data) {
			location.reload()
		})
	}
</script>
<!-- Cart start -->
<span class="cart_icon">
	<span class="cart_count"><?=$count?></span>
	<a href="cart.php"><img src="https://gokisoft.com/img/cart.png"></a>
</span>
<!-- Cart stop -->
</body>
</html>