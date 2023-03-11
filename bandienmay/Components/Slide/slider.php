<div class="slider">
	<div class="slides">
		<input type="radio" name="radio-btn" id="radio1">
		<input type="radio" name="radio-btn" id="radio2">
		<input type="radio" name="radio-btn" id="radio3">

		<div class="slide first">
			<img src="https://vcdn1-kinhdoanh.vnecdn.net/2019/10/25/Cover-8286-1571979674.jpg?w=0&h=0&q=100&dpr=1&fit=crop&s=72dA6-shoPQ1HcaTE96u-g" alt="" style="width:85pc">
		</div>
		<div class="slide">
			<img src="https://channel.mediacdn.vn/2019/6/10/photo-1-1560150401341415329606.jpg" alt="">
		</div>
		<div class="slide">
			<img src="https://dojeannam.com/wp-content/uploads/2021/10/BANNER-DONG-HO-NHAT-NAM.jpg" alt="" style="width:85pc">
		</div>

		<div class="navigation-auto">
			<div class="auto-btn1"></div>
			<div class="auto-btn2"></div>
			<div class="auto-btn3"></div>
		</div>
	</div>

	<div class="navigation-manual">
		<label for="radio1" class="manual-btn"></label>
		<label for="radio2" class="manual-btn"></label>
		<label for="radio3" class="manual-btn"></label>
	</div>
</div>

<script type="text/javascript">
	var counter = 1;
	setInterval(function() {
		document.getElementById('radio' + counter).checked = true;
		counter++;
		if (counter > 3) {
			counter = 1;
		}
	}, 5000);
</script>