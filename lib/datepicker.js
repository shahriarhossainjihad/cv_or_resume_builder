// Add datepicker to input fields
$(function () {
  $("#rgstr_dt, #card_rcv_dt, #brth_dt").datepicker();
});

// Add submit event listener to form
$("#myForm").submit(function (event) {
  event.preventDefault(); // prevent default form submission

  // Get the values of the date fields
  var rgstr_dt = $("#rgstr_dt").val();
  var card_rcv_dt = $("#card_rcv_dt").val();
  var brth_dt = $("#brth_dt").val();

  // Send the data to the server using AJAX
  $.ajax({
    type: "POST",
    url: "#",
    data: {
      rgstr_dt: rgstr_dt,
      card_rcv_dt: card_rcv_dt,
      brth_dt: brth_dt,
    },
    success: function (response) {
      console.log(response);
    },
  });
});

