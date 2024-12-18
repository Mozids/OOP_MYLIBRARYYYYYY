<?php 
$number = 1 ;
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}
include('templates/header.php') ?>

<div class="main-content bg-white">
    <section class="container my-5">

        <h3 class="panel-title text-center">Search Book MOON LIBRARY</h3>
            <form action="" class="d-flex justify-content-between align-items-center">
                <input 
                type="text" 
                class="form-control" 
                placeholder="Cari Buku"
                name="search"
                required />
                <button class="btn btn-sm btn-primary mx-3">Search</button>
            </form>
            <div class="d-flex justify-content-center">
                <div class="my-4">
                    <a href="/">Back to Home</a>
                </div>
            </div>

        <div class="container mt-5 table table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $book) : ?>
                        <tr>
                            <th><?= $number++ ?></th>
                            <th><?= $book->getTitle() ?></th>
                            <th><?= $book->getAuthor() ?></th>
                            <th><?= $book->getYear() ?></th>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        
    </section>
        <div class="footer">
            <p>Copyright© <script>
                document.write(new Date().getFullYear())
                    </script> All Rights Reserved By <span class="text-primary">MOON LIBRARY</span></p>
        </div>
</div>

<?php include('templates/footer.php') ?>