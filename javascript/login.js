const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");
captchaImage = document.getElementById("captcha-image"),
refreshCaptchaBtn = document.getElementById("refresh-captcha");

form.onsubmit = (e)=>{
    e.preventDefault();
}

refreshCaptchaBtn.onclick = ()=>{
  // 随机生成一个时间戳，强制刷新验证码
  captchaImage.src = "captcha.php?t=" + Date.now();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href = "users.php";
              }else{
                errorText.style.display = "block";
                errorText.textContent = data;
                captchaImage.src = "captcha.php?t=" + Date.now();
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}