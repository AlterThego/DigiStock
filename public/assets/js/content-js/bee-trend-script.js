
$(document).ready(function () {

    // Function to handle update button click
    $('.btn-update').click(function () {
        // Get data attributes from the clicked button
        var year = $(this).data('year');
        var colonies = $(this).data('colonies');
        var beekeepers = $(this).data('beekeepers');


        // Set the values in the update modal fields
        $('#update_year').val(year);
        $('#update_colonies').val(colonies);
        $('#update_beekeepers').val(beekeepers);

        // Get today's date in the format YYYY-MM-DD
        var today = new Date().toISOString().split('T')[0];

        // Set the value of the "Date Updated" input field to today's date
        $('#update_date').val(today);

    });





});





