<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThankYou</title>
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>

*{
    padding: 0;
    margin: 0;
}
.thankyou-wrapper{
  width:100%;
  height:100vh;
  margin:auto;
  background:#ffffff; 
  padding:10px 0px 50px;
}
.thankyou-wrapper h1{
  font:100px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#333333;
  padding:0px 10px 10px;
}
.thankyou-wrapper p{
  font:26px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#333333;
  padding:5px 10px 10px;
}
.thankyou-wrapper a{
  font:26px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#151515;
  display:block;
  text-decoration:none;
  width:250px;
  background: green;
  margin:10px auto 0px;
  padding:15px 20px 15px;
  /* border-bottom:5px solid #F96700; */
}
.thankyou-wrapper a{
    border: 1px solid #090909;
  font-size: 1.6rem;
  display: block;
  transition: all .3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  /* border-bottom:5px solid #F96700; */
}
.thankyou-wrapper a:after{
    content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: transparent;
  z-index: -2;
}
.thankyou-wrapper a:before{
    content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #66BB6A;
  transition: all .3s;
  z-index: -1;
}

.thankyou-wrapper a:hover:before{
    width:100%;
}


/* .btn__signup:hover:before {
  width: 100%;
} */
.thankyou-wrapper a:hover{
  /* font:26px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#ffffff;
  display:block;
  text-decoration:none;
  width:250px;
  background:#F96700;
  margin:10px auto 0px;
  padding:15px 20px 15px;
  border-bottom:5px solid #F96700;   */
  color: #ffffff;
}
    </style>
</head>
<body>
    <section class="login-main-wrapper">
        <div class="main-container">
            <div class="login-process">
                <div class="login-main-container">
                    <div class="thankyou-wrapper">
                        <h1><img src="assets/img/thanks.png" alt="thanks" /></h1>
                          <p>for contacting us, we will get in touch with you soon... </p>
                          <div class="btn__signup"></div>
                          <a href="index.php">Back to home</a>
                          <div class="clr"></div>
                      </div>
                      <div class="clr"></div>
                  </div>
              </div>
              <div class="clr"></div>
          </div>
      </section>
</body>
</html>