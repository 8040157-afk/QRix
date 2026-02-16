const actions = [
  {
    id: "click",
    title: "Click & Get",
    points: 5,
    helper: "Tap to earn instantly",
    theme: "orange",
  },
  {
    id: "visit",
    title: "Visit & Earn",
    points: 10,
    helper: "Open the partner page",
    theme: "blue",
  },
  {
    id: "signup",
    title: "Sign Up & Get",
    points: 15,
    helper: "Join in seconds",
    theme: "green",
  },
  {
    id: "special",
    title: "Special Offer",
    points: 20,
    helper: "Limited time bonus",
    theme: "red",
  },
];

const actionsContainer = document.querySelector("#actions");

if (actionsContainer) {
  actionsContainer.innerHTML = actions
    .map((action) => {
      const url = `action.html?action=${encodeURIComponent(
        action.id
      )}&points=${encodeURIComponent(action.points)}`;
      return `
        <a class="action-button action-button--${action.theme}" href="${url}">
          <div>
            ${action.title}
            <span>${action.helper}</span>
          </div>
          <div class="action-button__points">${action.points} pts</div>
        </a>
      `;
    })
    .join("");
}
