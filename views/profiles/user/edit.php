<?php $this->layout("layouts/default", ["title" => 'C1999 | Edit My Address']); 
use App\SessionGuard as Guard;
use App\Models\Contact;
use App\Models\User;
?>

<?php $this->start("page") ?>

<div class="container-fluid mt-50">
    <div class='bg-dark mt-5'>
        <div class='text-white p-3 text-center account'>EDIT MY NEW ADDRESS</div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <!-- From Edit Address -->
                <form name="frm" id="frm" action="/profiles/user/<?=$this->e($contact['id'])?>" method="post" class="col-md-offset-3">
                    <!-- Name -->
                    <div class="form-group mb-4 <?=isset($errors['name']) ? ' error' : '' ?>">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control p-3 mt-2 fs-4" maxlen="255" id="name" 
                            placeholder="Enter Name" value="<?=$this->e($contact['name'])?>" />
        
                        <?php if (isset($errors['name'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['name'])?></strong>
                            </span>
                        <?php endif ?>                                
                    </div>
        
                    <!-- Phone -->
                    <div class="form-group mb-4 <?=isset($errors['phone']) ? ' error' : '' ?>">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" class="form-control p-3 mt-2 fs-4" maxlen="255" id="phone" 
                            placeholder="Enter Phone" value="<?=$this->e($contact['phone'])?>" />
        
                        <?php if (isset($errors['phone'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['phone'])?></strong>
                            </span>
                        <?php endif ?>                                  
                    </div>
        
                    <!-- Address -->
                    <div class="form-group mb-4 <?=isset($errors['address']) ? ' error' : '' ?>">
                        <label for="address">Address </label>
                        <textarea name="address" id="address" class="form-control p-3 mt-2 fs-4" 
                            placeholder="Enter address (maximum character limit: 255)"><?=$this->e($contact['address'])?></textarea>
        
                        <?php if (isset($errors['address'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['address'])?></strong>
                            </span>
                        <?php endif ?>                                 
                    </div>
        
                    <!-- Submit -->
                    <div class="d-flex justify-content-center">
                        <div class="mt-3 mb-3 border border-dark rounded-pill w-50 text-center">
                            <input type="submit" name="submit" id="" class="btn fs-3 pe-5 ps-5" type="submit" name="submit" value="Update Adress">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->stop() ?>
