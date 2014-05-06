<?php include '../base.php'; ?>
<?php startblock('title') ?>Create user<?php endblock() ?>
<?php startblock('content') ?>
<h1>Create user</h1>
<br>
<div class="col-sm-5">
    <form role="form" method="post" action="#">
        <div class="form-group">
            <label for="user_id" class="control-label">User Id:</label>
            <input type="text" class="form-control" id="user_id" placeholder="User Id">
        </div>
        <div class="form-group">
            <label for="user_name" class="control-label">Username:</label>
            <input type="text" class="form-control" id="user_name" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="email" class="control-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="category" class="control-label">Category:</label>
            <select class="form-control" id="catgory">
                <option value="Administrator">Administrator</option>
                <option value="Super User">Super User</option>
                <option value="Normal User">Normal User</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password1" class="control-label">Password:</label>
            <input type="password" class="form-control" id="password1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="password2" class="control-label">Password (again):</label>
            <input type="password" class="form-control" id="password2" placeholder="Password (again)">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Create</button>
        </div>
    </form>
</div>
<?php endblock() ?>