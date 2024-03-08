const allMultiSelect = document.querySelectorAll("[data-multiselect-target]");

allMultiSelect?.forEach((multiSelectBtn) => {
  const multiSelectId = multiSelectBtn.getAttribute("data-multiselect-target");
  const selectItemsContainer = document.getElementById(multiSelectId);
  const defaultDisplay = document.querySelector(
    `[data-multiselect-default="${multiSelectId}"]`
  );
  const selectedDisplay = document.querySelector(
    `[data-multiselect-selected="${multiSelectId}"]`
  );
  const totalSelectedDisplay = document.querySelector(
    `[data-multiselect-totalselected="${multiSelectId}"]`
  );

  const selectedDisplayText = document.createElement("p");
  selectedDisplayText.classList.add(
    "h-[25px]",
    "flex",
    "items-center",
    "px-[6px]",
    "bg-[#ECECEC]",
    "rounded-[4px]",
    "font-semibold",
    "text-[10px]",
    "text-[#4F4F4F]"
  );

  const getAllSelected = () => {
    const allInputs = selectItemsContainer.querySelectorAll(
      'input[type="checkbox"]:checked'
    );

    return allInputs;
  };

  multiSelectBtn.onclick = () => {
    if (selectItemsContainer.classList.contains("hidden")) {
      selectItemsContainer.classList.replace("hidden", "block");
      defaultDisplay.classList.replace("hidden", "flex");
      selectedDisplay.classList.replace("flex", "hidden");
      totalSelectedDisplay.classList.replace("block", "hidden");
    } else {
      selectItemsContainer.classList.replace("block", "hidden");
      totalSelectedDisplay.classList.replace("hidden", "block");

      if (getAllSelected().length > 0) {
        defaultDisplay.classList.replace("flex", "hidden");
        selectedDisplay.classList.replace("hidden", "flex");

        selectedDisplay.textContent = "";

        getAllSelected().forEach((item, index) => {
          if (index > 2) return;
          const name = item.parentElement.querySelector("p").textContent;
          let textDisplay = selectedDisplayText.cloneNode(true);
          textDisplay.textContent = name;
          selectedDisplay.appendChild(textDisplay);
        });

        if (getAllSelected().length > 3) {
          let totalSelectedText = `+${getAllSelected().length - 3} more people`;

          totalSelectedDisplay.textContent = totalSelectedText;
        } else {
          totalSelectedDisplay.textContent = "";
        }
      }
    }
  };
});
