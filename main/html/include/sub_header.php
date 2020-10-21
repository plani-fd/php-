<?php
	# 브라우져 타이틀
	$_path	= $path;
	$_last	= array_pop($_path);

	$pathinfo = pathinfo($_SERVER['SCRIPT_NAME']);
	preg_match('/^.+([0-9]{1})_?.*$/U', $pathinfo['dirname'], $match);

	$file_snb	= dirname(__FILE__) . '/snb' . $match[1] . '.php';

	$script_name		= explode('_', $pathinfo['filename']);
	$file_depth			= array();
	$img_file_depth		= array();

	foreach ($script_name as $key => $val)
	{
		preg_match('/([0-9]{1})$/', $val, $info);
		$file_depth[]		= $info[1];		
		if ($key <= 1)
		{
			$img_file_depth[]	= $info[1];
		}
	}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title><?php echo $_last?> | 프로젝트명</title>
<link rel="stylesheet" href="/main/css/default.css" />
<link rel="stylesheet" href="/main/css/layout.css" />
<link rel="stylesheet" href="/main/css/layout_respond.css" />	

<link rel="stylesheet" href="/main/css/sub.css" />
<link rel="stylesheet" href="/main/css/sub_respond.css" />
</head>

<body>
<!-- Accessibility -->
<p id="skip_nav">
    <a href="#contents">본문 바로가기</a>
</p>

<div id="wrap">
	<?php include ('header.php');?>

	<main id="main">
		<div class="main_wrap">
			<div id="visual" class="visual1">
				<strong class="title">메뉴1</strong>

				<p class="control">
					<a href="" class="prev"><span>이전</span></a>
					<a href="" class="next"><span>다음</span></a>
				</p>

				<span class="img"><img src="/main/img/sub/sub.jpg" alt=""></span>
			</div>
			
			<?php
				# snb 파일 로드
				if (is_file($file_snb)===true)
				{
					include_once($file_snb);
				}
			?>		
				
			<div id="contents">
				<div class="contents_util">
					<h1 id="contents_title"><?php echo $_last?></h1>
					
					<nav class="location">
						<ul class="path">
							<li class="icon"><a href="">홈</a></li>
							<li><a href=""><?php echo implode('</span> <span>', $_path);?></a></li> 
							<li><a href="" class="active"><?php echo $_last?></a></li>
						</ul>

						<ul class="list">
							<li>
								<buton class="label">메뉴</buton>
								<ul class="list depth1">
									<li class="active"><a href="">컨텐츠</a></li>
									<li><a href="">게시판</a></li>
									<li><a href="">갤러리</a></li>
									<li><a href="">멤버쉽 프로그램</a></li>
									<li><a href="">기타 프로그램</a></li>
								</ul>
							</li>
							<li>
								<buton class="label">메뉴</buton>
								<ul class="list depth2">
									<li class="active"><a href="">단순메뉴구조</a></li>
									<li><a href="">콘텐츠담당자</a></li>
									<li><a href="">공공누리</a></li>
									<li><a href="">메뉴옵션</a></li>
								</ul>
							</li>
							<li>
								<buton class="label">메뉴</buton>
								<ul class="list depth3">
									<li class="active"><a href="">서브메뉴1-1-1</a></li>
									<li><a href="">서브메뉴1-1-2</a></li>
									<li><a href="">서브메뉴1-1-3</a></li>
									<li><a href="">서브메뉴1-1-4</a></li>
								</ul>
							</li>
							<li>
								<buton class="label">메뉴</buton>
								<ul class="list depth4">
									<li class="active"><a href="">탭1차-1</a></li>
									<li><a href="">탭1차-2</a></li>
									<li><a href="">탭1차-3</a></li>
									<li><a href="">탭1차-4</a></li>
								</ul>
							</li>
							<li>
								<buton class="label">메뉴</buton>
								<ul class="list depth5">
									<li class="active"><a href="">탭2차-1</a></li>
									<li><a href="">탭2차-2</a></li>
									<li><a href="">탭2차-3</a></li>
									<li><a href="">탭2차-4</a></li>
								</ul>
							</li>
						</ul>
					</nav>

					<div class="util">
						<span class="zoom">
							<a href="" class="btn up">글자 크게</a>
							<a href="" class="btn down">글자 작게</a>
						</span>
					
						<article class="share">
							<h2 class="title"><a href="" class="btn open">공유하기</a></h2>
							
							<div class="item">
								<ul id="share" class="list">
									<li class="facebook"><a href="">페이스북</a></li>
									<li class="twitter"><a href="">트위터</a></li>
									<li class="band"><a href="">밴드</a></li>
									<li class="kakaostory"><a href="">카카오스토리</a></li>
									<li class="kakaotalk"><a href="">카카오톡</a></li>
								</ul>
								<a href="" class="close">닫기</a>
							</div>
						</article>
						
						<a class="btn print" href="">인쇄</a>
					</div>
				</div>
  				<div id="contents_body">