<?php include 'header.php'; ?>
<?php include 'proses.php'; ?>

<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php if (isset($msg)): ?>
                <div class="alert alert-<?= $status ?> shadow-lg mb-4" role="alert">
                    <?= $msg ?>
                </div>
            <?php endif; ?>

            <div class="bg-white p-8 rounded-2xl shadow-2xl border-t-4 border-blue-500">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Hubungi Kami</h2>
                
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label font-semibold text-gray-600">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control border-gray-300 focus:ring-2 focus:ring-blue-400" placeholder="Masukkan nama...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label font-semibold text-gray-600">Email</label>
                        <input type="email" name="email" class="form-control hover:border-blue-400 transition" placeholder="name@example.com">
                    </div>

                    <div class="mb-4">
                        <label class="form-label font-semibold text-gray-600">Pesan</label>
                        <textarea name="pesan" class="form-control" rows="4"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition duration-300 transform hover:scale-105 shadow-md">
                        Kirim Data
                    </button>
                </form>
            </div>
            
            <p class="text-center text-gray-400 mt-6 text-sm italic">
                Dibuat dengan PHP, Bootstrap, dan Tailwind
            </p>
        </div>
    </div>
</div>

</body>
</html>