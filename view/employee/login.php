
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 bg-info">
            <!-- <div class="col-6"> -->
                <form method="post" action="index.php?action=loginValidation">
                    <div id="div_login">
                        <h1 class="text-center text-light">Login</h1>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control" id="txt_uname" name="txt_uname" placeholder="Username" required/>
                        </div>
                        <div  class="form-group">
                            <input type="password" class="form-control" id="txt_uname" name="txt_pwd" placeholder="Password" required/>
                        </div>
                        <div  class="form-group">
                            <button type="submit" class="btn btn-success" name="but_submit" id="but_submit">Submit</button>
                            <a href="index.php?action=adduser" class="btn btn-warning float-right">Register</a>
                        </div>
                        <div class="form-group">
                            
                        </div>
                    </div>
                </form>
               
            <!-- </div> -->
        </div>
        <div class="col-4"></div>
</div>
</div>

