<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="logincss/Login.css" type="text/css" rel="stylesheet"/>
        <link href="loginjs/form-login.js" type="text/javascript">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="loginjs/form-login.js"></script>
    <body>
        <div class="container-fluid" id="background">
            <div class="row">

                <div class="col-md-4 col-md-offset-4">
                    <h1 id="title">LOGIN FORM</h1>
                    <p id="user">Made with by Nguyen Huy Giang</p>
                </div>
                <div class="col-md-6 col-md-offset-3" id="formlogin">
                    <div class="container-fluid" id="login-form">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h3 id="login-form-h3">LOGIN TO YOUR ACCOUNT</h3>
                            </div>
                            <div class="col-md-8 col-md-offset-2" id="mainform">
                                <div class="row">
                                    <form action="login-form.php" name="form-login" target="blank" method="post">
                                        <input type="text" name="name" placeholder="UserName" class="truong-form"/>
                                        <input type="password" name="PassWord" placeholder="PassWord" class="truong-form"/>
                                        <input type="checkbox" id="form-checkbox" style="margin-top: 25px"/>  remember password
                                        <input type="submit" name="login" value="LOGIN" class="truong-form" id="form-submit"/>                                   
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8 col-md-offset-2" id="link">                                          
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <a href="#" id="link-create-account">Create account</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <a href="#" id="link-fogot-password">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid" id="create-form">
                        <div class="row">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <h3 id="login-form-h3">CREATE AN ACCOUNT</h3>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2" id="mainform">
                                        <div class="row">
                                            <form action="create-form.php" name="form-create" method="post" target="blank">
                                                <input type="text" name="user" placeholder="UserName" value="" class="truong-form"/>
                                                <input type="password" name="password" placeholder="PassWord" value="" class="truong-form"/> 
                                                <input type="password" name="passwordconfirm" placeholder="PassWord Confirm" value="" class="truong-form"/> 
                                                <input type="text" name="email" placeholder="Email" value="" class="truong-form"/> 
                                                <input type="submit" name="create" value="CREATE ACCOUNT" class="truong-form" id="form-submit-create"/>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</head>
</html>