<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax CRUD</title>
  <link rel="stylesheet" href="css/style.css">
</head>
composer create-project laravel/laravel Auth-System

<body>
  <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1>PHP & Ajax CRUD</h1>
      </td>
    </tr>
    <tr>
      <td align="center"><button class="add-btn">Add Records</button></td>
    </tr>
    <tr>
      <td align="center"><button id="show-btn">Show Records</button></td>
    </tr>
    <tr>
      <td id="table-data">
      </td>
    </tr>
  </table>
  <div id="error-message"></div>
  <div id="success-message"></div>
  <div id="modal">
    <div id="modal-form">
      <h2>ADD Form</h2>
      <table cellpadding="10px" width="100%">
        <tr>
          <td id="table-form">
            <form id="addForm" enctype="multipart/form-data">
              First Name : <input type="text" name="first_name" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Last Name : <input type="text" name="last_name" id="lname"><br>
              Gender : &nbsp;&nbsp; <input class="gender" type="radio" name="gender" value="male" /> Male
              <input class="gender" type="radio" name="gender" value="female" /> Female <br>
              Country : <select id="country" name="country">
                <option value="ind">India</option>
                <option value="pk">Pakistan</option>
                <option value="ban">Bangladesh</option>
                <option value="ne">Nepal</option>
                <option value="sl">Srilanka</option>
              </select><br>
              Reading : <input type="checkbox" class="hobbies" name="hobbies[]" value="reading"><br>
              Writing : <input type="checkbox" class="hobbies" name="hobbies[]" value="writing"><br>
              Profile : <input class="photo" name="photo" type="file" id="photo"><br>

              <input type="submit" id="save-button" value="Save">
            </form>
          </td>
        </tr>
      </table>
      <div id="close-btn">X</div>
    </div>
  </div>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      // add validation
      $('#addForm').validate({
        rules: {
          first_name: {
            required: true,
            minlength: 5
          },
          last_name: {
            required: true,
            minlength: 5
          },
          gender: "required",
          country: {
            required: {
              depends: function(element) {
                return $("#country").val() == "none";
              }
            }
          },
          'hobbies[]': {
            required: function() {
              return $("input[name='hobbies[]']:checked").length > 0;
            }
          },
          photo: "required"
        },
        messages: {
          first_name: {
            required: "Please enter your first name",
            minlength: "firstname name must be at least 5 characters long"
          },
          last_name: {
            required: "Please enter your last name",
            minlength: "Last name must be at least 5 characters long"
          },
          gender: "Please select your gender",
          country: {
            required: "Please select an option from the list, if none are appropriate please select 'Other'",
          },
          'hobbies[]': "Please select at least one hobby",
          photo: "Photo is required"
        }
      });


      // if clicking on show btn
      $("#show-btn").on("click", function(e) {
        $.ajax({
          url: "ajax-load.php",
          type: "POST",
          success: function(data) {
            $("#table-data").html(data);
          }
        });
        // loadTable();
      });

      function loadTable() {
        $.ajax({
          url: "ajax-load.php",
          type: "POST",
          success: function(data) {
            $("#table-data").html(data);
          }
        });
      }
      loadTable();

      $("#save-button").click(function(e) {
        e.preventDefault();

        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var gender = $("input[name='gender']:checked").val();
        var country = $("#country").val();
        var hobbies = [];
        $(".hobbies:checked").each(function() {
          hobbies.push($(this).val());
        });

        var ajaxData = new FormData();
        var photo = $("#photo")[0].files[0];
        ajaxData.append('photo', photo);

        ajaxData.append('first_name', fname);
        ajaxData.append('last_name', lname);
        ajaxData.append('gender', gender);
        ajaxData.append('country', country);
        $.each(hobbies, function(index, value) {
          ajaxData.append('hobbies[]', value);
        });

        if (fname === "" || lname === "" || typeof gender === "undefined" || country === "" || hobbies.length === 0 || photo === "") {
          $("#error-message").html("All fields are required.").slideDown();
          $("#success-message").slideUp();
        } else {
          $.ajax({
            url: "insert.php",
            type: "POST",
            data: ajaxData,
            processData: false,
            contentType: false,
            success: function(data) {
              if (data == 1) {
                $("#modal").hide();
                loadTable();
                $("#success-message").html("Data Inserted Successfully.").slideDown().fadeOut(2000);
                $("#error-message").slideUp();
              } else {
                $("#error-message").html("Can't Save Record.").slideDown();
                $("#success-message").slideUp();
              }
            }
          });
        }
      });

      //Delete Records
      $(document).on("click", ".delete-btn", function() {
        if (confirm("Do you really want to delete this record ?")) {
          var studentId = $(this).data("id");
          var element = this;

          $.ajax({
            url: "ajax-delete.php",
            type: "POST",
            data: {
              id: studentId
            },
            success: function(data) {
              if (data == 1) {
                $("#success-message").html("Data Delete Successfully").slideDown(3000).fadeOut(6000);
                $(element).closest("tr").fadeOut();
              } else {
                $("#error-message").html("Can't Delete Record.").slideDown();
                $("#success-message").slideUp();
              }
            }
          });
        }
      });

      // show add form

      $(document).on("click", ".add-btn", function() {
        $("#modal").show();
      });

      //Show Modal Box
      $(document).on("click", ".edit-btn", function() {
        $("#modal").show();
        var studentId = $(this).data("eid");

        $.ajax({
          url: "load-update-form.php",
          type: "POST",
          data: {
            id: studentId
          },
          success: function(data) {
            $("#modal-form table").html(data);
          }
        })
      });

      //Hide Modal Box
      $("#close-btn").on("click", function() {
        $("#modal").hide();
      });

      //Save Update Form
      $(document).on("click", "#edit-submit", function() {
        var stuId = $("#edit-id").val();
        var fname = $("#edit-fname").val();
        var lname = $("#edit-lname").val();
        var gender = $("input[name='gender']:checked").val();
        var country = $("#country").val();
        var hobbies = [];
        $(".hobbies:checked").each(function() {
          hobbies.push($(this).val());
        });

        var ajaxData = new FormData();
        var photo = $("#photo")[0].files[0];
        ajaxData.append('photo', photo);

        ajaxData.append('id', stuId);
        ajaxData.append('first_name', fname);
        ajaxData.append('last_name', lname);
        ajaxData.append('gender', gender);
        ajaxData.append('country', country);
        $.each(hobbies, function(index, value) {
          ajaxData.append('hobbies[]', value);
        });


        $.ajax({
          url: "ajax-update-form.php",
          type: "POST",
          data: ajaxData,
          processData: false,
          contentType: false,
          success: function(data) {
            if (data == 1) {
              $("#modal").hide();
              loadTable();
            }
          }
        })
      });

      // Live Search
      $("#search").on("keyup", function() {
        var search_term = $(this).val();

        $.ajax({
          url: "ajax-live-search.php",
          type: "POST",
          data: {
            search: search_term
          },
          success: function(data) {
            $("#table-data").html(data);
          }
        });
      });
    });
  </script>
</body>

</html>