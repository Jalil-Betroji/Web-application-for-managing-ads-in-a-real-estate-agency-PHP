const fname_Validation = document.getElementById("first_Name");
const lname_Validation = document.getElementById("last_Name");
const email_Validation = document.getElementById("email");
const phone_number_Validation = document.getElementById("phone");
const Country_Validation = document.getElementById("country");
const City_Validation = document.getElementById("city");
const address_Validation = document.getElementById("address");
const postal_Validation = document.getElementById("code_Postal");
const Type_Validation = document.getElementById("account_Type");

let update_Validation_Arr = [];

const email_Regex =
  /^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$/g;
const Name_Regex = /[a-zA-Z-\s]+$/;
const phone_Number_Regex = /(05|06|07)\d{8}$/;

fname_Validation.addEventListener("blur", () => {
  if (fname_Validation.value.length === 0) {
    document.getElementById("First_name_error").innerHTML = "Required field";
    fname_Validation.style.border = "solid 2px red";
    fname_Validation.style.color = "red";
  } else if (Name_Regex.test(fname_Validation.value) === false) {
    document.getElementById("First_name_error").innerHTML =
      "Only letters allowed";
    fname_Validation.style.border = "solid 2px red";
    fname_Validation.style.color = "red";
  } else {
    document.getElementById("First_name_error").innerHTML = "";
    fname_Validation.style.border = "solid 2px #26c820";
    fname_Validation.style.color = "black";
    update_Validation_Arr.push(true);
  }
});

// ====== last name validation ======

lname_Validation.addEventListener("blur", () => {
  if (lname_Validation.value.length === 0) {
    document.getElementById("Last_name_error").innerHTML = "Required field";
    lname_Validation.style.border = "solid 2px red";
    lname_Validation.style.color = "red";
  } else if (Name_Regex.test(lname_Validation.value) === false) {
    document.getElementById("Last_name_error").innerHTML =
      "Only letters allowed";
    lname_Validation.style.border = "solid 2px red";
    lname_Validation.style.color = "red";
  } else {
    document.getElementById("Last_name_error").innerHTML = "";
    lname_Validation.style.border = "solid 2px #26c820";
    lname_Validation.style.color = "black";
    update_Validation_Arr.push(true);
  }
});

// ====== Email validation ======

email_Validation.addEventListener("blur", () => {
  if (email_Validation.value.length === 0) {
    document.getElementById("email_error").innerHTML = "Required field";
    email_Validation.style.border = "solid 2px red";
    email_Validation.style.color = "red";
  } else if (email_Regex.test(email_Validation.value) === false) {
    document.getElementById("email_error").innerHTML = "Only letters allowed";
    email_Validation.style.border = "solid 2px red";
    email_Validation.style.color = "red";
  } else {
    document.getElementById("email_error").innerHTML = "";
    email_Validation.style.border = "solid 2px #26c820";
    email_Validation.style.color = "black";
    update_Validation_Arr.push(true);
  }
});

// ====== phone number validation =====

phone_number_Validation.addEventListener("blur", () => {
  if (phone_number_Validation.value.length === 0) {
    document.getElementById("phone_error").innerHTML = "Required field";
    phone_number_Validation.style.border = "solid 2px red";
    phone_number_Validation.style.color = "red";
  } else if (phone_Number_Regex.test(phone_number_Validation.value) === false) {
    document.getElementById("phone_error").innerHTML = "Only letters allowed";
    phone_number_Validation.style.border = "solid 2px red";
    phone_number_Validation.style.color = "red";
  } else {
    document.getElementById("phone_error").innerHTML = "";
    phone_number_Validation.style.border = "solid 2px #26c820";
    phone_number_Validation.style.color = "black";
    update_Validation_Arr.push(true);
  }
});

// ====== Country validation ======

Country_Validation.addEventListener("blur", () => {
  if (Country_Validation.value.length === 0) {
    document.getElementById("Country_error").innerHTML = "Required field";
    Country_Validation.style.border = "solid 2px red";
    Country_Validation.style.color = "red";
  } else {
    document.getElementById("Country_error").innerHTML = "";
    Country_Validation.style.border = "solid 2px #26c820";
    Country_Validation.style.color = "black";
    update_Validation_Arr.push(true);
  }
});

// ====== city validation ======

City_Validation.addEventListener("blur", () => {
  if (City_Validation.value.length === 0) {
    document.getElementById("city_error").innerHTML = "Required field";
    City_Validation.style.border = "solid 2px red";
    City_Validation.style.color = "red";
  } else {
    document.getElementById("city_error").innerHTML = "";
    City_Validation.style.border = "solid 2px #26c820";
    City_Validation.style.color = "black";
    update_Validation_Arr.push(true);
  }
});

// ====== Address validation ======

address_Validation.addEventListener("blur", () => {
  if (address_Validation.value.length === 0) {
    document.getElementById("address_error").innerHTML = "Required field";
    address_Validation.style.border = "solid 2px red";
    address_Validation.style.color = "red";
  } else {
    document.getElementById("address_error").innerHTML = "";
    address_Validation.style.border = "solid 2px #26c820";
    address_Validation.style.color = "black";
    update_Validation_Arr.push(true);
  }
});

// ====== Code Postal validation ======

postal_Validation.addEventListener("blur", () => {
  if (postal_Validation.value.length === 0) {
    document.getElementById("postal_error").innerHTML = "Required field";
    postal_Validation.style.border = "solid 2px red";
    postal_Validation.style.color = "red";
  } else {
    document.getElementById("postal_error").innerHTML = "";
    postal_Validation.style.border = "solid 2px #26c820";
    postal_Validation.style.color = "black";
    update_Validation_Arr.push(true);
  }
});

// ====== Type validation ======

Type_Validation.addEventListener("blur", () => {
  if (Type_Validation.value == "Account Type") {
    document.getElementById("type_error").innerHTML = "Required field";
    Type_Validation.style.border = "solid 2px red";
    Type_Validation.style.color = "red";
  } else {
    document.getElementById("type_error").innerHTML = "";
    Type_Validation.style.border = "solid 2px #26c820";
    Type_Validation.style.color = "black";
    update_Validation_Arr.push(true);
  }
});

// ======= check if all input validated while update client info =======

$(document).ready(function () {
  $("#Profile").submit(function (event) {
    // Prevent the form from submitting the normal way and refreshing the page
    event.preventDefault();
    console.log("jalil betroji");
    console.log(update_Validation_Arr);

    if (update_Validation_Arr.length === 9) {
      // Get the form data
      var formData = $("#Profile").serialize();

      // Send the form data using ajax
      $.ajax({
        type: "POST",
        url: "profileUpdate.php",
        data: formData,
        success: function (response) {
          // Display the response on the page
          $("#result").html(response);
        },
      });
      window.location.href = "profile.php";
    }
  });
});
