function getmaxdob(){
    var dobmax = new Date();
    var dd = dobmax.getDate();
    var mm = dobmax.getMonth()+1; //January is 0!
    var yyyy = dobmax.getFullYear() - 18;
    if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 

    dobmax = yyyy+'-'+mm+'-'+dd;
    document.getElementById("dob").setAttribute("max", dobmax);
}

function get_confirmation(){
    var val = confirm("Are you sure the information entered by you is correct?");
    if(val == true){
        return true;
    }
    else{
        return false;
    }
}

function resetF(){
    document.getElementById("TheFormItself").reset();
}

function sure(){
    document.getElementById("formres").value = "Sure ?";
}

function res(){
    document.getElementById("formres").value = "Reset";
}

function display_success(){
    alert("Your Response has been Recorded!");
}





