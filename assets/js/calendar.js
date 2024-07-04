function formatDate(date) {
  const options = {
    weekday: "short",
    year: "numeric",
    month: "long",
    day: "numeric",
  };
  return date.toLocaleDateString("en-US", options);
}

document.addEventListener("DOMContentLoaded", () => {
  const calendarDiv = document.querySelector("#calendar");
  const calendar = new FullCalendar.Calendar(calendarDiv, {
    initialView: "dayGridMonth",
    dateClick: (info) => {
      const dateAndTime = document.querySelector("#dateAndTime");
      const timeAndPlace = document.querySelector("#sum-time");
      const date = new Date(info.dateStr);

      if (date <= new Date()) {
        alert("Please select an upcoming date.");
        return;
      }

      if (date.getDay() === 0 || date.getDay() === 6) {
        alert("Please select a valid date.");
        return;
      }

      dateAndTime.value = info.dateStr;
      timeAndPlace.innerText = formatDate(new Date(info.dateStr));
    },
  });

  calendar.render();
});
