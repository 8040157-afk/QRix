const actions = [
  {
    id: "click",
    title: "Click & Get",
    points: 5,
    helper: "Tap to earn instantly",
    theme: "orange",
    icon: "☕️",
    badge: "5",
  },
  {
    id: "visit",
    title: "Visit & Earn",
    points: 10,
    helper: "Open the partner page",
    theme: "blue",
    icon: "✈️",
    badge: "10",
  },
  {
    id: "signup",
    title: "Sign Up & Get",
    points: 15,
    helper: "Join in seconds",
    theme: "green",
    icon: "📋",
    badge: "15",
  },
  {
    id: "special",
    title: "Special Offer",
    points: "???",
    helper: "Limited time bonus",
    theme: "red",
    icon: "🎁",
    badge: "???",
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
          <div class="action-button__icon" aria-hidden="true">${action.icon}</div>
          <div class="action-button__content">
            <div class="action-button__title">${action.title}</div>
            <div class="action-button__helper">${action.helper}</div>
          </div>
          <div class="action-button__badge">${action.badge}</div>
        </a>
      `;
    })
    .join("");
}
