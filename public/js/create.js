let submit = document.querySelector('#submit');

function filled(){
    
    if(document.getElementByClassName('required').forEach(function(required){
            if(required.value.length > 0){
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
    let pw = document.getElementById('password');
    pw.onkeyup = function(){
        if(pw.value.length < 10){
            document.querySelector('#keteranganPassword').innerHTML = "Minimal 10 karakter";
        }
    }
}

function enableSubmit(){
    //return submit.disabled
    if(filled()){
        return false;
    } else {
        return true;
    }

}




submit.disabled = true;



document.getElementByClassName('required').forEach(function(required){
    if(required.onkeyup.value.length == 0){
        document.getElementByClassName('keterangan').forEach(function (keterangan){
            keterangan.innerHTML = "Required";
        });
    } else{
        submit.disabled = enableSubmit();
    }
});

