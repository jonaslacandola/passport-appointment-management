document.addEventListener("DOMContentLoaded", () => {
  const calendarDiv = document.querySelector("#calendar");
  const calendar = new FullCalendar.Calendar(calendarDiv, {
    initialView: "dayGridMonth",
    dateClick: (info) => {
      if (new Date(info.dateStr) <= new Date()) {
        alert("Please select an upcoming date");
        return;
      }

      console.log("adads");
    },
  });

  calendar.render();
});
