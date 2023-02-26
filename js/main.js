(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
      $(".nav-bar").addClass("sticky-top");
    } else {
      $(".nav-bar").removeClass("sticky-top");
    }
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Header carousel
  $(".header-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    items: 1,
    dots: true,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>',
    ],
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    margin: 24,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      992: {
        items: 2,
      },
    },
  });
})(jQuery);

// const sort_Date = document.getElementById("sort_date");
// const sort_Date_DESC = document.getElementById("DESC");

// sort_Date.addEventListener("click", (e) => {
// e.preventDefault();
//   sort_Date.name = "DESC";
//   sort_Date.id = "DESC";
// });

// sort_Date_DESC.addEventListener("click", (e) => {
//   // e.preventDefault();
//   sort_Date_DESC.name = "published_date";
//   sort_Date_DESC.id = "sort_date";
// });

// const fname_Validation = document.getElementById("fname_validation");
// const lname_Validation = document.getElementById("lname_validation");
// const email_Validation = document.getElementById("email_Validation");
// const phone_number_Validation = document.getElementById("phone_Validation");
// const cin_Validation = document.getElementById("cin_Validation");
// const country_Validation = document.getElementById("country_Validation");
// const city_Validation = document.getElementById("city_Validation");
// const address_Validation = document.getElementById("address_Validation");
// const password_Validation = document.getElementById("password_Validation");
// const postal_Validation = document.getElementById("postal_Validation");
// const type_Validation = document.querySelector(".type_Validation");
// const re_password_Validation = document.getElementById(
//   "re_password_Validation"
// );
// const signUp_Btn = document.getElementById("signUp");
// let validation_Arr = [];

// const email_Regex =
//   /^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$/g;
// const Name_Regex = /[a-zA-Z-\s]+$/;
// const phone_Number_Regex = /(05|06|07)\d{8}$/;

// fname_Validation.addEventListener("blur", () => {
//   if (fname_Validation.value.length === 0) {
//     document.getElementById("First_name_error").innerHTML = "Required field";
//     fname_Validation.style.border = "solid 2px red";
//     fname_Validation.style.color = "red";
//   } else if (Name_Regex.test(fname_Validation.value) === false) {
//     document.getElementById("First_name_error").innerHTML =
//       "Only letters allowed";
//     fname_Validation.style.border = "solid 2px red";
//     fname_Validation.style.color = "red";
//   } else {
//     document.getElementById("First_name_error").innerHTML = "";
//     fname_Validation.style.border = "solid 2px #26c820";
//     fname_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ====== last name validation ======

// lname_Validation.addEventListener("blur", () => {
//   if (lname_Validation.value.length === 0) {
//     document.getElementById("Last_name_error").innerHTML = "Required field";
//     lname_Validation.style.border = "solid 2px red";
//     lname_Validation.style.color = "red";
//   } else if (Name_Regex.test(lname_Validation.value) === false) {
//     document.getElementById("Last_name_error").innerHTML =
//       "Only letters allowed";
//     lname_Validation.style.border = "solid 2px red";
//     lname_Validation.style.color = "red";
//   } else {
//     document.getElementById("Last_name_error").innerHTML = "";
//     lname_Validation.style.border = "solid 2px #26c820";
//     lname_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ====== Email validation ======

// email_Validation.addEventListener("blur", () => {
//   if (email_Validation.value.length === 0) {
//     document.getElementById("email_error").innerHTML = "Required field";
//     email_Validation.style.border = "solid 2px red";
//     email_Validation.style.color = "red";
//   } else if (email_Regex.test(email_Validation.value) === false) {
//     document.getElementById("email_error").innerHTML = "Only letters allowed";
//     email_Validation.style.border = "solid 2px red";
//     email_Validation.style.color = "red";
//   } else {
//     document.getElementById("email_error").innerHTML = "";
//     email_Validation.style.border = "solid 2px #26c820";
//     email_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ====== phone number validation =====

// phone_number_Validation.addEventListener("blur", () => {
//   if (phone_number_Validation.value.length === 0) {
//     document.getElementById("phone_error").innerHTML = "Required field";
//     phone_number_Validation.style.border = "solid 2px red";
//     phone_number_Validation.style.color = "red";
//   } else if (phone_Number_Regex.test(phone_number_Validation.value) === false) {
//     document.getElementById("phone_error").innerHTML = "Only letters allowed";
//     phone_number_Validation.style.border = "solid 2px red";
//     phone_number_Validation.style.color = "red";
//   } else {
//     document.getElementById("phone_error").innerHTML = "";
//     phone_number_Validation.style.border = "solid 2px #26c820";
//     phone_number_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ====== CIN validation ======

