
      // current selection
      let currentModel = "circle";
      let currentColor = "red";

      function update() {
        document.getElementById(
          "productVariant"
        ).src = `assets/images/${currentModel}-${currentColor}.png`;
      }

      // connect model buttons
      document.getElementById("model1").onclick = () => {
        currentModel = "rectangle";
        update();
      };
      document.getElementById("model2").onclick = () => {
        currentModel = "circle";
        update();
      };
      document.getElementById("model3").onclick = () => {
        currentModel = "star";
        update();
      };

      // connect color buttons
      document.getElementById("redButton").onclick = () => {
        currentColor = "red";
        update();
      };
      document.getElementById("greenButton").onclick = () => {
        currentColor = "green";
        update();
      };
      document.getElementById("greyButton").onclick = () => {
        currentColor = "grey";
        update();
      };
