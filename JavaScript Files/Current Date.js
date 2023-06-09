function displayDate() {
    var currentDate = new Date();
  
    var year = currentDate.getFullYear();
    var month = currentDate.getMonth() + 1;
    var day = currentDate.getDate();
  
    // Add leading zeros if the values are less than 10
    month = (month < 10 ? "0" : "") + month;
    day = (day < 10 ? "0" : "") + day;
  
    var dateString = year + "-" + month + "-" + day;
  
    // Update the date element
    document.getElementById("date").innerHTML = dateString;
  }
  
  // Call the displayDate function to update the date
  displayDate();