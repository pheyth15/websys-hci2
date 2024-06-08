<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="short icon" href="../portal/logo.jpg" type="x-icon">
    <title>
        <?php echo "Login to Tech Haven"; ?>
    </title>
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="../portal/font.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body>
    <?php include 'sidenav.php'; ?>
    <section class="container">
        <div class="search-filters">
            <div class="filter-group">
                <div class="top">
                    <i class="bi bi-funnel-fill"></i>
                    <h4>SEARCH FILTERS</h4>
                </div>
                <div class="category">
                    <label for="category-filter">CATEGORIES:</label>
                    <div>
                        <input type="checkbox" id="electronics" name="category" value="electronics">
                        <label for="electronics">Lorem Ipsum</label>
                    </div>
                    <div>
                        <input type="checkbox" id="electronics" name="category" value="electronics">
                        <label for="electronics">Lorem Ipsum</label>
                    </div>
                    <div>
                        <input type="checkbox" id="electronics" name="category" value="electronics">
                        <label for="electronics">Lorem Ipsum</label>
                    </div>
                    <div>
                        <input type="checkbox" id="electronics" name="category" value="electronics">
                        <label for="electronics">Lorem Ipsum</label>
                    </div>
                    <div>
                        <input type="checkbox" id="electronics" name="category" value="electronics">
                        <label for="electronics">Lorem Ipsum</label>
                    </div>
                </div>
                <div class="separator"></div>
                <div class="brand">
                    <label for="category-filter">BRAND:</label>
                    <div>
                        <input type="checkbox" id="electronics" name="category" value="electronics">
                        <label for="electronics">Lorem Ipsum</label>
                    </div>
                    <div>
                        <input type="checkbox" id="electronics" name="category" value="electronics">
                        <label for="electronics">Lorem Ipsum</label>
                    </div>
                    <div>
                        <input type="checkbox" id="electronics" name="category" value="electronics">
                        <label for="electronics">Lorem Ipsum</label>
                    </div>
                    <div>
                        <input type="checkbox" id="electronics" name="category" value="electronics">
                        <label for="electronics">Lorem Ipsum</label>
                    </div>
                    <div>
                        <input type="checkbox" id="electronics" name="category" value="electronics">
                        <label for="electronics">Lorem Ipsum</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="row">
                <div class="sort">
                    <h5>Sort By:</h5>
                    <select>
                        <option value="">Oldest First</option>
                        <option value="">Newest First</option>
                        <option value="">Price Low to High</option>
                        <option value="">Price High to Low</option>
                    </select>
                </div>
                <div class="num_page">
                    <a href="#">&laquo;</a>
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
            <div class="product-list" id="product-list">
                
                <div class="product-item" data-name="RAKK Ilis RGB Mechanical Keyboard Gateron Yellow">
                    <div class="product-header">
                        <div class="stars">
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="heart">
                            <i class="bi bi-heart"></i>
                        </div>
                    </div>
                    <img src="item-2.png" style="height: 100px;">
                        <h5>Keyboard</h5>
                        <p>RAKK Ilis RGB Mechanical Keyboard Gateron Yellow</p>
                        <div class="price">₱2,395.00</div>
                    <div class="btn-item">
                        <button class="add-cart">
                            <i class="bi bi-cart-plus-fill"></i> Add to cart 
                        </button>
                        <button class="buy">BUY NOW</button>
                    </div>
                </div>

                <div class="product-item" data-name="Rakk Aporo RGB Gaming Mouse">
                    <div class="product-header">
                        <div class="stars">
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="heart">
                            <i class="bi bi-heart"></i>
                        </div>
                    </div>
                    <img src="item.png">
                        <h5>Mouse</h5>
                        <p>Rakk Aporo RGB Gaming Mouse</p>
                        <div class="price">₱350.00</div>
                    <div class="btn-item">
                        <button class="add-cart">
                            <i class="bi bi-cart-plus-fill"></i> Add to cart 
                        </button>
                        <button class="buy">BUY NOW</button>
                    </div>
                </div>

                <div class="product-item" data-name="Rakk Aporo RGB Gaming Mouse">
                    <div class="product-header">
                        <div class="stars">
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="heart">
                            <i class="bi bi-heart"></i>
                        </div>
                    </div>
                    <img src="item.png" alt="Product 1">
                        <h5>Product 1</h5>
                        <p>Rakk Aporo RGB Gaming Mouse</p>
                        <div class="price">₱350.00</div>
                    <div class="btn-item">
                        <button class="add-cart">
                            <i class="bi bi-cart-plus-fill"></i> Add to cart 
                        </button>
                        <button class="buy">BUY NOW</button>
                    </div>
                </div>   
            </div>
            <div class="page-num">
                <a href="#">&laquo;</a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">&raquo;</a>
            </div>
        </div>
    </section>

    <script>
        const toggle = document.getElementById('dark-mode-toggle');
        const logo = document.getElementById('logo');

        toggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            toggle.classList.add('rotate');
            if (document.body.classList.contains('dark-mode')) {
                toggle.classList.remove('bi-moon-fill');
                toggle.classList.add('bi-sun-fill');
                logo.src = '../costumer/logo-dark.png';
            } else {
                toggle.classList.remove('bi-sun-fill');
                toggle.classList.add('bi-moon-fill');
                logo.src = '../portal/tech-haven-logo.png';
            }
            setTimeout(() => {
                toggle.classList.remove('rotate');
            }, 400);
        });

        function searchProducts() {
            const searchBar = document.getElementById('search-bar');
            const filter = searchBar.value.toLowerCase();
            const products = document.querySelectorAll('.product-item');

            products.forEach(product => {
                const productName = product.getAttribute('data-name').toLowerCase();
                if (productName.includes(filter)) {
                    product.style.display = '';
                } else {
                    product.style.display = 'none';
                }
            });
        }

        document.getElementById('search-bar').addEventListener('keydown', (event) => {
            if (event.key === 'Enter') {
                searchProducts();
            }
        });
    </script>
</body>
</html>