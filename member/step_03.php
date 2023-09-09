<script>
    let ckId = false;
</script>

<div id="container" class="container-full">
	<div id="content" class="content">
		<div class="inner">
			<div class="tit-box-h3">
				<h3 class="tit-h3">회원가입</h3>
				<div class="sub-depth">
					<span><i class="icon-home"><span>홈</span></i></span>
					<strong>회원가입</strong>
				</div>
			</div>

			<div class="join-step-bar">
				<ul>
					<li><i class="icon-join-agree"></i> 약관동의</li>
					<li><i class="icon-join-chk"></i> 본인확인</li>
					<li class="last on"><i class="icon-join-inp"></i> 정보입력</li>
				</ul>
			</div>

			<div class="section-content">
				<table border="0" cellpadding="0" cellspacing="0" class="tbl-col-join">
					<caption class="hidden">강의정보</caption>
					<colgroup>
						<col style="width:15%"/>
						<col style="*"/>
					</colgroup>

					<tbody>
                        <form name="join">
						<tr>
							<th scope="col"><span class="icons">*</span>이름</th>
							<td><input type="text" name="name" class="input-text" style="width:302px"/></td>
						</tr>
						<tr>
							<th scope="col"><span class="icons">*</span>아이디</th>
							<td><input type="text" id="id" name="id" class="input-text" style="width:302px" placeholder="영문자로 시작하는 4~15자의 영문소문자, 숫자"/>
                            <a href="javascript:" onclick="dupchkID($('#id').val())" class="btn-s-tin ml10">중복확인</a></td>
						</tr>
						<tr>
							<th scope="col"><span class="icons">*</span>비밀번호</th>
							<td><input type="password" name="password" class="input-text" style="width:302px" placeholder="8-15자의 영문자/숫자 혼합"/></td>
						</tr>
						<tr>
							<th scope="col"><span class="icons">*</span>비밀번호 확인</th>
							<td><input type="password" name="confirm_password" class="input-text" style="width:302px"/></td>
						</tr>
						<tr>
							<th scope="col"><span class="icons">*</span>이메일주소</th>
							<td>
								<input type="text" name="email1" class="input-text" style="width:138px"/> @ <input type="text" name="email2" class="input-text" style="width:138px"/>
								<select class="input-sel" style="width:160px" onchange="chgMail(this)">
									<option value="">직접입력</option>
									<option value="naver.com">naver.com</option>
									<option value="gmail.com">gmail.com</option>
									<option value="daum.net">daum.net</option>
									<option value="nate.com">nate.com</option>
								</select>
							</td>
						</tr>
						<tr>
							<th scope="col"><span class="icons">*</span>휴대폰 번호</th>
							<td>
								<input type="text" name="phone1" value="<?=$_GET['phone1']?>" readonly class="input-text" style="width:50px"/> - 
								<input type="text" name="phone2" value="<?=$_GET['phone2']?>" readonly class="input-text" style="width:50px"/> - 
								<input type="text" name="phone3" value="<?=$_GET['phone3']?>" readonly class="input-text" style="width:50px"/>
							</td>
						</tr>
						<tr>
							<th scope="col"><span class="icons"></span>일반전화 번호</th>
							<td><input type="text" name="tel1" class="input-text" style="width:88px"/> - <input type="text" name="tel2" class="input-text" style="width:88px"/> - <input type="text" name="tel3" class="input-text" style="width:88px"/></td>
						</tr>
						<tr>
							<th scope="col"><span class="icons">*</span>주소</th>
							<td>
								<p >
									<label>우편번호 <input type="text" name="uno" value="08781" class="input-text ml5" style="width:242px" readonly /></label><a href="#" class="btn-s-tin ml10">주소찾기</a>
								</p>
								<p class="mt10">
									<label>기본주소 <input type="text" name="basic_address" class="input-text ml5" style="width:719px"/></label>
								</p>
								<p class="mt10">
									<label>상세주소 <input type="text" name="detail_address" class="input-text ml5" style="width:719px"/></label>
								</p>
							</td>
						</tr>
						<tr>
							<th scope="col"><span class="icons">*</span>SMS수신</th>
							<td>
								<div class="box-input">
									<label class="input-sp">
										<input type="radio" name="sms" value="Y" checked="checked"/>
										<span class="input-txt">수신함</span>
									</label>
									<label class="input-sp">
										<input type="radio" name="sms" value="N" />
										<span class="input-txt">미수신</span>
									</label>
								</div>
								<p>SMS수신 시, 해커스의 혜택 및 이벤트 정보를 받아보실 수 있습니다.</p>
							</td>
						</tr>
						<tr>
							<th scope="col"><span class="icons">*</span>메일수신</th>
							<td>
								<div class="box-input">
									<label class="input-sp">
										<input type="radio" name="mail" value="Y" checked="checked"/>
										<span class="input-txt">수신함</span>
									</label>
									<label class="input-sp">
										<input type="radio" name="mail" value="N" />
										<span class="input-txt">미수신</span>
									</label>
								</div>
								<p>메일수신 시, 해커스의 혜택 및 이벤트 정보를 받아보실 수 있습니다.</p>
							</td>
						</tr>
                        </form>
					</tbody>
				</table>

				<div class="box-btn">
					<a href="<?=VOID?>" onclick="signUp('<?=$_GET['mode']?>')" class="btn-l">회원가입</a>
				</div>
			</div>
		</div>
	</div>
</div>