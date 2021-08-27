<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/email.css"> -->
    <style>
        *{
            box-sizing: border-box;
            font-family: Comfortaa;
        }

        body{
            margin: 0px;
            padding: 0px;
            height: 100vh;
            background: linear-gradient(to right,#121A50, #4A297A, #8A288F);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* <!-- Email Content Wrapper --> */
        .email-content-wrapper{
            width: 500px;
            padding: 10px 15px;
            background-color: white;
            border-radius: 10px;
            box-shadow:#121A50 0px 3px 6px;
        }

        .email-content-wrapper h2{
            text-align: center;
            margin-bottom: 7px;
        }

        .email-content-wrapper h3 span{
            color: gray;
        }
    </style>
</head>
<body>
    <!-- Email Content Wrapper -->
    <div class="email-content-wrapper">
        <!-- Email Heading -->
        <h2>You Have a New Message</h2>
        <!-- End Of Email Heading -->
        <hr>

        <!-- Diplay Senders Name -->
        <h3>Email Sent By: <span>{{ucfirst($firstname) . " " . ucfirst($lastname)}}</span></h3>
        <!-- End Of Diplay Senders Name -->

        <!-- Diaplay Email Title-->
        <h4>{{$subject}}</h4>
        <!-- End Of Diaplay Email Title-->

        <!-- Email Body -->
        <p>{{$email_message}}</p>
        <!-- End of Email Body -->

    </div>
    <!-- Email Content Wrapper -->
</body>
</html>