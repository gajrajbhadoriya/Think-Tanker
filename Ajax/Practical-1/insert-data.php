<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Styling for the form container */
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Styling for form labels */
    .form-label {
      text-align: right;
      padding-right: 10px;
    }

    /* Styling for form inputs */
    .form-input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    /* Styling for the submit button */
    .submit-button {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .submit-button:hover {
      background-color: #0056b3;
    }

    .data-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    /* Styling for table header */
    .data-table thead {
      background-color: #007bff;
      color: #fff;
    }

    /* Styling for table header cells */
    .data-table th {
      padding: 10px;
      text-align: left;
    }

    /* Styling for table rows */
    .data-table tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    /* Styling for table data cells */
    .data-table td {
      padding: 10px;
    }

    .delete-btn {
      background: red;
      color: #fff;
      padding: 4px 10px;
      border-radius: 3px;
    }

    .div tr {
      background-color: #007bff;
    }

    .edit-btn {
      background: blue;
      color: #fff;
      padding: 4px 10px;
      border-radius: 3px;
    }

    #model {
      background: rgba(0,0,0,0.7);
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: 100;
      display: none;
    }

    #model-form{
      background: #fff;
      width: 40%;
      position: relative;
      top: 20%;
      left: calc(50% - 20%);
      padding: 15px;
      border-radius: 4px;
    }

    #model-form h2{
      margin: 0 0 15px;
      padding-bottom: 10px;
      border-bottom: 1px solid #000;
    }

    #close-btn{
      background: red;
      color: white;
      line-height: 30px;
      text-align: center;
      border-radius: 50%;
      position: absolute;
      top: -15px;
      right: -15px;
      height: 30px;
      width: 30px;
      cursor: pointer;
    }
  </style>
  <title>HTML Form with CSS</title>
</head>

<body>
  <div class="form-container">
    <div id="error-message"> </div>
      <table class="table">
      <div id="search-bar">
          <label>Search :</label>
          <input type="text" id="search" autocomplete="off">
        </div>
        <tr>
          <td id="header">
            <h1><i>Add student using ajax</i></h1>
          </td>
        </tr>
        <tr>
          <td id="table-form">
          <form id="addForm">
            First Name : <input class="form-input" type="text" id="first_name" name="firstname">
            Last Name: <input class="form-input" type="text" id="last_name" name="lastname">
            <input type="submit" class="submit-button" id="save-button">
          </form>
          </td>
        </tr>
        <tr>
          <td id="table-data"></td>
        </tr>
      </table>
  </div>
  <div id="success-message"></div>
</body>

<div id="model">
        <div id="model-form">
          <h2>Edit Form</h2>
          <table cellpadding="10px" width="100%">
           
          </table>
          <div id="close-btn">x</div>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
        // load button code
        function loadTable() {
          $.ajax({
            url: "ajax-load.php",
            type: "POST",
            success: function(data) {
              // console.log(data,'daTA')
              $("#table-data").html(data);
            }
          })
        }
        loadTable();

        //insert button code
        $("#save-button").on("click", function(e) {
          e.preventDefault();
          let firstName = $("#firstname").val();
          let lastName = $("#lastname").val();

          if (firstName == "" || lastName == "") {
            $("#error-message").html("all field required").slideDown();
            $("#success-message").slideUp();
          } else {
            $.ajax({
              url: "ajax-insert.php",
              type: "POST",
              data: {
                first_name: firstName,
                last_name: lastName
              },
              success: function(data) {
                // console.log(data,'00e0rowe0')
                if (data == 1) {
                  loadTable();
                  $("#addForm").trigger("reset");
                } else {
                  $("#error-message").html("all field required").slideDown();
                  $("#success-message").slideUp();
                }
              }
            })
          }


        })

        // delete button code
        $(document).on("click", ".delete-btn", function() {
            if (confirm("Do you really want to delete record ?")) {
              var studentID = $(this).data("id");
              var elementID = this;
              $.ajax({
                url: "ajax-delete.php",
                type: "POST",
                data: {
                  id: studentID
                },
                success: function(data) {
                  if (data == 1) {
                    $(elementID).closest("tr").fadeOut(3000);
                  } else {
                    $("#error-message").html("Record can't delete").slideDown();
                    $("#success-message").slideUp();
                  }
                }
              })
            }
          })
        });

        //show model box
        $(document).on("click", ".edit-btn", function(){
          $("#model").show();
          var studentID = $(this).data("eid");

          $.ajax({
            url: "load-update-form.php",
            type:"POST",
            data:{id: studentID},
            success: function(data){
              $("#model-form table").html(data);
            }
          })
        })

        // close button
        $("#close-btn").on("click", function(e){
          $("#model").hide();
        } )

        //update data
        $(document).on("click", "#edit-submit", function(){
            var id = $("#edit-id").val();
            var firstName = $("#edit-fname").val();
            var lastName = $("#edit-lname").val();
            // console.log({firstName, lastName})
            $.ajax({
              url : "ajax-update-form.php",
              type : "POST",
              data : {id:id, first_name:firstName, last_name:lastName},
              success : function(data){
                if(data == 1){
                  $("#model").hide();
                  loadTable();
                }
              }
            })
        })

        $("#search").on("keyup",function(){
          var search_term = $(this).val();

          $.ajax({
          url: "ajax-live-search.php",
          type: "POST",
          data : {search:search_term },
          success: function(data) {
            $("#table-data").html(data);
          }
            });
        });


</script>

</html>