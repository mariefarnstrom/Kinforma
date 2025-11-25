// pause/play buttons
const videos = document.querySelectorAll(".video");
const btn = document.querySelectorAll(".pauseButton");

btn.forEach((button, i) => {
  button.addEventListener("click", () => {
    const video = videos[i];
      if (video.paused) {
          video.play();
          button.classList.remove('playing');
      } else {
          video.pause();
          button.classList.add('playing');
      }
});
});
      
// configurator
let currentModel = "model1";
let currentColor = "red";

function update() {
  document.getElementById(
    "productVariant"
  ).src = `assets/images/${currentModel}-${currentColor}.png`;
}

const modelButtons = document.querySelectorAll('.modelButton');

modelButtons.forEach(button => {
  button.addEventListener('click', () => {

    modelButtons.forEach(btn => btn.classList.remove('active'));

    button.classList.add('active');

    currentModel = button.dataset.model;
    update();
  });
});

const colorButtons = document.querySelectorAll('.colorButton');

colorButtons.forEach(button => {
  button.addEventListener('click', () => {

    colorButtons.forEach(btn => btn.classList.remove('active'));

    button.classList.add('active');

    currentColor = button.dataset.color;
    update();
  });
});

console.log(document.querySelectorAll('.colorButton'));
document.querySelectorAll('.colorButton').forEach(b => console.log(b.dataset));