// cin_Validation.addEventListener("blur", () => {
//   if (cin_Validation.value.length === 0) {
//     document.getElementById("CIN_error").innerHTML = "Required field";
//     cin_Validation.style.border = "solid 2px red";
//     cin_Validation.style.color = "red";
//   } else {
//     document.getElementById("CIN_error").innerHTML = "";
//     cin_Validation.style.border = "solid 2px #26c820";
//     cin_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ====== Country validation ======

// country_Validation.addEventListener("blur", () => {
//   if (country_Validation.value.length === 0) {
//     document.getElementById("Country_error").innerHTML = "Required field";
//     country_Validation.style.border = "solid 2px red";
//     country_Validation.style.color = "red";
//   } else {
//     document.getElementById("Country_error").innerHTML = "";
//     country_Validation.style.border = "solid 2px #26c820";
//     country_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ====== city validation ======

// city_Validation.addEventListener("blur", () => {
//   if (city_Validation.value.length === 0) {
//     document.getElementById("city_error").innerHTML = "Required field";
//     city_Validation.style.border = "solid 2px red";
//     city_Validation.style.color = "red";
//   } else {
//     document.getElementById("city_error").innerHTML = "";
//     city_Validation.style.border = "solid 2px #26c820";
//     city_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ====== Address validation ======

// address_Validation.addEventListener("blur", () => {
//   if (address_Validation.value.length === 0) {
//     document.getElementById("address_error").innerHTML = "Required field";
//     address_Validation.style.border = "solid 2px red";
//     address_Validation.style.color = "red";
//   } else {
//     document.getElementById("address_error").innerHTML = "";
//     address_Validation.style.border = "solid 2px #26c820";
//     address_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ====== Password validation ======

// password_Validation.addEventListener("blur", () => {
//   if (password_Validation.value.length === 0) {
//     document.getElementById("password_error").innerHTML = "Required field";
//     password_Validation.style.border = "solid 2px red";
//     password_Validation.style.color = "red";
//   } else {
//     document.getElementById("password_error").innerHTML = "";
//     password_Validation.style.border = "solid 2px #26c820";
//     password_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ====== Retype Password validation ======

// re_password_Validation.addEventListener("blur", () => {
//   if (re_password_Validation.value.length === 0) {
//     document.getElementById("re_password_error").innerHTML = "Required field";
//     re_password_Validation.style.border = "solid 2px red";
//     re_password_Validation.style.color = "red";
//   } else {
//     document.getElementById("re_password_error").innerHTML = "";
//     re_password_Validation.style.border = "solid 2px #26c820";
//     re_password_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ====== Code Postal validation ======

// postal_Validation.addEventListener("blur", () => {
//   if (postal_Validation.value.length === 0) {
//     document.getElementById("postal_error").innerHTML = "Required field";
//     postal_Validation.style.border = "solid 2px red";
//     postal_Validation.style.color = "red";
//   } else {
//     document.getElementById("postal_error").innerHTML = "";
//     postal_Validation.style.border = "solid 2px #26c820";
//     postal_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ====== Type validation ======

// type_Validation.addEventListener("blur", () => {
//   if (type_Validation.value == "Account Type") {
//     document.getElementById("type_error").innerHTML = "Required field";
//     type_Validation.style.border = "solid 2px red";
//     type_Validation.style.color = "red";
//   } else {
//     document.getElementById("type_error").innerHTML = "";
//     type_Validation.style.border = "solid 2px #26c820";
//     type_Validation.style.color = "black";
//     validation_Arr.push(true);
//   }
// });

// // ======= check if all input validated while submiting client info and passwords are same =======

// signUp_Btn.addEventListener("click", (e) => {
//   e.preventDefault();
//   if (password_Validation.value == re_password_Validation.value) {
//     validation_Arr.push(true);
//   } else if (password_Validation.value != re_password_Validation.value) {
//     document.getElementById("passwords_compare").innerHTML =
//       "your passwords should be same";
//     document.getElementById("passwords_compare").style.color = "red";
//   }
//   if (validation_Arr.length < 14) {
//     document.getElementById("signup_error").innerHTML = "An error occured";
//     signUp_Btn.style.border = "solid 2px red";
//   } else {
//     document.getElementById("signup_error").innerHTML = "";
//     signUp_Btn.style.border = "none";
//   }
// });

$(document).ready(function () {
  $("#add_new_announce").submit(function (event) {
    // Prevent the form from submitting the normal way and refreshing the page
    event.preventDefault();

    // Get the form data
    var formData = $("#add_new_announce").serialize();

    // Send the form data using ajax
    $.ajax({
      type: "POST",
      url: "addAnnounce.php",
      data: formData,
      success: function (response) {
        // Display the response on the page
        $("#result").html(response);
        // $('#add_announces').load(location.href + " #add_announces");
      },
    });
  });
});
