<!--modal for to remove a user -->
<div class="modal fade" id="modal-remove-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="my-modal modal-content border border-primary">
            <div class="modal-header" id="header">
                <h5 class="modal-title">Excluir Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Deseja Realmente Excluir este Registro?</p>
            </div>
            <div class="modal-footer">
                <?php foreach($users as $user): ?>
                    <form action="#">
                        <form action="?ct=user&mt=remove_user&id=<?= $user->id ?>" method="get">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>