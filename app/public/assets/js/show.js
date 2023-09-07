const showMedias = document.querySelector(".show-medias");
const btnMute = document.querySelector(".btn-mute");
const btnShow = document.querySelector(".btn-show");

/* showMedias.style.display = "none"; */

btnMute.addEventListener("click", () => {
  showMedias.style.display = "none";
  btnMute.style.display = "none";
  btnShow.style.display = "inline-block";
});

btnShow.addEventListener("click", () => {
  showMedias.style.display = "block";
  btnShow.style.display = "none";
  btnMute.style.display = "inline-block";
});

// const showMedias = document.querySelector(".show-medias");
// const btnShow = document.querySelector(".btn-show");
// const btnMute = document.querySelector(".btn-mute");

// btnShow.addEventListener("onClick", () => {
//   showMedias.style.display = "block";
//   btnShow.style.display = "inline-block";
//   btnMute.style.display = "inline-block";
// });
// btnMute.addEventListener("onClick", () => {
//   showMedias.style.display = "none";
//   btnShow.style.display = "none";
//   btnMute.style.display = "none";
// });
