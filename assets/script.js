
      // current selection
      let currentModel = "circle";
      let currentColor = "red";

      function update() {
        document.getElementById(
          "productVariant"
        ).src = `assets/images/${currentModel}-${currentColor}.png`;
      }

      // connect model buttons
      // document.getElementById("model1").onclick = () => {
      //   currentModel = "rectangle";
      //   update();
      // };
      // document.getElementById("model2").onclick = () => {
      //   currentModel = "circle";
      //   update();
      // };
      // document.getElementById("model3").onclick = () => {
      //   currentModel = "star";
      //   update();
      // };
      //   document.getElementById("model4").onclick = () => {
      //   currentModel = "";
      //   update();
      // };

      // // connect color buttons
      // document.getElementById("redButton").onclick = () => {
      //   currentColor = "red";
      //   update();
      // };
      // document.getElementById("greenButton").onclick = () => {
      //   currentColor = "green";
      //   update();
      // };
      // document.getElementById("greyButton").onclick = () => {
      //   currentColor = "grey";
      //   update();
      // };

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
