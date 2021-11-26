<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Tambah Tugas</h3>
            <hr>
            <a class="btn btn-success" href="<?= base_url('post/daftarPost'); ?>">Daftar Tugas</a>
            <a>|</a>
            <a class="btn btn-danger" href="<?= base_url('/home'); ?>">Batal</a>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Judul Tugas</label>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <label>Deskripsi Tugas</label>
                    <textarea name="contents" id="summernote"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>