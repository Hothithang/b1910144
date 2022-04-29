<?php $this->layout("layouts/default", ["title" => "C1999 | Add New Product"]) ?>

<?php $this->start("page") ?>

<div class="container-fluid mt-50">
    <div class="bg-dark mt-5">
        <div class="text-white p-3 text-center account">ADD NEW PRODUCTS</div>
    </div>
</div>

<div class="container">
    <!-- SECTION HEADING -->
    <div class="card-body">
        <div class="row mb-5">
            <div class="col-md-6 offset-md-3">

                <h2 class="mt-2 mb-3 account-heading">PRODUCT</h2>

                <!-- Form Add Product -->
                <form name="frm" id="frm" action="/products/add" method="post" enctype="multipart/form-data">
                    
                    <!-- Name Product -->
                    <div class="form-group mb-4 <?=isset($errors['name']) ? 'error' : '' ?>">
                        <label for="name">Name Product</label>
                        <input type="text" name="name" class="form-control mt-3 mb-1 p-3" maxlen="255" id="name" placeholder="Enter Name Product" 
                            value="<?=isset($old['name']) ? $this->e($old['name']) : '' ?>" />

                        <?php if (isset($errors['name'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['name'])?></strong>
                            </span>
                        <?php endif ?> 
                    </div>

                    <!-- Price Product -->
                    <div class="form-group mb-4 <?=isset($errors['price']) ? 'error' : '' ?>">
                        <label for="price">Price Product</label>
                        <input type="text" name="price" class="form-control mt-3 mb-1 p-3" maxlen="255" id="price" placeholder="Enter Price Product" 
                            value="<?=isset($old['price']) ? $this->e($old['price']) : '' ?>" />

                        <?php if (isset($errors['price'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['price'])?></strong>
                            </span>
                        <?php endif ?> 
                    </div>

                    <!-- Image Front Product -->
                    <div class="form-group mb-4 <?=isset($errors['image_front']) ? 'error' : '' ?>">
                        <label for="image_front">Image Front Product</label>
                        <input id="image_front" name="image_front" class="form-control mt-3 mb-1 p-3" type="file">
                        <?php if (isset($errors['image_front'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['image_front'])?></strong>
                            </span>
                        <?php endif ?> 
                    </div>

                    <!-- Image Back Product -->
                    <div class="form-group mb-4 <?=isset($errors['image_back']) ? 'error' : '' ?>">
                        <label for="image_back">Image Back Product</label>
                        <input id="image_back" name="image_back" class="form-control mt-3 mb-1 p-3" type="file">
                        <?php if (isset($errors['image_back'])): ?>
                            <span class="help-block">
                                <strong><?=$this->e($errors['image_back'])?></strong>
                            </span>
                        <?php endif ?> 
                    </div>
                    
                    <!-- New Product -->
                    <div class="form-group mb-4">
                        <label for="new">Is this a new product?</label>
                        <input id="new" name="new" class="" type="checkbox" value="yes">
                    </div>

                    <!-- Submit -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input class="btn account-btn p-3 mt-3" type="submit" name="submit" value="Add This Product">
                    </div>
                </form>

            </div>
        </div>
    </div>
    
</div>

<?php $this->stop() ?>