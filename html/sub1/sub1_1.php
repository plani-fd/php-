<?php
	# 브라우져 타이틀 및 경로 표시
	$path = array('메뉴1', '메뉴1-1');

	# 공용 Libarary 로드
	include_once($_SERVER["DOCUMENT_ROOT"].'/html/include/library.php');

	# 서브 페이지 상단 html 로드
	include_once($_SERVER["DOCUMENT_ROOT"].'/html/include/sub_header.php');
?>

<!-- 탭메뉴 -->
<div class="depth4_tab">
	<ul>
		<li class="active"><a href="">탭1차-1</a></li>
		<li><a href="">탭1차-2</a></li>
		<li><a href="">탭1차-3</a></li>
		<li><a href="">탭1차-4</a></li>
	</ul>
</div>

<div id="depth5_menu_div">
	<ul id="depth5_menu_ul">
		<li class="active"><a href="">탭2차-1</a></li>
		<li><a href="">탭2차-2</a></li>
		<li><a href="">탭2차-3</a></li>
		<li><a href="">탭2차-4</a></li>
	</ul>
</div>
<!-- // -->

<!-- 컨텐츠 영역 -->
<p class="txt_center"><img src="/img/img_preparing.jpg" alt="페이지 준비중입니다. 관련자료 준비중에 있습니다. 빠른시일 안에 정상 서비스 하도록 하겠습니다."></p>
<!-- // -->

<?php
	# 서브 페이지 하단 html 로드
	include_once($_SERVER["DOCUMENT_ROOT"].'/html/include/sub_footer.php');
?>