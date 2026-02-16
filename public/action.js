const params = new URLSearchParams(window.location.search);
const action = params.get("action") || "unknown";
const points = params.get("points") || "0";

const actionName = document.querySelector("#action-name");
const actionPoints = document.querySelector("#action-points");

if (actionName) {
  actionName.textContent = action
    .split("-")
    .map((word) => word.charAt(0).toUpperCase() + word.slice(1))
    .join(" ");
}

if (actionPoints) {
  actionPoints.textContent = points;
}
