<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>


    <h1>Welcome</h1>

    <div id="wrapper">

        <div class="chat_wrapper">

            <div id="chat"></div>

            <form method="post">
                <textarea name="message" class="textarea" cols="30" rows="10"></textarea>
            </form>

        </div>

</div>
    
<script>

    $('.textarea').keyup(function(e){
        if(e.which == 13){
            $('form') .submit();       
        }
    });

    $('form').submit(function(){
        var message = $('.textarea').val()

        $.post('handler/messages.php?action=sendMessage&message='+messsge, );


    });


</script>

</body>
</html>