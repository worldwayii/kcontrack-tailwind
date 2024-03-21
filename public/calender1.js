// constants
const isLeapYear = (year) => {
    return (
      (year % 4 === 0 && year % 100 !== 0) || (year % 100 === 0 && year % 400 === 0)
    );
  };

  const getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28;
  };

  const month_names = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  const calenders = document.querySelectorAll("[data-calender-element]");

  calenders.forEach((calender) => {
    const calenderID = calender.getAttribute("data-calender-element");

    let nextYearButton = calender.querySelector(
      `[data-calender-next-year="${calenderID}"]`
    );

    let prevYearButton = calender.querySelector(
      `[data-calender-prev-year="${calenderID}"]`
    );

    let monthPicker = calender.querySelector(
      `[data-calender-month-picker="${calenderID}"]`
    );

    let monthList = calender.querySelector(
      `[data-calender-months="${calenderID}"]`
    );

    if (monthPicker) {
      monthPicker.onclick = () => {
        monthList.classList.replace("hidden", "grid");
      };
    }

    const generateCalendar = (month, year) => {
      let calendar_days = calender.querySelector(
        `[data-calender-days="${calenderID}"]`
      );
      calendar_days.innerHTML = "";
      let calendar_header_year = calender.querySelector(
        `[data-calender-year="${calenderID}"]`
      );
      let days_of_month = [
        31,
        getFebDays(year),
        31,
        30,
        31,
        30,
        31,
        31,
        30,
        31,
        30,
        31,
      ];

      let currentDate = new Date();

      monthPicker.innerHTML = month_names[month];

      calendar_header_year.innerHTML = year;

      let first_day = new Date(year, month);

      for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
        let day = document.createElement("label");

        day.classList.add(
          "w-[40px]",
          "h-[27px]",
          "flex",
          "items-center",
          "justify-center",
          "cursor-pointer",
          "text-[#222730]",
          "hover:bg-[#0075FF]",
          "hover:text-white-0",
          "has-[:checked]:bg-[#0075FF]",
          "has-[:checked]:text-white-0",
          "relative"
        );

        if (i >= first_day.getDay()) {
          let dayOfMonth = i - first_day.getDay() + 1;
          day.textContent = dayOfMonth;
          const dateId = `${dayOfMonth}/${currentMonth.value + 1}/${currentYear.value}`;

          day.setAttribute("for", dateId);
          const inputElement = document.createElement("input");
          inputElement.type = "checkbox";
          inputElement.setAttribute("name", calenderID);
          inputElement.classList.add(
            "absolute",
            "top-0",
            "left-0",
            "right-0",
            "bottom-0",
            "z-10",
            "invisible"
          );

          day.appendChild(inputElement);
          inputElement.id = dateId;
          inputElement.value = dateId;

          inputElement.addEventListener('click', () => {
            const selectedDates = Array.from(document.querySelectorAll(`input[name="${calenderID}"]:checked`)).map(input => input.value);
            Livewire.dispatch('updateDate', {selected_date: selectedDates});
          });

          // Disable past dates
          const compareDate = new Date(year, month, dayOfMonth);
          if (compareDate < currentDate.setHours(0, 0, 0, 0)) {
            inputElement.disabled = true;
            day.classList.add("disabled");
          }

          if (
            dayOfMonth === currentDate.getDate() &&
            year === currentDate.getFullYear() &&
            month === currentDate.getMonth()
          ) {
            day.classList.add("current-date");
          }
        }

        calendar_days.appendChild(day);
      }
    };

    month_names.forEach((e, index) => {
      let month = document.createElement("div");
      month.classList.add("cursor-pointer");
      month.innerHTML = `<div>${e}</div>`;

      monthList.append(month);
      month.onclick = () => {
        currentMonth.value = index;
        generateCalendar(currentMonth.value, currentYear.value);
        monthList.classList.replace("grid", "hidden");
      };
    });

    prevYearButton.onclick = () => {
      --currentYear.value;
      generateCalendar(currentMonth.value, currentYear.value);
    };

    nextYearButton.onclick = () => {
      ++currentYear.value;
      generateCalendar(currentMonth.value, currentYear.value);
    };

    let currentDate = new Date();
    let currentMonth = { value: currentDate.getMonth() };
    let currentYear = { value: currentDate.getFullYear() };
    generateCalendar(currentMonth.value, currentYear.value);
  });
