<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Ajax Load More Pagination</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="main">
    <div id="header">
      <h1>PHP & Ajax Load More Pagination</h1>
    </div>

    <div id="table-data">
      <table id="loadData" border="1" width="100%" cellspacing="0" cellpadding="10px">
        <tr>
          <th>Id</th>
          <th>Name</th>
        </tr>
        <!-- The table rows will be dynamically loaded here -->
      </table>
      <div id="pagination">
        <button id="ajaxbtn" data-page="0">Load More</button>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script>
    $(document).ready(function(){
      // Function to load data via Ajax
      function loadData(page){
        $.ajax({
          url: "ajax-pagination.php",
          type: "POST",
          data : { page_no: page },
          success: function(data){
            if(data){
              $("#loadData").append(data);
              $("#ajaxbtn").data("page", page + 1); // Update the next page
            } else {
              $("#ajaxbtn").html("Finished");
              $("#ajaxbtn").prop("disabled", true);
            }
          }
        });
      }

      // Load initial data
      loadData(0);

      // Add Click Event on ajaxbtn
      $(document).on("click", "#ajaxbtn", function(){
        $("#ajaxbtn").html("Loading...");
        var nextPage = $(this).data("page");
        loadData(nextPage);
      });
    });
  </script>
</body>
</html>
