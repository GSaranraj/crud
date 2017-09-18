// Add Record
function addRecord() {
    // get values
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var email = $("#email").val();
	var phone = $("$phone").val();

    // Add record
    $.post("addRecord.php", {
        first_name: first_name,
        last_name: last_name,
        email: email
		phone:phone
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#first_name").val("");
        $("#last_name").val("");
        $("#email").val("");
		$("#phone").val("");
    });
}

// READ records
function readRecords() {
    $.get("readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}




function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_first_name").val(user.first_name);
            $("#update_last_name").val(user.last_name);
            $("#update_email").val(user.email);
			$("#update_phone").val(user.phone);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var first_name = $("#update_first_name").val();
    var last_name = $("#update_last_name").val();
    var email = $("#update_email").val();
	var phone = $("#update_phone").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("updateUserDetails.php", {
            id: id,
            first_name: first_name,
            last_name: last_name,
            email: email
			phone:phone
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
});
    readRecords(); // calling function