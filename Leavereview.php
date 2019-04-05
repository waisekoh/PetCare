<? php
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Leave A Review </title>
        <link rel="stylesheet" type="text/css" href="css/leavereview.css">
    </head>
    
    <body>
            <div class="topnav">
                <a class="active" href="#home">Home</a> <!-- add js-->
                <a href="#news">Profile</a> <!-- add js-->
                <a href="#contact">Pets</a> <!-- add js-->
                <a href="#about">History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>

        <header>Leave A Review</header>
        
        <h1>
            <div class="row">
                <div class="col-25">
                    <label for="review">Review</label> <!-- add php-->
                </div>
                <div class="col-75">
                    <textarea id="review" name="review" placeholder="Write something.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="review">Rate</label> <!-- add php-->
                </div>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <div class="rate-container">
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                </div>
            </div>
        </h1>
        
        <h2>
            <div class="clearfix">
                <button type="next" class="Submitbtn">Submit</button> <!-- add js-->
            </div>
        </h2>
    </body>
</html>