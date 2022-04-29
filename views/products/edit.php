<?php $this->layout("layouts/default", ["title" => "C1999 | Update Product"]) ;
use App\SessionGuard as Guard;
use App\Models\Product;
?>

<?php $this->start("page") ?>


<div class='container-fluid mt-50'>
    <div class='bg-dark mt-5'>
        <div class='text-white p-3 text-center account'>EDIT PRODUCT</div>
    </div>

    <div class='card-body'>
        <div class='row justify-content-center'>
            <div class='col-md-3 mb-5'>
                <!-- Form View Product -->
                <form method='post'>
                    <?php $product = Guard::user()->products->find($product['id']); ?>
                    <div class='col'>
                        <div class='card h-100'>
                            <div class='nt_bg_lz pr_lazy_img lazyloaded' style='background-image: url(/uploads/<?=$product->image_front?>);'></div>
                            <div class='overlay-img'>
                                <div class='icon mirror-img'>
                                    <a href=''><img src='/uploads/<?=$product->image_back?>' class='card-img-top' alt=''></a>
                                </div>
                            </div>

                            <?php 
                            if (($product->new) == 1) {
                                echo "<div class='card-label'>
                                    <span>NEW</span>
                                </div>";
                                }
                            ?>
                            <div class='card-body'>
                                <h5 class='card-title'><?=$product->name?></h5>
                                <p class='card-text'><?=$product->price?>.00$</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class='col-md-3'>
                <!-- Form Edit Product -->
                <form name="frm" id="frm" action="/products/<?=$this->e($product['id'])?>" method="post"  enctype='multipart/form-data'>
                
                    <!-- Name Product -->
                    <div class="form-group mb-4 <?=isset($errors['name']) ? 'error' : '' ?>">
                        <label for="name">Name Product</label>
                        <input type="text" name="name" class="form-control mt-3 mb-1 p-3" maxlen="255" id="name" placeholder="Enter Name Product" 
                            value="<?=$this->e($product['name'])?>" />

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
                            value="<?=$this->e($product['price'])?>" />

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
                        <input id="new" name="new" class="" type="checkbox" 
                            <?php 
                                if( $this->e($product['new']) == 1) echo 'value=" ' . $this->e($product['new']) . '" checked' 
                            ?>>
                    </div>

                    <!-- Submit -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input class="btn account-btn p-3 mt-3" type="submit" name="submit" value="Update This Product">
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

<?php $this->stop() ?>

