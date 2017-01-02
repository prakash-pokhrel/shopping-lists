<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
 $(document).on('change','#ch',function(){
                         var val = $('#name').val();
                         $.ajax({
                               url: 'demo_test_post.php', //code to populate inactive projects
                               data: {active_status:val},
                               type: 'GET',
                               //dataType: 'html',
                               success: function(result){
                                    $('#hello').html(result); 
                               }
                          });
                   });

</script>
</head>
<body>

<input type="checkbox" name="ch" id="ch">
<input type="text" id="name" name="name" value="Prakash">
<p id="hello"></p>

</body>
</html>