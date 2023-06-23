<?php $this->load->view('partials/header.php'); ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Tambah Artikel Baru</h1>


                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



            <div class="alert alert-warning">
                <?php echo validation_errors(); ?>
            </div>

            <?php echo form_open_multipart(); ?>

            <div class="form-group">
                <label>Title</label>
                <?php echo form_input('title', set_value('title'), 'class="form-control"'); ?>
            </div>

            <div class="form-group">
                <label>URL</label>
                <?php echo form_input('url', set_value('url'), 'class="form-control"'); ?>
            </div>

            <div class="form-group">
                <label>Content</label>
                <?php echo form_textarea('content', set_value('content'), 'class="form-control"'); ?>
            </div>


            <div class="form-group">
                <label>Cover</label>
                <?php echo form_upload('cover', set_value('cover'), 'class="form-control"'); ?>
            </div>

            <button class="btn btn-primary" type="submit">Save Article</button>
            <?php echo form_close(); ?>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('partials/footer.php'); ?>