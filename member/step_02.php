<?php
$cert_num = '123456';
?>
<script>
    const certNum = '<?=$cert_num?>';
</script>
<div id="container" class="container-full">
	<div id="content" class="content">
		<div class="inner">
			<div class="tit-box-h3">
				<h3 class="tit-h3">회원가입</h3>
				<div class="sub-depth">
					<span><i class="icon-home"><span>홈</span></i></span>
					<strong>회원가입 완료</strong>
				</div>
			</div>

			<div class="join-step-bar">
				<ul>
					<li><i class="icon-join-agree"></i> 약관동의</li>
					<li class="on"><i class="icon-join-chk"></i> 본인확인</li>
					<li class="last"><i class="icon-join-inp"></i> 정보입력</li>
				</ul>
			</div>

			<div class="tit-box-h4">
				<h3 class="tit-h4">본인인증</h3>
			</div>

			<div class="section-content after">
				<div class="identify-box" style="width:100%;height:190px;">
					<div class="identify-inner">
						<strong>휴대폰 인증</strong>
						<p>주민번호 없이 메시지 수신가능한 휴대폰으로 1개 아이디만 회원가입이 가능합니다. </p>

						<br />
						<input type="text" id="phone1" class="input-text" style="width:50px"/> - 
						<input type="text" id="phone2" class="input-text" style="width:50px"/> - 
						<input type="text" id="phone3" class="input-text" style="width:50px"/>
						<a href="<?=VOID?>" onclick="getCertNum()" class="btn-s-line">인증번호 받기</a>

						<br /><br />
						<input type="text" id="certNum" class="input-text" style="width:200px"/>
						<a href="javascript:" onclick="signUp('<?=$_GET['mode']?>')" class="btn-s-line">인증번호 확인</a>
					</div>
					<i class="graphic-phon"><span>휴대폰 인증</span></i>
				</div>
			</div>

		</div>
	</div>
</div>