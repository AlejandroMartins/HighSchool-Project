<?php require_once "sidebar.php"; ?>
<link rel="stylesheet" href="./Css/mesa.css">

<section class="home">

    <div class="principal">
        <div class="Add-Table">
            <h1>Mesas</h1>
            <button type="button" class="btn btn-success btn-add" data-bs-toggle="modal" data-bs-target="#create-table"><i class='bx bx-plus-medical'></i></button>
        </div>
        <hr>

        <!-- Modal -->
        <div class="modal fade" id="create-table" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Criar Mesa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>