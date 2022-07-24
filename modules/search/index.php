<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Find Mate</title>
</head>
<body>
    <div class="container" style="max-width:50%;">
        <div class="text-center mt-5 mb-4">
            <h2 style="color: blue;">FIND MATE</h2>
        </div>

        <input type="text" class="form-control" id="twitter" autocomplete = "off" placeholder="Search....">
    </div>

    <div id="searchresult"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $("#twitter").keyup(function(){

                var input = $(this).val(); 
                // alert(input);

                if(input != ""){
                    $.ajax({
                        url:"livesearch.php",
                        method:"POST",
                        data:{input:input},

                        success:function(data){
                            $("#searchresult").html(data);
                        }
                    });
                }else{
                    $("#searchresult").css("display", "none");
                }
            });
        });
    </script>
</body>
</html>