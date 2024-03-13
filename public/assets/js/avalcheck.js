// $(document).ready(function(){ $('#bookingdate').change(function(){ var driver_id = $('#driver_id').val(); var bookingdate = $(this).val(); $.ajax({ url: '{{ url("check-availability") }}', method: 'POST', data: {driver_id: driver_id, bookingdate: bookingdate}, success: function(response){ if(response.success == true){ alert('Driver is not available on the specified date.'); } } }); }); });


// $(document).ready(function(){
//   $('#bookingdate').change(function(){
//       var driver_id = $('#driver_id').val();
//       var bookingdate = $(this).val();
//       $.ajax({
//           url: '{{ url("check-availability") }}',
//           method: 'POST',
//           data: {driver_id: driver_id, bookingdate: bookingdate},
//           success: function(response){
//               if(response.success == true){
//                   alert(response.message);
//               } else {
//                   alert(response.message);
//                   $('#driver_id').val(''); // Clear the driver_id field
//               }
//           }
//       });
//   });
// });


$(document).ready(function(){
  $('#bookingdate').datepicker({
    beforeShowDay: function(date) {
      var driver_id = $('#driver_id').val();
      var unavailableDates = []; // Initialize an empty array to store unavailable dates

      if (driver_id) {
        $.ajax({
          url: '{{ url("get-unavailable-dates") }}', // Modify the URL to get unavailable dates
          method: 'POST',
          data: {driver_id: driver_id},
          dataType: 'json', // Set the expected data type to JSON
          async: false // Make the AJAX call synchronous to ensure unavailableDates is populated before returning
        }).done(function(response) {
          if (response.success == true) {
            unavailableDates = response.unavailable_dates; // Extract the list of unavailable dates from the response
          }
        });
      }

      var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
      return [unavailableDates.indexOf(string) == -1];
    }
  });

  $('#driver_id').change(function(){
      var driver_id = $(this).val();
      var bookingdate = $('#bookingdate').val();
      $.ajax({
          url: '{{ url("check-availability") }}',
          method: 'POST',
          data: {driver_id: driver_id, bookingdate: bookingdate},
          success: function(response){
              if(response.success == true){
                  alert(response.message);
              } else {
                  alert(response.message);
                  $('#driver_id').val(''); // Clear the driver_id field
                  $('#bookingdate').val(''); // Clear the bookingdate field
              }
          }
      });
  });
});
