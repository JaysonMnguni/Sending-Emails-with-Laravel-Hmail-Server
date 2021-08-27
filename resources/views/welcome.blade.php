<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending Emails with HMail Server</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/fontawesome/css/all.css")}}">
    <link rel="stylesheet" href="{{asset("css/form.css")}}">
</head>
<body class="d-flex align-items-center justify-content-center">

    <!-- Card: Email Form Container -->
    <div class="card col-6">
        <!-- Card Header -->
        <div class="card-header">
            <i class="fas fa-mail-bulk me-2" aria-hidden="true"></i>Send Email
        </div>
        <!-- End Of Card Header -->

        <!-- Card Body -->
        <div class="card-body">

            <!-- Display Success Message -->
            @if (session("success"))
                <div class="alert alert-success border border-success text-center my-3">
                    <b>{{session("success")}}</b>
                </div>
            @endif
            <!-- Display Success Message -->

            <!-- Email Form -->
            <form action="{{route("send.email")}}" method="POST" class="email-form">
                <!-- Row -->
                <div class="row mb-3">
                    <!-- Form Group -->
                    <div class="form-group col">
                        <label for="">Your First name</label>
                        <!-- Input Group -->
                        <div class="input-group">
                            <!-- Input Group Prepend -->
                            <div class="input-group-prepend">
                                <span class="input-group-text h-100"><i class="fas fa-user-tie" aria-hidden="true"></i></span>
                            </div>
                            <!-- Input Group Prepend -->
                            <input type="text" name="your_first_name" class="form-control  {{$errors->has("your_first_name") ? 'is-invalid': ''}}"  value="{{old("your_first_name")}}" placeholder="Enter Your First Name">
                        </div>
                        <!-- End Of Input Group -->
                        <small class="text-danger">{{$errors->first("your_first_name")}}</small>
                    </div>
                    <!-- End Of Form Group -->

                    <!-- Form Group -->
                    <div class="form-group col">
                        <label for="">Your Last name</label>
                        <!-- Input Group -->
                        <div class="input-group">
                            <!-- Input Group Prepend -->
                            <div class="input-group-prepend">
                                <span class="input-group-text h-100"><i class="fas fa-user-tie" aria-hidden="true"></i></span>
                            </div>
                            <!-- Input Group Prepend -->
                            <input type="text"  name="your_last_name" class="form-control  {{$errors->has("your_last_name") ? 'is-invalid': ''}}"  value="{{old("your_last_name")}}" placeholder="Enter Your Last Name">
                        </div>
                        <!-- End Of Input Group -->
                        <small class="text-danger">{{$errors->first("your_last_name")}}</small>
                    </div>
                    <!-- End Of Form Group -->
                </div>
                <!-- End Of Row -->

                <!-- Form Group -->
                <div class="form-group col mb-3">
                    <label for="">Your Email</label>
                    <!-- Input Group -->
                    <div class="input-group">
                        <!-- Input Group Prepend -->
                        <div class="input-group-prepend">
                            <span class="input-group-text h-100"><i class="fas fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <!-- Input Group Prepend -->
                        <input type="email" name="your_email" class="form-control  {{$errors->has("your_email") ? 'is-invalid': ''}}"  value="{{old("your_email")}}" placeholder="Enter Your Email">
                    </div>
                    <!-- End Of Input Group -->
                    <small class="text-danger">{{$errors->first("your_email")}}</small>
                </div>
                <!-- End Of Form Group -->
                <hr>
                
                <!-- Form Group -->
                <div class="form-group col mb-3">
                    <label for="">Receiver Email</label>
                    <!-- Input Group -->
                    <div class="input-group">
                        <!-- Input Group Prepend -->
                        <div class="input-group-prepend">
                            <span class="input-group-text h-100"><i class="fas fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <!-- Input Group Prepend -->
                        <input type="email"  name="receiver_email" class="form-control  {{$errors->has("receiver_email") ? 'is-invalid': ''}}"  value="{{old("receiver_email")}}" placeholder="Enter Receiver Email">
                    </div>
                    <!-- End Of Input Group -->
                    <small class="text-danger">{{$errors->first("receiver_email")}}</small>
                </div>
                <!-- End Of Form Group -->  
                
                <!-- Form Group -->
                <div class="form-group col mb-3">
                    <label for=""> Email Subject</label>
                    <!-- Input Group -->
                    <div class="input-group">
                        <!-- Input Group Prepend -->
                        <div class="input-group-prepend">
                            <span class="input-group-text h-100"><i class="fas fa-pen-alt" aria-hidden="true"></i></span>
                        </div>
                        <!-- Input Group Prepend -->
                        <input type="text"  name="subject" class="form-control  {{$errors->has("subject") ? 'is-invalid': ''}}"  value="{{old("subject")}}" placeholder="Enter Subject">
                    </div>
                    <!-- End Of Input Group -->
                    <small class="text-danger">{{$errors->first("subject")}}</small>
                </div>
                <!-- End Of Form Group -->
                
                <!-- Form Group -->
                <div class="form-group col mb-3">
                    <label for=""> Email Subject</label>
                    <!-- Input Group -->
                    <div class="input-group">
                        <!-- Input Group Prepend -->
                        <div class="input-group-prepend">
                            <span class="input-group-text h-100"><i class="fas fa-envelope-open-text" aria-hidden="true"></i></span>
                        </div>
                        <!-- Input Group Prepend -->
                        <textarea name="email_message" id="email_message" class="form-control {{$errors->has("email_message") ? 'is-invalid' : ''}}" value="{{old("email_message")}}" cols="30" rows="2"></textarea>
                    </div>
                    <!-- End Of Input Group -->
                    <small class="text-danger">{{$errors->first("email_message")}}</small>
                </div>
                <!-- End Of Form Group --> 
                <br>
                @csrf
                <button id="send-email-btn" type="submit" class="btn btn-md">Send Email</button>
            </form>
            <!-- End Of Email Form -->

        </div>
        <!-- End Of Card Body -->
    </div>
    <!-- End Of Card: Email Form Container -->
    
</body>
</html>