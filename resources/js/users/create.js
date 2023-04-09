const submit = document.querySelector('#submit');

function filled(){
    
    if(document.querySelectorAll('.required').forEach(function(.required){
            if(.required.value.length > 0){
                return true;
            } else{
                return false;
            }
        })) {
        return true;
    } else {
        return false;
    }
}

function password(){
    const pw = document.querySelector('#password');
    pw.onkeyup = function(){
        if(pw.value.length < 10){
            document.querySelector('#keteranganPassword').innerHTML = "Minimal 10 karakter";
        }
    }
}

function enableSubmit(){
    //return submit.disabled
    if(filled() && password()){
        return false;
    } else {
        return true;
    }

}

function check(){
    document.querySelectorAll('.required').forEach(function(.required){
        if(.required.onkeyup.value.length == 0){
            document.querySelectorAll('.keterangan').forEach(function (.keterangan){
                .keterangan.innerHTML = "Required";
            });
        } else{
            submit.disabled = enableSubmit();
        }
    });
}

document.addEventListener('DOMContentLoaded', function(){
    submit.disabled = true;
    check();
});
