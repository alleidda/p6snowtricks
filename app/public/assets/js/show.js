const showMedias = document.querySelector(".show-medias");
const btnShow = document.querySelector(".btn-show");
const btnMute = document.querySelector(".btn-mute");

btnShow.addEventListener("click", () => {
  showMedias.style.display = "block";
  btnShow.style.display = "none";
  btnMute.style.display = "inline-block";
});
btnMute.addEventListener("click", () => {
  showMedias.style.display = "none";
  btnShow.style.display = "inline-block";
  btnMute.style.display = "none";
});
