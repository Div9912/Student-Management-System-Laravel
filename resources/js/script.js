
function generateDateHeaders() {
    const startDate = new Date();
    startDate.setDate(startDate.getDate() - startDate.getDay() + 1); // Set to the start of the week (Monday)

    const dateHeaders = ["date1", "date2", "date3", "date4", "date5", "date6"];
    let dateIndex = 0;

    for (let i = 0; dateIndex < dateHeaders.length; i++) {
        const currentDate = new Date(startDate);
        currentDate.setDate(startDate.getDate() + i);

        // Skip Sundays
        if (currentDate.getDay() === 0) {
            continue;
        }

        const day = String(currentDate.getDate()).padStart(2, "0");
        const month = String(currentDate.getMonth() + 1).padStart(2, "0");
        const year = currentDate.getFullYear();
        const dateString = `${day}-${month}-${year}`;

        document.getElementById(dateHeaders[dateIndex]).textContent = dateString;
        dateIndex++;
    }
}

function initializeAttendance() {
    const rows = document.querySelectorAll("#checkboxTable tbody tr");

    rows.forEach((row, rowIndex) => {
        const checkboxes = row.querySelectorAll(".checkbox");
        const countElement = row.querySelector(".selected");

        let count = 0;
        checkboxes.forEach((checkbox, checkboxIndex) => {
            const checkboxId = `checkbox-${rowIndex}-${checkboxIndex}`;
            checkbox.id = checkboxId;
            const isChecked = localStorage.getItem(checkboxId) === "true";
            checkbox.checked = isChecked;

            if (isChecked) {
                count++;
            }

            checkbox.addEventListener("change", function () {
                if (this.checked) {
                    count++;
                } else {
                    count--;
                }
                countElement.textContent = count;
                localStorage.setItem(checkboxId, this.checked);
            });
        });

        countElement.textContent = count;
    });
}

document.addEventListener("DOMContentLoaded", function () {
    generateDateHeaders();
    initializeAttendance();
});

window.onload = function () {
    document.getElementById("downloadexcel").addEventListener("click", function () {
        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("#checkboxTable"));
    });
};
