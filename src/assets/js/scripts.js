// Utils

// Toggle Classes
// Sirve para cambiar de una clase a otra
const toggleClasses = (element, class1, class2) => {
  if (element.classList.contains(class1)) {
    element.classList.remove(class1);
    element.classList.add(class2);
  } else {
    element.classList.remove(class2);
    element.classList.add(class1);
  }
};

// Click Away
// Sirve para cerrar un dropdown al hacer click fuera de él

// TODO: Solucionar bug que hace que se cierre el dropdown al hacer click en el handler
const handleClickAway = (event, handler, dropdown) => {
  const isClickInside =
    handler.contains(event.target) || dropdown.contains(event.target);

  if (!isClickInside) {
    toggleClasses(dropdown, "block", "hidden");
  }

  // if (!isClickInside) {
  //   dropdown.classList.remove("block");
  // }
};

// Handler Click
// Sirve para mostrar y ocultar un dropdown al hacer click en un elemento
const handlerToggleDisplay = (handler, element) => {
  handler?.addEventListener("click", () =>
    toggleClasses(element, "hidden", "block")
  );
};

// Sirve para agregar y quitar una clase al hacer click en un elemento
const handlerToggleClass = (handler, class1, class2, element) => {
  handler?.addEventListener("click", () =>
    toggleClasses(element, class1, class2)
  );
};

// Handler Mouseover
// Sirve para mostrar y ocultar un elemento al pasar el mouse sobre otro
const handleMouseOver = (sidebarLabel) =>
  toggleClasses(sidebarLabel, "opacity-0", "opacity-1");

// Handler Mouseout
// Sirve para mostrar y ocultar un elemento al pasar el mouse sobre otro
const handleMouseOut = (sidebarLabel) =>
  toggleClasses(sidebarLabel, "opacity-1", "opacity-0");


// Sidebar
const sidebarHandlers = document.getElementsByClassName("sidebar-handler");
const sidebarLabels = document.getElementsByClassName("sidebar-label");

[...sidebarHandlers].forEach((sidebarHandler, i) => {
  sidebarHandler.addEventListener("mouseover", () =>
    handleMouseOver(sidebarLabels[i])
  );
  sidebarHandler.addEventListener("mouseout", () =>
    handleMouseOut(sidebarLabels[i])
  );
});

// Account
const account = document.querySelector(".account");
const accountHandler = document.querySelector(".account-handler");
const accountDropdown = document.querySelector(".account-dropdown");

handlerToggleClass(
  accountHandler,
  "account",
  "account-is-active",
  account
);

handlerToggleClass(
  accountHandler,
  "account-dropdown",
  "account-dropdown-is-active",
  accountDropdown
);


// Status Dropdown
const statusHandler = document.querySelector(".status");
const statusDropdown = document.querySelector(".status-dropdown");

handlerToggleClass(
  statusHandler,
  "status-dropdown",
  "status-dropdown-is-active",
  statusDropdown
);

// Site Language Dropdown
const languageHandler = document.querySelector(".language-handler");
const languageDropdown = document.querySelector(".language-dropdown");

handlerToggleClass(
  languageHandler,
  "language-dropdown",
  "language-dropdown-is-active",
  languageDropdown
);

// Chat Config Language Dropdown
const chatLanguageHandler = document.querySelector(".chat-language-handler");
const chatLanguageDropdown = document.querySelector(".chat-language-dropdown");

handlerToggleClass(
  chatLanguageHandler,
  "chat-language-dropdown",
  "chat-language-dropdown-is-active",
  chatLanguageDropdown
);


// Chatbot
const chatbotHandler = document.querySelector(".chatbot-handler");
const chatbotIcon = document.querySelector(".chatbot-icon");
const chatbotBox = document.querySelector(".chatbot-box");
const chatbotBoxClose = document.querySelector(".chatbot-box-close");
const chatbotEmojisBox = document.querySelector(".chatbot-emojis-box");
const chatbotEmojisHandler = document.querySelector(".chatbot-emojis-handler");

const chatbotNotificationHandler = document.querySelector(
  ".chatbot-notification-handler"
);
const chatbotNotificationBox = document.querySelector(
  ".chatbot-notification-box"
);
const chatbotRatingHandler = document.querySelector(".chatbot-rating-handler");
const chatbotRatingBox = document.querySelector(".chatbot-rating-box");

if (chatbotHandler) {
  // Hover Handler
  chatbotHandler.addEventListener("mouseover", () =>
    toggleClasses(chatbotIcon, "icon-pen", "icon-message")
  );

  // Hover Handler
  chatbotHandler.addEventListener("mouseout", () =>
    toggleClasses(chatbotIcon, "icon-message", "icon-pen")
  );
}

// Muestra el Chat
handlerToggleClass(chatbotHandler, "chatbot-box", "chatbot-box-is-active", chatbotBox);

// Oculta el Chat
handlerToggleClass(chatbotBoxClose, "chatbot-box-is-active", "chatbot-box", chatbotBox);

// Muestra y oculta el box de emojis
handlerToggleClass(
  chatbotEmojisHandler,
  "chatbot-emojis-box",
  "chatbot-emojis-box-is-active",
  chatbotEmojisBox
);

// Muestra y oculta el box de notifications
handlerToggleClass(
  chatbotNotificationHandler,
  "chatbot-notification-box",
  "chatbot-notification-box-is-active",
  chatbotNotificationBox
);

// Muestra y oculta el box de rating
handlerToggleClass(
  chatbotRatingHandler,
  "chatbot-rating-box",
  "chatbot-rating-box-is-active",
  chatbotRatingBox
);

// Efecto para el label del input del chat
const chatbotInput = document.querySelector(".chatbot-input");
const chatbotInputLabel = document.querySelector(".chatbot-input-label");

if (chatbotInput) {
  chatbotInput.addEventListener("focusin", () => {
    chatbotInputLabel.classList.toggle("chatbot-input-label-is-active");
  });
  chatbotInput.addEventListener("focusout", () => {
    chatbotInputLabel.classList.toggle("chatbot-input-label-is-active");
  });
}

// FORMULARIOS

// Inputs Focus
const inputHandlers = document.getElementsByClassName("input");
const inputWrappers = document.getElementsByClassName("input-container");

[...inputHandlers].forEach((inputHandler, i) => {
  inputHandler.addEventListener("focusin", () => {
    [...inputWrappers].forEach((wrapper) => {
      wrapper.classList.remove("input-container-is-active");
    });
    inputWrappers[i].classList.add("input-container-is-active");
  });

  inputHandler.addEventListener("focusout", () => {
    inputWrappers[i].classList.remove("input-container-is-active");
  });
});

// Search
const searchHandler = document.querySelector(".search-input");
const searchWrapper = document.querySelector(".search");

if (searchHandler) {
  searchHandler.addEventListener("focusin", () => {
    searchWrapper.classList.toggle("search-is-active");
  });
  searchHandler.addEventListener("focusout", () => {
    searchWrapper.classList.toggle("search-is-active");
  });
}

// Notifications
const notificationHandler = document.querySelector(".notification-handler");
const notificationCenter = document.querySelector(".notification-center");

if (notificationHandler) {
  notificationHandler.addEventListener("click", () => {
    notificationCenter.classList.toggle("notification-center-is-active");
    notificationHandler.classList.toggle("button-icon-is-active");
  });
}
