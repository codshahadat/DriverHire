
    function updateDriverId() {
        var select = document.getElementById('driver');
        var driverIdInput = document.getElementById('driver_id');

        // Get the selected option
        var selectedOption = select.options[select.selectedIndex];

        // Update the hidden input value with the data-driver-id attribute
        driverIdInput.value = selectedOption.getAttribute('data-driver-id');
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Function to calculate total cost
        function calculateTotalCost() {
            var bookingDateInput = document.getElementById('bookingdate');
            var bookingEndDateInput = document.getElementById('bookingend');
            var totalCostInput = document.getElementById('totalCost');

            // Get the selected booking dates
            var bookingDate = new Date(bookingDateInput.value);
            var bookingEndDate = new Date(bookingEndDateInput.value);

            // Calculate the difference in days
            var timeDifference = bookingEndDate.getTime() - bookingDate.getTime();
            var totalDays = Math.ceil(timeDifference / (1000 * 3600 * 24));

            // Assuming the cost per day is $700, you can adjust it accordingly
            // var costPerDay = 700;

            // Set the cost per day based on the driver type
            var drivertype = document.getElementById('drivertype').value;

    var costPerDay;
    switch (drivertype) {
        case 'Private':
            costPerDay = 700;
            break;
        case 'Uber':
            costPerDay = 1000;
            break;
        case 'Company':
            costPerDay = 1500;
    }

            // Calculate total cost
            var totalCost = totalDays * costPerDay;

            // Update the total cost input field
            totalCostInput.value = totalCost;
        }

        // Attach the calculateTotalCost function to the change event of booking date and end date inputs
        document.getElementById('bookingdate').addEventListener('change', calculateTotalCost);
        document.getElementById('bookingend').addEventListener('change', calculateTotalCost);
    });

