<?php $this->layout("layouts/default", ["title" => 'C1999 | View Products']); 
use App\Models\Product;
use App\Models\User;
?>

<?php $this->start("page") ?>

<div class="container mt-100">
	<div class="row">
        <!-- Add new product if user is admin -->
        <?php
        if ($this->e(\App\SessionGuard::user()->is_admin) == 1) {
            echo '
            <div class="col">
                <div class="d-inline-flex align-items-center justify-content-start p-3 border border-dark rounded-pill">
                    <a href="/products/add">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-align-middle" viewBox="0 0 16 16">
                            <path d="M6 13a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v10zM1 8a.5.5 0 0 0 .5.5H6v-1H1.5A.5.5 0 0 0 1 8zm14 0a.5.5 0 0 1-.5.5H10v-1h4.5a.5.5 0 0 1 .5.5z"/>
                        </svg>
                        <input class="btn fs-3" type="submit" name="submit" value="Add New Product">
                    </a>
                </div>
            </div>';
        }
        ?>

        <!-- Sort Price -->
        <div class="col m-auto">
            <div class="product-sort col d-grid gap-2 align-items-center justify-content-end" id="product-sort">
                <select class="form-select" aria-label="Default select example">
                    <option selected disabled>Price</option>
                    <!-- <option value="1">Price, low to high</option> -->
                    <!-- php $products = Product::orderBy('price', 'asc')->get(); ?> -->
                    <!-- <option value="2">Price, high to low -->
                        <!-- php $products = Product::orderBy('price', 'desc')->get(); -->
                    <!-- </option> -->
                    <?php 
                    $colors = array("Price, low to high", "Price, high to low"); 
                    foreach ($colors as $value) {
                    ?>
                        <option value="<?=$value?>"><?=$value?></option>
                    <?php
                        }
                        if($value == 'Price, low to high'){
                            
                                $products = Product::orderBy('price', 'asc')->get();
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>
</div>

<div class='container mt-50'>
    <!-- View Product -->
    <div class='row'>
        <?php foreach($products as $product): ?>
        <div class='col-6 col-md-3 col-lg-24 mb-4'>
            <div class='card h-100'>
                <div class='nt_bg_lz pr_lazy_img lazyloaded' style='background-image: url(/uploads/<?=$this->e($product['image_front'])?>);'></div>
                <div class='overlay-img'>
                    <div class='icon mirror-img'>
                        <a href=''><img src='/uploads/<?=$this->e($product['image_back'])?>' class='card-img-top' alt=''></a>
                        <a href='/products/view' class='overlay-buy'>
                            <span>QUICK BUY</span>
                            <div class='overlay-buy-cart'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-cart-plus' viewBox='0 0 16 16'>
                                    <path d='M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z'/>
                                    <path d='M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <?php 
                    if ($this->e($product->new) == 1) {
					    echo "<div class='card-label'>
							<span>NEW</span>
						</div>";
						}
                ?>
                <div class='card-body'>
                    <div class="mb-4 h-53">
                        <h5 class='card-title'><?=$this->e($product->name)?></h5>
                        <p class='card-text'><?=$this->e($product->price)?>.00$</p>
                    </div>

                    <!-- Edit product if user is admin -->
                    <?php 
                    if ($this->e(\App\SessionGuard::user()->is_admin) == 1) {
                        echo '
                        <div class="d-flex justify-content-between">
                            <a href="/products/edit/' . $this->e($product->id) . '" class="btn btn-xs btn-warning d-inline-flex align-items-center justify-content-center w-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                                <span class="fs-4">Edit</span>
                            </a>
                            <form class="delete ms-4 w-50" action="/products/delete/' . $this->e($product->id) .'" method="POST" style="display: inline;">
                                <button type="submit" class="btn btn-xs btn-danger d-inline-flex align-items-center justify-content-center w-100" name="delete-product" data-bs-toggle="modal" data-bs-target="#delete-confirm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                    <span class="fs-4">Delete</span>
                                </button>
                            </form>
                        </div>
                        ';
                    } ?>
                    
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>

<!-- Modal Delete Product -->
<div class="modal fade" id="delete-confirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Confirmation</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Do you want to delete this product?
        </div>
        <div class="modal-footer">
            <button type="button" id="delete" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
        </div>
    </div>
  </div>
</div>

<?php $this->stop() ?>


<?php $this->start("page_specific_js"); ?>

    <script>
        $(document).ready(function(){

            $('button[name="delete-product"]').on('click', function(e){
                const $form = $(this).closest('form');
                e.preventDefault();
                $('#delete-confirm').modal({ backdrop: 'static', keyboard: false })
                    .one('click', '#delete', function() {
                        $form.trigger('submit');
                });
            });   
        });
    </script>
<?php $this->stop() ?>
