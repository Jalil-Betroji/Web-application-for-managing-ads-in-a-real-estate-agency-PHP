const my_announces_btn = document.getElementById("my_announces");
const setting_btn = document.getElementById("setting");
const browse_more_btn = document.getElementById("browse_more");

const profile_homePage_section = document.getElementById("profile_homePage");
const Profile_section = document.getElementById("Profile");

my_announces_btn.addEventListener("click", () => {
  profile_homePage_section.classList.add("profile_hide");
  Profile_section.classList.add("profile_hide");
});

setting_btn.addEventListener("click", () => {
  Profile_section.classList.remove("profile_hide");

  profile_homePage_section.classList.add("profile_hide");
});

browse_more_btn.addEventListener("click", (e) => {
  e.preventDefault();
  profile_homePage_section.classList.add("profile_hide");
});

const title_Validation = document.getElementById("title");
const rooms_Validation = document.getElementById("rooms");
const price_Validation = document.getElementById("price");
const country_Validation = document.getElementById("country");
const city_Validation = document.getElementById("city");
const category_Validation = document.getElementById("category");
const type_Validation = document.getElementById("type");
const area_Validation = document.getElementById("area");
const house_Number_Validation = document.getElementById("house_number");
const house_Floor_Validation = document.getElementById("house_floor");
const code_Postal_Validation = document.getElementById("code_postal");
const bathrooms_Validation = document.getElementById("bathrooms");

let validation_Arr = [];

title_Validation.addEventListener("blur", () => {
  if (title_Validation.value.length === 0) {
    document.getElementById("title_error").innerHTML = "Required field";
    title_Validation.style.border = "solid 2px red";
    title_Validation.style.color = "red";
  } else {
    document.getElementById("title_error").innerHTML = "";
    title_Validation.style.border = "solid 2px #26c820";
    title_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== rooms input validation ======

rooms_Validation.addEventListener("blur", () => {
  if (rooms_Validation.value.length === 0) {
    document.getElementById("rooms_error").innerHTML = "Required field";
    rooms_Validation.style.border = "solid 2px red";
    rooms_Validation.style.color = "red";
  } else {
    document.getElementById("rooms_error").innerHTML = "";
    rooms_Validation.style.border = "solid 2px #26c820";
    rooms_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== price input validation ======

price_Validation.addEventListener("blur", () => {
  if (price_Validation.value.length === 0) {
    document.getElementById("price_error").innerHTML = "Required field";
    price_Validation.style.border = "solid 2px red";
    price_Validation.style.color = "red";
  } else {
    document.getElementById("price_error").innerHTML = "";
    price_Validation.style.border = "solid 2px #26c820";
    price_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== country input validation =====

country_Validation.addEventListener("blur", () => {
  if (country_Validation.value === "Country") {
    document.getElementById("country_error").innerHTML = "Required field";
    country_Validation.style.border = "solid 2px red";
    country_Validation.style.color = "red";
  } else {
    document.getElementById("country_error").innerHTML = "";
    country_Validation.style.border = "solid 2px #26c820";
    country_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== city input validation ======

city_Validation.addEventListener("blur", () => {
  if (city_Validation.value === "City") {
    document.getElementById("city_error").innerHTML = "Required field";
    city_Validation.style.border = "solid 2px red";
    city_Validation.style.color = "red";
  } else {
    document.getElementById("city_error").innerHTML = "";
    city_Validation.style.border = "solid 2px #26c820";
    city_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== category input validation ======

category_Validation.addEventListener("blur", () => {
  if (category_Validation.value === "- Select Category -") {
    document.getElementById("category_error").innerHTML = "Required field";
    category_Validation.style.border = "solid 2px red";
    category_Validation.style.color = "red";
  } else {
    document.getElementById("category_error").innerHTML = "";
    category_Validation.style.border = "solid 2px #26c820";
    category_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});
// ====== type input validation ======

type_Validation.addEventListener("blur", () => {
  if (type_Validation.value === "Type") {
    document.getElementById("type_error").innerHTML = "Required field";
    type_Validation.style.border = "solid 2px red";
    type_Validation.style.color = "red";
  } else {
    document.getElementById("type_error").innerHTML = "";
    type_Validation.style.border = "solid 2px #26c820";
    type_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== area input validation ======

area_Validation.addEventListener("blur", () => {
  if (area_Validation.value.length === 0) {
    document.getElementById("area_error").innerHTML = "Required field";
    area_Validation.style.border = "solid 2px red";
    area_Validation.style.color = "red";
  } else {
    document.getElementById("area_error").innerHTML = "";
    area_Validation.style.border = "solid 2px #26c820";
    area_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== house number input validation ======

house_Number_Validation.addEventListener("blur", () => {
  if (house_Number_Validation.value.length === 0) {
    document.getElementById("houseNumber_error").innerHTML = "Required field";
    house_Number_Validation.style.border = "solid 2px red";
    house_Number_Validation.style.color = "red";
  } else {
    document.getElementById("houseNumber_error").innerHTML = "";
    house_Number_Validation.style.border = "solid 2px #26c820";
    house_Number_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== house floor input validation ======

house_Floor_Validation.addEventListener("blur", () => {
  if (house_Floor_Validation.value.length === 0) {
    document.getElementById("houseFloor_error").innerHTML = "Required field";
    house_Floor_Validation.style.border = "solid 2px red";
    house_Floor_Validation.style.color = "red";
  } else {
    document.getElementById("houseFloor_error").innerHTML = "";
    house_Floor_Validation.style.border = "solid 2px #26c820";
    house_Floor_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== code_Postal input validation ======

code_Postal_Validation.addEventListener("blur", () => {
  if (code_Postal_Validation.value.length === 0) {
    document.getElementById("codePostal_error").innerHTML = "Required field";
    code_Postal_Validation.style.border = "solid 2px red";
    code_Postal_Validation.style.color = "red";
  } else {
    document.getElementById("codePostal_error").innerHTML = "";
    code_Postal_Validation.style.border = "solid 2px #26c820";
    code_Postal_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== code_Postal input validation ======

bathrooms_Validation.addEventListener("blur", () => {
  if (bathrooms_Validation.value.length === 0) {
    document.getElementById("bathroom_error").innerHTML = "Required field";
    bathrooms_Validation.style.border = "solid 2px red";
    bathrooms_Validation.style.color = "red";
  } else {
    document.getElementById("bathroom_error").innerHTML = "";
    bathrooms_Validation.style.border = "solid 2px #26c820";
    bathrooms_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

$(document).ready(function () {
  $("#add_new_announce").submit(function (event) {
    // Prevent the form from submitting the normal way and refreshing the page
    event.preventDefault();
    console.log("jalil betroji");
    console.log(validation_Arr);

    if (validation_Arr.length === 12) {
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
        },
      });
      window.location.href = "profile.php";
    }
  });
});
