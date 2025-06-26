document.addEventListener("DOMContentLoaded", function () {
  const toast = document.getElementById("toast");
  if (toast) {
    const type = toast.getAttribute("data-type");
    const message = toast.getAttribute("data-message");

    const toastDiv = document.createElement("div");
    toastDiv.className = `toast-container toast-${type}`;
    toastDiv.textContent = message;

    // Create close button
    const closeBtn = document.createElement("span");
    closeBtn.innerHTML = "&times;";
    closeBtn.style.cssText =
      "margin-left: 12px; margin-right: -6px; font-weight: bold; cursor: pointer; float: right;";
    closeBtn.onclick = () => toastDiv.remove();

    toastDiv.appendChild(closeBtn);
    document.body.appendChild(toastDiv);
  }
});
