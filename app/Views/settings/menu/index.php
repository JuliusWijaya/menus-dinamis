<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Tambah Data
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?= base_url('setting/menu/add') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="menu_id">Menu ID</label>
                            <input type="text" class="form-control" id="menu_id" name="menu_id">
                        </div>
                        <div class="form-group">
                            <label for="title">Nama Menu</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" name="link">
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" class="form-control" id="icon" name="icon">
                        </div>
                        <div class="form-group">
                            <label for="menu_level">Menu Level</label>
                            <select class="form-control" id="menu_level" name="menu_level">

                                <option value="">Pilih..</option>
                                <option value="0">Main Menu</option>
                                <option value="1">Sub Menu</option>
                                <option value="2">Sub Sub Menu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Group Menu</label>
                            <select class="form-control" id="parent_id" name="parent_id">
                                <option value="">Pilih..</option>
                                <?php foreach ($main as $op) : ?>
                                <option value="<?= $op['id'] ?>"><?= $op['title'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="radio" name="is_active" id="is_active" value="1"
                                checked>
                            <label class="form-check-label" for="is_active">
                                Yes
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input " type="radio" name="is_active" id="is_active" value="0">
                            <label class="form-check-label" for="is_active">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- CRUD -->
    <div class="row my-3 mt-3">
        <div class="col-10">
            <h2 class="h2">List Menu</h5>
        </div>
        <div class="col-2 align-self-end">
            <p class="text-md-right">
                <a class="btn btn-outline-primary" href="#" role="button" data-toggle="modal"
                    data-target="#exampleModal">
                    <i class="bi bi-file-earmark-plus-fill"></i>
                    Add Menu
                </a>
            </p>
        </div>
    </div>
    <div class="row card">
        <?php foreach ($menus as $menu) { ?>
        <div class=" modal fade" id="exampleModal<?= $menu['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?= base_url('setting/menu/'.$menu['id'].'/update') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="menu_id">Menu ID</label>
                                <input type="text" class="form-control" id="menu_id<?= $menu['id'] ?>" name="menu_id"
                                    value="<?= $menu['menu_id'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="title">Nama Menu</label>
                                <input type="text" class="form-control" id="title<?= $menu['id'] ?>" name="title"
                                    value="<?= $menu['title'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" id="link<?= $menu['id'] ?>" name="link"
                                    value="<?= $menu['link'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <input type="text" class="form-control" id="icon<?= $menu['id'] ?>" name="icon"
                                    value="<?= $menu['icon']?>">
                            </div>
                            <div class="form-group">
                                <label for="menu_level">Menu Level</label>
                                <select class="form-control" id="menu_level<?= $menu['id'] ?>" name="menu_level">
                                    <option value="" selected>Pilih..</option>
                                    <option value="0">Main Menu</option>
                                    <option value="1">Sub Menu</option>
                                    <option value="2">Sub Sub Menu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="parent_id" value="<?= $menu['parent_id'] ?>">Group Menu</label>
                                <select class="form-control" id="parent_id<?= $menu['id'] ?>" name="parent_id">
                                    <option>Pilih..</option>
                                    <?php foreach ($main as $opt) : ?>
                                    <option value=" <?= $opt['id'] ?>"><?= $opt['title'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class=" form-group form-check">
                                <input class="form-check-input" type="radio" name="is_active"
                                    id="is_active<?= $menu['id'] ?>" value="1" checked>
                                <label class="form-check-label" for="is_active">
                                    Yes
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="form-check-input " type="radio" name="is_active"
                                    id="is_active<?= $menu['id'] ?>" value="0">
                                <label class="form-check-label" for="is_active<?= $menu['id'] ?>">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                <i class="bi bi-x-circle-fill"></i>
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save-fill"></i>
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 card">
            <div class="row mt-3">
                <div class="col-10">
                    <h5 class="h5"><?= $menu['title'] ?>
                    </h5>
                </div>
                <div class=" col-2">
                    <p class="text-md-right">
                        <a class="btn btn-secondary mx-2" href="#" role="button" data-toggle="modal"
                            data-target="#exampleModal<?= $menu['id'] ?>" onclick="getData(<?= $menu['id'] ?>)">
                            Edit
                        </a>
                        <a class="btn btn-outline-danger" href="<?= base_url('setting/menu/'.$menu['id'].'/delete') ?>"
                            role="button"
                            onclick="return confirm('Anda Yakin Ingin Menghapus Menu <?= $menu['title'] ?>');">
                            Delete
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <?php if ($menu['sub']) { ?>
        <?php foreach ($menu['sub'] as $sub) { ?>
        <div class=" modal fade" id="exampleModal<?= $sub['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Dataaa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?= base_url('setting/menu/'.$sub["id"].'/update') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="menu_id">Menu ID</label>
                                <input type="text" class="form-control" id="menu_id<?= $sub['id'] ?>" name="menu_id">
                            </div>
                            <div class="form-group">
                                <label for="title">Nama Menu</label>
                                <input type="text" class="form-control" id="title<?= $sub['id'] ?>" name="title">
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" id="link<?= $sub['id'] ?>" name="link">
                            </div>
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <input type="text" class="form-control" id="icon<?= $sub['id'] ?>" name="icon">
                            </div>
                            <div class="form-group">
                                <label for="menu_level">Menu Level</label>
                                <select class="form-control" id="menu_level<?= $sub['id'] ?>" name="menu_level">
                                    <option value="">Pilih..</option>
                                    <option value="0">Main Menu</option>
                                    <option value="1">Sub Menu</option>
                                    <option value="2">Sub Sub Menu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Group Menu</label>
                                <select class="form-control" id="parent_id<?= $sub['id'] ?>" name="parent_id">
                                    <option value="">Pilih..</option>
                                    <?php foreach ($main as $opt) : ?>
                                    <option value="<?= $opt['id'] ?>"><?= $opt['title'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="radio" name="is_active"
                                    id="is_active<?= $sub['id'] ?>" value="1">
                                <label class="form-check-label" for="is_active">
                                    Yes
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="form-check-input " type="radio" name="is_active"
                                    id="is_active<?= $sub['id'] ?>" value="0">
                                <label class="form-check-label" for="is_active<?= $menu['id'] ?>">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                <i class="bi bi-x-circle-fill"></i>
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save-fill"></i>
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-10 card align-self-end">
            <div class="row mt-3">
                <div class="col-10 py-1">
                    <h5 class="h5"><?= $sub['title'] ?></h5>
                </div>
                <div class=" col-2">
                    <p class="text-md-right px-2">
                        <a class="btn btn-success px-2.5" href="<?= base_url('setting/menu'.$sub['id'].'/edit')?>"
                            role="button" data-toggle="modal" data-target="#exampleModal<?= $sub['id'] ?>"
                            onclick="getData(<?= $sub['id'] ?>)">
                            <b>Edit</b>
                        </a>
                        <a class="btn btn-outline-warning px-2.5"
                            href="<?= base_url('setting/menu/'.$sub['id'].'/delete') ?>" role="button"
                            onclick="return confirm('Anda Yakin ingin menghapus menu <?= $sub['title'] ?>');">
                            <b>Delete</b>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
        <?php } ?>
    </div>
</div>
<script>
function getData(id) {
    var link = "<?= base_url('setting/menu'); ?>" + "/" + id + "/edit";
    $.ajax({
        type: 'GET',
        url: link, //Memanggil Controller/Function
        async: false,
        dataType: 'json',
        success: function(data) {
            console.log('[value=' + data['is_active'] + ']');
            $('#menu_id' + id).val(data['menu_id']);
            $('#title' + id).val(data['title']);
            $('#icon' + id).val(data['icon']);
            $('#link' + id).val(data['link']);
            $('#parent_id' + id).val(data['parent_id']).change();
            $('#menu_level' + id).val(data['menu_level']).prop('selected', true);
            $('#is_active' + id).filter('[value=' + data['is_active'] + ']').prop('checked', true);
        }
    });
}
</script>
<?= $this->endSection(); ?>