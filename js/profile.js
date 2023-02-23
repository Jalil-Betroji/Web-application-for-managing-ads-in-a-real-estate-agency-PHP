const my_announces_btn = document.getElementById("my_announces");
const setting_btn = document.getElementById("setting");
const browse_more_btn = document.getElementById("browse_more");

const Announces_List_section = document.getElementById("full_Announces_List");
const profile_homePage_section = document.getElementById("profile_homePage");
const Profile_section = document.getElementById("Profile");

my_announces_btn.addEventListener("click", () => {
  Announces_List_section.classList.remove("profile_hide");
  profile_homePage_section.classList.add("profile_hide");
  Profile_section.classList.add("profile_hide");
});

setting_btn.addEventListener("click", () => {
  Profile_section.classList.remove("profile_hide");
  Announces_List_section.classList.add("profile_hide");
  profile_homePage_section.classList.add("profile_hide");
});

browse_more_btn.addEventListener("click", (e) => {
  e.preventDefault();
  profile_homePage_section.classList.add("profile_hide");
  Announces_List_section.classList.remove("profile_hide");
});
