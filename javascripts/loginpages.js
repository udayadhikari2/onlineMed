
function loginPopUp(){
    var loginpage=document.getElementById("loginScreen");
    if(loginpage.style.display=='block'){
      loginpage.style.display='none'
    }
    else{
      loginpage.style.display='block'
    }
}

function closes(){
  document.getElementById("loginScreen").style.display='none';
}

function registerTag(){
  var log=document.getElementById("loginforms");
  var reg=document.getElementById("registerforms");
  var reg_none=document.getElementById("regpage");
  var log_none=document.getElementById("logpage");
  if(reg.style.display=='block'){
    reg.style.display='none';
    log_none.style.display='none';
  }
  else{
    reg.style.display='block';
    log_none.style.display='block';
    log.style.display='none';
  }
}
function loginTag(){
  var log=document.getElementById("loginforms");
  var reg=document.getElementById("registerforms");
  var log_none=document.getElementById("logpage");
  if(log.style.display=='block'){
    reg.style.display='block';
    log_none.style.display='block';
  }
  else{
    reg.style.display='none';
    log_none.style.display='none';
    log.style.display='block';
  }
}
