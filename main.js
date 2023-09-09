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
    }
}

const getCertNum = function() {
    if($('#phone1').val() && $('#phone2').val() && $('#phone3').val()) {
        alert(`인증번호는 ${certNum}입니다. \n입력 후 인증번호 확인을 눌러주세요.`)
    } else {
        alert('휴대폰 번호를 입력해주세요.');
    }
}