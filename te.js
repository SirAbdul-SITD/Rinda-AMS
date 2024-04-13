// Get the table element from the HTML document
var table = $("#timetable");

// Get the buttons elements from the HTML document
var addRow = $("#add-row");
var addColumn = $("#add-column");
var deleteRow = $("#delete-row");
var deleteColumn = $("#delete-column");
var save = $("#save");

// Load the data from the localStorage if it exists
if (localStorage.getItem("timetable")) {
    // Parse the JSON string into an array of arrays
    var data = JSON.parse(localStorage.getItem("timetable"));
    // Clear the table content
    table.html("");
    // Loop through the data array and append each row to the table
    for (var i = 0; i < data.length; i++) {
        // Create a new table row element
        var row = $("<tr></tr>");
        // Loop through the row array and append each cell to the row
        for (var j = 0; j < data[i].length; j++) {
            // Create a new table cell element
            var cell = $("<td></td>");
            // Create a new input element with the value from the data array
            var input = $("<input type='text'>").val(data[i][j]);
            // Append the input element to the cell element
            cell.append(input);
            // Append the cell element to the row element
            row.append(cell);
        }
        // Append the row element to the table element
        table.append(row);
    }
}

// Define a function to add a new row to the table
function addNewRow() {
    // Get the number of columns from the first row of the table
    var columns = table.find("tr:first td").length;
    // Create a new table row element
    var row = $("<tr></tr>");
    // Loop through the number of columns and append a new cell to the row
    for (var i = 0; i < columns; i++) {
        // Create a new table cell element
        var cell = $("<td></td>");
        // Create a new input element with an empty value
        var input = $("<input type='text'>").val("");
        // Append the input element to the cell element
        cell.append(input);
        // Append the cell element to the row element
        row.append(cell);
    }
    // Append the row element to the table element
    table.append(row);
}

// Define a function to add a new column to the table
function addNewColumn() {
    // Loop through each row of the table and append a new cell to the row
    table.find("tr").each(function() {
        // Create a new table cell element
        var cell = $("<td></td>");
        // Create a new input element with an empty value
        var input = $("<input type='text'>").val("");
        // Append the input element to the cell element
        cell.append(input);
        // Append the cell element to the row element
        $(this).append(cell);
    });
}

// Define a function to delete the last row from the table
function deleteLastRow() {
    // Get the number of rows from the table
    var rows = table.find("tr").length;
    // Check if the table has more than one row
    if (rows > 1) {
        // Remove the last row from the table
        table.find("tr:last").remove();
    }
}

// Define a function to delete the last column from the table
function deleteLastColumn() {
    // Get the number of columns from the first row of the table
    var columns = table.find("tr:first td").length;
    // Check if the table has more than one column
    if (columns > 1) {
        // Loop through each row of the table and remove the last cell from the row
        table.find("tr").each(function() {
            $(this).find("td:last").remove();
        });
    }
}

// Define a function to save the data of the table to the localStorage
function saveData() {
    // Create an empty array to store the data
    var data = [];
    // Loop through each row of the table and push the values of the inputs to the data array
    table.find("tr").each(function() {
        // Create an empty array to store the row data
        var row = [];
        // Loop through each cell of the row and push the value of the input to the row array
        $(this).find("td").each(function() {
            // Get the value of the input element
            var value = $(this).find("input").val();
            // Push the value to the row array
            row.push(value);
        });
