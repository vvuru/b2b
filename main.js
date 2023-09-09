$(function() {
    chkAll();  
})

const chkAll = function() {
    $('#chkAll').on('click',function(){
        if($('#chkAll').is(':checked')) {
            $('#chk1').prop('checked',true);
            $('#chk2').prop('checked',true);
        } else {
            $('#chk1').prop('checked',false);
            $('#chk2').prop('checked',false);
        }
    })
}

const chkForm = function() {
    const form = new FormData();
    form.append('name',$('#name').val());
    form.append('id',$('#id').val());
    form.append('password',$('#password').val());
    const email = `${$('#email1').val()}@${$('#email2').val()}`;
    form.append('email',email);
    const phone = `${$('#phone1').val()}-${$('#phone2').val()}-${$('#phone3').val()}`;
    form.append('phone',phone);
    let tel = false;
    if($('#tel1').val()) {
        tel = `${$('#tel1').val()}-${$('#tel2').val()}-${$('#tel3').val()}`;
        form.append('home_tel',tel);
    }
    form.append('uno',$('#uno').val());
    form.append('basic_address',$('#basic_address').val());
    form.append('detail_address',$('#detail_address').val());
    form.append('sms_agree',$('input:radio[name="sms"]:checked').val());
    form.append('mail_agree',$('input:radio[name="mail"]:checked').val());
    
    $.ajax({
        url: '/member/regist.php',
        type: 'post',
        data: {
            name: $('#name').val(),
            id: $('#id').val(),
            password: $('#password').val(),
            email: email,
            phone: phone,
            home_tel: tel,
            uno: $('#uno').val(),
            basic_address: $('#basic_address').val(),
            detail_address: $('#detail_address').val(),
            sms_agree: $('input:radio[name="sms"]:checked').val(),
            mail_agree: $('input:radio[name="mail"]:checked').val(),
        },
        success: function(data) {
            if(data == 'success') {
                location.href = `/?d=member&mode=complete`;
            } else {
                alert('회원가입에 실패하였습니다.');
            }
        }

    })
}

const signUp = function(step) {
    switch(step) {
        case 'step_01':
            if($('#chk1').is(':checked') && $('#chk2').is(':checked')) {
                location.href = '/?d=member&mode=step_02';
            } else {
                alert('약관에 동의해주세요.');
            }
            break;
        case 'step_02':
            if($('#certNum').val() == certNum) {
                location.href = `/?d=member&mode=step_03&phone1=${$('#phone1').val()}&phone2=${$('#phone2').val()}&phone3=${$('#phone3').val()}`;
            } else {
                alert('인증번호가 일치하지 않습니다.');
            }
            break;
        case 'step_03':
            chkForm();
            break;
    }
}

const getCertNum = function() {
    if($('#phone1').val() && $('#phone2').val() && $('#phone3').val()) {
        alert(`인증번호는 ${certNum}입니다. \n입력 후 인증번호 확인을 눌러주세요.`)
    } else {
        alert('휴대폰 번호를 입력해주세요.');
    }
}

const dupchkID = function(id) {
    if(id) {
        $.ajax({
            url: '/member/dupchk_id.php',
            data: {id: id},
            success: function(res) {
                alert(res);
                ckId = true;
            },
            error: function(e) {
                alert(e);
            }
        })
    } else {
        alert('아이디를 입력하세요.');
    }
}

const chgMail = function(el) {
    $('#email2').val(el.value);
}