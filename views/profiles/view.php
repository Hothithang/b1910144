<?php $this->layout("layouts/default", ["title" => 'C1999 | View Profile']); 
use App\SessionGuard as Guard;
use App\Models\Contact;
use App\Models\User;
?>

<?php $this->start("page") ?>

<div class="container-fluid mt-50">
    <div class="bg-dark mt-5">
        <div class="text-white p-3 text-center account">ACCOUNT PROFILE</div>
    </div>
</div>

<div class="container mt-5">
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Account information
                </button>
            </h2>

            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <h4>Contact Info</h4>
                <p><?=$this->e(\App\SessionGuard::user()->name)?></p>
                <p><?=$this->e(\App\SessionGuard::user()->email)?></p>
            </div>
            </div>
        </div>

        <?php
        if ($this->e(\App\SessionGuard::user()->is_admin) == 0) { ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        My Address
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    
                    <!-- Table Starts Here -->
                    <table id="contacts" class="table table-bordered table-responsive table-striped align-middle" 
                    data-toggle="table"
                    data-mobile-responsive="true"
                    data-check-on-init="true">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Date Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($contacts as $contact): ?>
                            <tr>
                                <td><?=$this->e($contact->name)?></td>
                                <td><?=$this->e($contact->phone)?></td>
                                <td><?=$this->e($contact->address)?></td>
                                <td><?=$this->e(date("d-m-Y", strtotime($contact->created_at)))?></td>
                                <td>
                                    <a href="/profiles/user/edit/<?=$this->e($contact['id'])?>" class="btn btn-xs btn-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <span class="fs-4">Edit</span>
                                    </a>
                                    <form class="delete ms-4" action="/profiles/user/delete/<?=$this->e($contact['id'])?>" method="POST" style="display: inline;">
                                        <button type="submit" class="btn btn-xs btn-danger d-inline-flex align-items-center justify-content-center" name="delete-contact" data-bs-toggle="modal" data-bs-target="#delete-contact-confirm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                            <span class="fs-4">Delete</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                    <!-- Table Ends Here --> 
                    
                    <div class="d-flex justify-content-end">
                        <div class="mt-3 mb-3 border border-dark rounded-pill">
                            <a href="/profiles/user/add">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-align-middle" viewBox="0 0 16 16">
                                    <path d="M6 13a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v10zM1 8a.5.5 0 0 0 .5.5H6v-1H1.5A.5.5 0 0 0 1 8zm14 0a.5.5 0 0 1-.5.5H10v-1h4.5a.5.5 0 0 1 .5.5z"/>
                                </svg>
                                <input class="btn fs-3" type="submit" name="submit" value="Add New Adress">
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Delete Contact Modal -->
<div class="modal fade" id="delete-contact-confirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Confirmation</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Do you want to delete this address?
        </div>
        <div class="modal-footer">
            <button type="button" id="delete-contact" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
        </div>
    </div>
  </div>
</div>

<?php $this->stop() ?>

<?php $this->start("page_specific_js") ?>
    <script>
        $(document).ready(function(){

            $('button[name="delete-contact"]').on('click', function(e){
                const $form = $(this).closest('form');
                e.preventDefault();
                $('#delete-contact-confirm').modal({ backdrop: 'static', keyboard: false })
                    .one('click', '#delete-contact', function() {
                        $form.trigger('submit');
                });
            });       
        });
    </script>
<?php $this->stop() ?>
