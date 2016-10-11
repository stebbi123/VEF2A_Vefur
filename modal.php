

<body id="page-top" class="index">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign in</h4>
              </div>
              <div class="modal-body">
                
                <form method="post" action="" class="form-horizontal">  
                        <div class="form-group">   
                                <label for="inputEmail3" class="col-sm-2 control-label">Email 
                                <?php if ($missing && in_array('email', $missing)) { ?>
                                <span class="warning">Please enter your email</span>
                                <?php } ?>
                                </label>
                                <div class="col-sm-10">   
                                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email"<?php if ($missing || $errors) {
                                          echo 'value="' . htmlentities($email) . '"';
                                        } ?>>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password
                            <?php if ($missing && in_array('password', $missing)) { ?>
                            <span class="warning">Please enter your password</span>
                            <?php } ?>
                            </label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password"<?php if ($missing || $errors) {
                                          echo 'value="' . htmlentities($password) . '"';
                                        } ?>>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                </form>
                    <p>New user?</p>
                    <a href="">Sign up now!</a>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>