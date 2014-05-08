<?php include '../base.php'; ?>
<?php startblock('title') ?>Create user<?php endblock() ?>
<?php startblock('content') ?>
<div class="container">
   <div class="page-header">
  <center><h1>Create a New User</h1>
  <h4>Please fill out the form</h4></center>
   </div>
</div>

        
        <div class="col-sm-6 col-sm-offset-3">
            <form role="form"  id="search">
               <div class="form-group">
                    <label for="state">User ID</label>
                    <input type="text" class="form-control" id="ID" placeholder="User ID">
                </div>
                <div class="form-group">
                    <label for="fist-name">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="lasts-name">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="Passsword">
                </div>
                <div class="form-group">
                    
                    <input type="text" class="form-control" id="verify-password" placeholder="Password">
                </div>
              <div class="form-group">
                    <label for="accountType">Account Type</label>
                    <small>
                        <input type="text" class="form-control" id="account-type" placeholder="Account Type">
                </div>
            </br>
        </br>
        <center>
                <div class="form-group" id="button">
                <button type="submit" class="btn btn-success">Create</button>
                <button type="clear" class="btn btn-danger">Reset</button>
            </div>
        </center>
            </form>
          </div>
<?php endblock() ?>