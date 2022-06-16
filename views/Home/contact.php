<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/TechShop//assets/css/contact.css">

    <title>Contact Page</title>
  </head>

  <body>
    <div class="content">
      
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-10">
            
            <div class="row align-items-center">
              <div class="col-lg-7 mb-5 mb-lg-0">

                <h2 class="mb-5">Contact us.</h2>

                <form class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" class="form-control" name="fname" id="fname" placeholder="First name">
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 py-3">
                      <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                      <span class="submitting"></span>
                    </div>
                  </div>
                </form>

                <div id="form-message-warning mt-4"></div> 
                <div id="form-message-success">
                  Your message was sent, thank you!
                </div>

              </div>
              <div class="col-lg-4 ml-auto">
                <h3 class="mb-4">Share us your thinking.</h3>
                <p>Our Phone: 0123456789</p>
                <p>Our Mail: abcxyz@gmail.com</p>
              </div>
            </div>
          </div>  
        </div>
        <div class="d-flex justify-content-center">
                        <a href="../Home/Index">Trở về</a>
                    </div>
      </div>
    </div>
  </body>

</html>