class Activity {
  constructor(logElementID) {
    this.logElement = document.getElementById(logElementID);
  }

  logEvent(message) {
    const p = document.createElement("p");
    p.textContent = message;
    this.logElement.appendChild(p);
  }

  attactEvents(form) {
    form.addEventListener("focusin", (e) => {
      this.logEvent(`focusin in ${e.target.name}`);
    });
    form.addEventListener("focusout", (e) => {
      this.logEvent(`focusout in ${e.target.name}`);
    });
    form.addEventListener("input", (e) => {
      this.logEvent(`Input in ${e.target.name} : ${e.target.value}`);
    });
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      this.logEvent("form submited");
      form.reset();
    });
    form.addEventListener("reset", () => {
      this.logEvent("form reseted");
      form.reset();
    });
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const activity = new Activity("eventLog");
  const form = document.getElementById("restaurantForm");
  activity.attactEvents(form);
});
