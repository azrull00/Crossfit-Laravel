<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login bang</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="assets/LOGO-navbar.png" alt="ganok mas gambare">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="javascript:void(0)" class="signup" onclick="openForm()">Buy this Product</a></li>
                <li><a href="login.php" class="signin">Sign In</a></li>
            </ul>

        </nav>
    </header>

  <div class="form-popup" id="myForm" style="display:none;">  
    <button class="close-button" onclick="closeForm()">×</button>  
    <h2>Tambah Data Pembelian</h2>  

    <form action="{{ route('transaction.store') }}" method="POST">  
        @csrf  
        <input type="hidden" id="product_id" name="product_id" required>  
        <label for="nama">Nama:</label>  
        <input type="text" id="nama" name="nama" required>  

        <label for="nomorhp">Nomor HP:</label>  
        <input type="text" id="nomorhp" name="nomorhp" required>  

        <label for="alamat">Alamat:</label>  
        <input type="text" id="alamat" name="alamat" required>  

        <label for="kategori">Jenis Barang:</label>  
        <select id="kategori" name="kategori" required>  
            <option value="Dumbbell">Dumbbell</option>  
            <option value="Pull Up Bar">Pull Up Bar</option>  
            <option value="Resistance Band">Resistance Band</option>  
        </select>  

        <label for="harga">Harga:</label>  
        <input type="number" id="harga" name="harga" value="450000" readonly>  

        <button type="submit" class="save-button">Simpan Pembelian</button>  
    </form>  
</div>

    <section class="hero">
        <div class="hero-text">
            <h2 id="text">IMPROVE YOUR </h2>
            <h2 id="text">WORKOUT WITH BETTER </h2>
            <h2 id="text">GEAR</h2>
        </div>
        <div class="hero-icons">
            <img src="assets/🦆 icon _gym_1.png" alt="Dumbbell Icon">
            <img src="assets/🦆 icon _gym_2.png" alt="Dumbbell Icon">
            <a href="#" class="btn">Check Gear</a>
        </div>
    </section>

    <section class="about">
        <div class="image-section">
            <img src="assets/image-1-index-nav.png" alt="Workout Image 1">
            <p>Workout at the home or at the gym is your choice.</p>
            <p>But using the right equipment can help your training progrres better.</p>
        </div>
        <div class="image-section-2">
            <img src="assets/image-2-index-nav.png" alt="Workout Image 2">
        </div>
    </section>

    <section>
        <section class="features">
            <div class="feature-item">
                <h3>30+</h3>
                <p>Workouts Included</p>
            </div>
            <div class="feature-item">
                <h3>500+</h3>
                <p>Customer Experiences</p>
            </div>
            <div class="feature-item">
                <h3>3</h3>
                <p>Categories of Equipment</p>
            </div>
        </section>

        <section class="quality">
            <div class="quality-item">
                <h3>Good Quality</h3>
                <p>Our equipment is equipment used for gym, workout or chalistenic with good quality. Choose the right
                    sport</p>
            </div>
        </section>

        <section class="tools">
            <h2>Our Tools</h2>

            <div class="tool-item">
                <img src="assets/dumble-tools-.png" alt="Dumbbell">
                <p>Dumbells</p>
            </div>
            <div class="tool-item">
                <img src="assets/pull-up-bar-tools.png" alt="Pull Up Bar">
                <p>Pull Up Bar</p>
            </div>
            <div class="tool-item">
                <img src="assets/resistance-band-tools.png" alt="Resistance Band">
                <p>Resistance Band</p>
            </div>
        </section>

        <!-- Pop-up Form -->
        <!-- <div id="userList">
    <h2>User List Used This Platform</h2>
    <ul id="users"></ul>
</div> -->

        <footer>
            <div class="footer-content">
                <div class="footer-column">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Class</a></li>
                        <li><a href="#">Trainer</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Category</h4>
                    <ul>
                        <li><a href="#">Strength</a></li>
                        <li><a href="#">Flexibility</a></li>
                        <li><a href="#">Weight Loss</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="#">Contact: +123456789</a></li>
                        <li><a href="#">Email: info@crossfit.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="copyright">
                <p>&copy; 2024 CrossFit Equipment. All rights reserved.</p>
            </div>
        </footer>
        <script src="js/script-index.js">
        
        function openForm(productId, productName, productPrice) {  
        document.getElementById("myForm").style.display = "block";  
        document.getElementById("nama").value = productName;  
        document.getElementById("harga").value = productPrice;  
        document.getElementById("product_id").value = productId; // menambahkan ID produk ke hidden input  
    }  

    function closeForm() {  
        document.getElementById("myForm").style.display = "none";  
    }  

        </script>
</body>
<div></div>

</html>
