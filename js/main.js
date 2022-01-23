(() => {
    let form = document.querySelector("form");
    let name = document.querySelector("form #nome");
    let email = document.querySelector(" form #email ");
    let phone = document.querySelector("form #phone");
    let celPhone = document.querySelector("form #celPhone");
    let password = document.querySelector("form #password");
    let confirmPassword = document.querySelector("form #confirmPassword");
    // let buttonSubmit = document.querySelector("form #btnSend");
    let elements = form.getElementsByClassName("need-validate");
    let btnPassword = document.querySelector("#btn-password");
    let btnConfirm = document.querySelector("#btn-confirm");
  
    function validation() {
      validCamp(name, nameValidation);
      validCamp(email, emailValidation);
      validCamp(phone, phoneValidation);
      validCamp(celPhone, phoneValidation);
      validCamp(password, passwordValidation);
      validCamp(confirmPassword, confirmPasswordValidation);
    }
    setInterval(() => {
      validation();
    }, 500);
  
    btnPassword.addEventListener("click", () => {
      let icon = document.querySelector("#btn-password i");
      if (password.getAttribute("type") === "password") {
        password.setAttribute("type", "text");
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      } else {
        password.setAttribute("type", "password");
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      }
    });
  
    btnConfirm.addEventListener("click", () => {
      let icon = document.querySelector("#btn-confirm i");
      if (confirmPassword.getAttribute("type") === "password") {
        confirmPassword.setAttribute("type", "text");
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      } else {
        confirmPassword.setAttribute("type", "password");
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      }
    });
  
    function onlyNumber() {
      let camp = document.querySelectorAll(".onlyNumber");
      console.log(camp);
      camp.forEach(index => {
        console.log(index);
        index.addEventListener("keypress", e => {
          var key = window.event ? keyCode.event : e.which;
          if (key > 47 && key < 58) return true;
          else {
            if (key == 8 || key == 0) return true;
            else {
              e.preventDefault();
              return false;
            }
          }
        });
      });
    }
    onlyNumber();
  
    const btnActive = setInterval(() => {
      activeButton(terms, buttonSubmit);
    }, 100);
  
    // buttonSubmit.addEventListener("click", () => {
    //   console.log(elements.length);
    //   if (elements.length > 0) {
    //     return false;
    //   } else {
    //     form.submit();
    //     clearInterval(btnActive);
    //   }
    // });
  
    function passwordValidation(password) {
      if (password.value.length < 8) {
        return false;
      } else return true;
    }
  
    function confirmPasswordValidation(confirmPassword) {
      if (confirmPassword.value !== password.value) {
        return false;
      } else return true;
    }
  
    function phoneValidation(phone) {
      phone = phone.value;
      phone = phone.replace(/[^\d]+/g, "");
      if (phone == "" || phone.length < 10) {
        return false;
      } else return true;
    }
  
    function activeButton(term, button) {
      if (terms.checked == true && !(elements.length > 0)) {
        button.disabled = false;
      } else {
        button.disabled = true;
      }
    }
  
    function emailValidation(email) {
      email = email.value;
      let getPoint = email.indexOf("@");
      if (email.indexOf("@") == -1 || email.indexOf(".", [getPoint]) == -1) {
        return false;
      } else return true;
    }
  
    function nameValidation(obj) {
      if (obj.value.length < 3) {
        return false;
      } else {
        return true;
      }
    }
  
    
    function validCamp(obj, func) {
      obj.addEventListener("blur", () => {
        setClassValidation(obj, () => func(obj));
      });
    }
  
    function setClassValidation(obj, func) {
      let resp = func();
  
      if (resp == true) {
        obj.classList.add("is-valid");
        obj.classList.remove("is-invalid");
        obj.classList.remove("need-validate");
      } else {
        obj.classList.add("is-invalid");
        obj.classList.remove("is-valid");
        obj.classList.add("need-validate");
      }
    }
  })();
  
  function phoneMask(obj) {
    if (obj.value.length < 2) {
      obj.value = `(${obj.value}`;
    } else if (obj.value.length > 2 && obj.value.length <= 3) {
      obj.value = `${obj.value})`;
    } else if (obj.value.length > 7 && obj.value.length <= 8) {
      obj.value = `${obj.value}-`;
    }
  }
  
  function CelphoneMask(obj) {
    if (obj.value.length < 2) {
      obj.value = `(${obj.value}`;
    } else if (obj.value.length > 2 && obj.value.length <= 3) {
      obj.value = `${obj.value})`;
    } else if (obj.value.length > 8 && obj.value.length <= 9) {
      obj.value = `${obj.value}-`;
    }
  }
  
  
  phone.addEventListener("keypress", () => {
    phoneMask(phone);
  });
  celPhone.addEventListener("keypress", () => {
    CelphoneMask(celPhone);
  });
  
