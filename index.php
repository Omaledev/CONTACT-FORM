<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet" href="bootsrap/css">
</head>
<body style="background-color:hsl(186, 15%, 59%)">
    <div id="container" style="padding:200px 430px;";>
        <div id="sub-container" style=" float:hidden; width:35vw; height:80vh; 
         background-color:hsl(0, 0%, 100%); padding:20px; border-radius:8px;">
            <h1>Contact Us</h1>
            <div>
                <form action="form.php" method="post">
                    <div name="firstdiv" style="display:flex; gap:10px;">
                      <div>
                        <label for="fname">First Name <span>*</span></label><br>
                        <input type="text" name="first_name" style=" height:4vh; width:16.5vw; border-radius:5px">
                      </div>
                      <div>
                        <label for="lname">Last Name <span>*</span></label><br>
                        <input type="text" name="last_name" style=" height:4vh; width:16.5vw; border-radius:5px;">
                      </div>
                    </div>
                    <div style="margin-top:20px;">
                      <label for="eaddress">Email Address <span></span></label><br>
                      <input type="text" name= "email_address" style=" height:4vh; width:34.5vw; border-radius:5px;">
                    </div>
                    <div class="form-group radio" style="margin-top:20px">
                      <label for="qtype">Query Type <span>*</span></label><br>
                      <div id="query" style=" display:flex; gap:10px; margin-top:10px; ">
                        <div class="query-type" style="border: 1px solid; border-radius:5px; height:4.5vh; width:17vw">
                          <input type="radio" id="option1" name="query_type" >
                          <label for="option1">General Equiry</label> 
                        </div>
                        <div class="query type"style="border: 1px solid; border-radius:5px; height:4.5vh; width:17vw">
                        <input type="radio" id="option2" name="query_type">
                        <label for="option2">Support Request</label>
                        </div>
                      </div>
                    </div>
                    <div style="margin-top:20px">
                      <div class="text-area" style:="border:solid 1px #ededed; padding:15px;">
                        <label  for="msage">Message<span>*</span></label><br>
                        <textarea  style=" margin-top:10px; width:100%;" type="text" rows="4" name="message"></textarea>
                      </div>
                    </div>
                    <div class="consent" style="margin-top:20px;">
                      <input type="checkbox" name="consent">
                      <label for="consent">I consent to be contacted by the team</label>
                    </div>
                    <div style="margin-top:20px">
                      <input type="submit" style="width:35vw; height:5vh; border-radius:5px; background-color:hsl(169, 82%, 27%">
                    </div>
                </form>
            
                    
            </div>
        </div>
    </div>
    
</body>
</html>