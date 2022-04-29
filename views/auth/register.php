<?php $this->layout("layouts/default", ["title" => 'C1999 | Register']) ?>

<?php $this->start("page") ?>

<div class="container-fluid mt-50">
    <div class="bg-dark mt-5">
        <div class="text-white p-3 text-center account">MY ACCOUNT</div>
    </div>

    <div class="card-body">
        <div class="row mt-4 mb-5">
            <div class="col-md-6 offset-md-3">

                <h2 class="mt-5 mb-3 account-heading">REGISTER</h2>

                <!-- Form Signup -->
                <form id="signup" role="form" method="POST" action="/register">

                    <!-- Name -->
                    <div class="form-group mb-4 <?=isset($errors['name']) ? 'error' : '' ?>">
                        <label for="name">Name
                            <span class="required">*</span>
                        </label>
                        <input id="name" name="name" class="form-control mt-3 mb-1 p-3 required" type="text" placeholder="Enter first name"
                            value="<?=isset($old['name']) ? $this->e($old['name']) : '' ?>" required autofocus>
                        <?php if (isset($errors['email'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['email'])?></strong>
                            </span>
                        <?php endif ?>    
                    </div>

                    <!-- Email Adress -->
                    <div class="form-group mb-4 <?=isset($errors['email']) ? 'error' : '' ?>">
                        <label for="email">Email address
                            <span class="required">*</span>
                        </label>
                        <input id="email" name="email" class="form-control mt-3 mb-1 p-3 required" type="email" placeholder="Enter email"
                            value="<?=isset($old['email']) ? $this->e($old['email']) : '' ?>" required>
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
                        <input id="password" name="password" class="form-control mt-3 mb-1 p-3 required" type="password" placeholder="Password">
                        <?php if (isset($errors['password'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['password'])?></strong>
                            </span>
                        <?php endif ?>   
                    </div>

                    <!-- Confrim password -->
                    <div class="form-group mb-4 <?=isset($errors['password_confirmation']) ? 'error' : '' ?>">
                        <label for="password-confirm">Confirm Password
                            <span class="required">*</span>
                        </label>
                        <input id="password-confirm" name="password_confirmation" class="form-control mt-3 mb-1 p-3 required" type="password" placeholder="Password">
                        <?php if (isset($errors['password_confirmation'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['password_confirmation'])?></strong>
                            </span>
                        <?php endif ?>   
                    </div>

                    <!--  -->
                    <div class="mb-5">
                        <p id="" class="form-text">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                    </div>

                    <!-- Submit -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input class="btn account-btn p-3 mt-3" type="submit" value="Create Account">
                </form>

            </div>
        </div>
    </div>
</div>

<?php $this->stop() ?>
