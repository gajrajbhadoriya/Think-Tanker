<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Ajax Pagination</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="main">
    <div id="header">
      <h1>PHP & Ajax Serialize Form</h1>
    </div>

    <div id="table-data">
      <form id="submit_form">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td width="150px"><label>Name</label></td>
            <td><input type="text" name="fullname" id="fullname" /></td>
          </tr>
          <tr>
            <td><label>Age</label></td>
            <td><input type="number" name="age" id="age" /></td>
          </tr>
          <tr>
            <td><label for="dob">DOB</label><br></td>
            <td><input type="date" id="dob" name="dob" value="dob"></td>
          </tr>
          <tr>
            <td><label>Gender</label></td>
            <td>
              <input class="gender" type="radio" name="gender" value="male" /> Male  
              <input class="gender" type="radio" name="gender" value="female" /> Female
            </td>
          </tr>
          <tr>
            <td><label>Country</label></td>
            <td>
              <select id="country" name="country">
                 <option value="ind">India</option>
                 <option value="pk">Pakistan</option>
                 <option value="ban">Bangladesh</option>
                 <option value="ne">Nepal</option>
                 <option value="sl">Srilanka</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
               <label for="vehicle1"> I have a bike</label><br>
               <label for="vehicle2"> I have a car</label><br>
               <label for="vehicle3"> I have a boat</label><br><br>
            </td>
            <td>
              <input type="checkbox" class="vehicle" name="vehicle[]" value="Bike"><br>
              <input type="checkbox" class="vehicle" name="vehicle[]" value="Car"><br>
              <input type="checkbox" class="vehicle" name="vehicle[]" value="Boat"><br><br>
            </td>
          </tr>
          <tr>
            <td><label for="formFile" class="form-label">Profile Picture</label></td>
            <td><input class="form-control" name="photo" type="file" id="form_File"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="button" name="submit" id="submit" value="Submit" /></td>
          </tr>
        </table>
        <tr>
          <td id="table-data">
          </td>
        </tr>
      </form>  
      <div id="response"></div>  
    </div>
  </div>

<script type="text/javascript" src="js/jquery.js"></script>
<script>
  $(document).ready(function(){
    // function loadTable(){
    //   $.ajax({
    //     url : "ajax-load.php",
    //     type : "POST",
    //     success : function(data){
    //       $("#table-data").html(data);
    //     }
    //   });
    // }
    // loadTable()


    $("#submit").click(function(){
      var name = $("#fullname").val();
      var age = $("#age").val();
      var dob = $("#dob").val();
      var gender = $(".gender").val();
      var country = $("#country").val();
      var vehicle = $(".vehicle").val();
      var formfile = $("#form_File").val();


      // if(name == "" || age == "" || !$('input:radio[name=gender]').is(':checked') || !$('input:checkbox[name=vehicle]').is(':checked')  ){
      //   $('#response').fadeIn();
      //   $('#response').removeClass('success-msg').addClass('error-msg').html('All fields are required.');
      // }else{
       $('#response').html($('#submit_form').serialize());
        $.ajax({
          url: "ajax-insert.php",
          type: "POST",
          data : $('#submit_form').serialize(),
          beforesend: function(){
            $('#response').fadeIn();
            $('#response').removeClass('success-msg error-msg').addClass('process-msg').html('Loading response...');
          },
          success: function(data){
            if(data == 1){
              // loadTable();
              $("#addForm").trigger("reset");
              $("#success-message").html("Data Inserted Successfully.").slideDown();
              $("#error-message").slideUp();
            }else{
              $("#error-message").html("Can't Save Record.").slideDown();
              $("#success-message").slideUp();
            }

            $('#submit_form').trigger("reset");
            $('#response').fadeIn();
            $('#response').removeClass('error-msg').addClass('success-msg').html(data);
            setTimeout(function(){
              $('#response').fadeOut("slow");
            },4000);
          }
        });
      // }
    });
  });
</script>
</body>
</html>
