<?php $this->layout("layouts/default", ["title" => "C1999 | Login"]) ?>

<?php $this->start("page") ?>                            

<div class="container-fluid mt-50">
    <div class="bg-dark mt-5">
        <div class="text-white p-3 text-center account wow fadeIn" data-wow-duration="1s">MY ACCOUNT</div>
    </div>

    <div class="card-body">
        <div class="row mt-4 mb-5">
            <div class="col-md-6 offset-md-3">

                <h2 class="mt-5 mb-3 account-heading">LOGIN</h2>

                <!-- Form Login -->
                <form id="loginForm" role="form" method="POST" action="/login">
                    <!-- Email Adress -->
                    <div class="form-group mb-4 <?=isset($errors['email']) ? 'error' : '' ?>">
                        <label for="email">Email Address
                            <span class="required">*</span>
                        </label>
                        <input id="email" name="email" class="form-control mt-3 mb-1 p-3 required" type="email" placeholder="Enter email" 
                            value="<?=isset($old['email']) ? $this->e($old['email']) : '' ?>" required autofocus>

                        <?php if (isset($errors['email'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['email'])?></strong>
                            </span>
                        <?php endif ?>  
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-4 <?=isset($errors['password']) ? 'error' : '' ?>">
                        <label for="password">Password
                            <span class="required">*</span>
                        </label>
                        <input id="password" name="password" class="form-control mt-3 mb-1 p-3 required" type="password" placeholder="Password" required>

                        <?php if (isset($errors['password'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['password'])?></strong>
                            </span>
                        <?php endif ?> 
                    </div>

                    <!--  -->
                    <div class="mb-4 mt-2">
                        <a href="/register" class="account-new">You are a new user?</a>
                    </div>
                    
                    <!-- Submit -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input class="btn account-btn p-3 mt-3" type="submit" value="Log In">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php $this->stop() ?>
