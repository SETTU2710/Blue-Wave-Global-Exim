
<?php include 'header.php'; ?>

<section class="hero" style="height: 50vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1596524430615-b46475ddff6e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80') no-repeat center center/cover;">
    <div class="container">
        <h1>Our Product Catalogue</h1>
        <p>Explore our wide range of premium quality agricultural exports</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Premium Selection</span>
            <h2>Export Quality Products</h2>
            <p style="max-width: 700px; margin: 0 auto; margin-top: 10px;">Sourced directly from certified farms, processed hygienically, and packed to international standards.</p>
        </div>

        <!-- Filter Buttons (Optional future enhancement, keeping it simple grid for now) -->
        
        <div class="products-grid" style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 40px;">
            
            <!-- Product 1: Rice -->
            <div class="product-card" style="height: auto; display: flex; flex-direction: column;">
                <div style="height: 250px; overflow: hidden;">
                    <img src="img\rice.jpeg" alt="Indian Rice" class="product-img">
                </div>
                <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                    <h3>Indian Rice</h3>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Basmati, Non-Basmati, Ponni, Idli Rice</p>
                    <ul style="margin-bottom: 20px; font-size: 0.9rem; list-style: circle; padding-left: 20px; color: #555;">
                        <li><strong>Origin:</strong> Tamil Nadu / Punjab</li>
                        <li><strong>Type:</strong> Raw, Parboiled, Steam</li>
                        <li><strong>Packing:</strong> 5kg, 10kg, 25kg, 50kg PP/Jute Bags</li>
                    </ul>
                    <a href="contact.php?product=rice" class="btn" style="width: 100%; text-align: center; margin-top: auto;">Enquire Now</a>
                </div>
            </div>

            <!-- Product 2: Red Chilli -->
            <div class="product-card" style="height: auto; display: flex; flex-direction: column;">
                <div style="height: 250px; overflow: hidden;">
                    <img src="img\Red Chilli.jpeg" alt="Dry Red Chilli" class="product-img">
                </div>
                <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                    <h3>Dry Red Chilli</h3>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Sannam S4, Teja, Byadgi, Guntur</p>
                     <ul style="margin-bottom: 20px; font-size: 0.9rem; list-style: circle; padding-left: 20px; color: #555;">
                        <li><strong>Color:</strong> Deep Red</li>
                        <li><strong>Pungency:</strong> Medium to High (SHU varies)</li>
                        <li><strong>Form:</strong> Whole with/without stem</li>
                    </ul>
                    <a href="contact.php?product=chilli" class="btn" style="width: 100%; text-align: center; margin-top: auto;">Enquire Now</a>
                </div>
            </div>

            <!-- Product 3: Turmeric -->
            <div class="product-card" style="height: auto; display: flex; flex-direction: column;">
                <div style="height: 250px; overflow: hidden;">
                    <img src="img\Turmeric.jpeg" alt="Turmeric" class="product-img">
                </div>
                <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                    <h3>Turmeric (Haldi)</h3>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Finger, Bulb, and Powder</p>
                     <ul style="margin-bottom: 20px; font-size: 0.9rem; list-style: circle; padding-left: 20px; color: #555;">
                        <li><strong>Curcumin:</strong> 2% - 5%</li>
                        <li><strong>Quality:</strong> Double Polished / Unpolished</li>
                        <li><strong>Usage:</strong> Culinary, Medicinal</li>
                    </ul>
                    <a href="contact.php?product=turmeric" class="btn" style="width: 100%; text-align: center; margin-top: auto;">Enquire Now</a>
                </div>
            </div>

            <!-- Product 4: Black Pepper -->
            <div class="product-card" style="height: auto; display: flex; flex-direction: column;">
                <div style="height: 250px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Black Pepper" class="product-img">
                </div>
                <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                    <h3>Black Pepper</h3>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Malabar/Tellicherry Garbled</p>
                     <ul style="margin-bottom: 20px; font-size: 0.9rem; list-style: circle; padding-left: 20px; color: #555;">
                        <li><strong>Density:</strong> 500GL - 600GL</li>
                        <li><strong>Moisture:</strong> Below 11%</li>
                        <li><strong>Taste:</strong> Strong Pungent</li>
                    </ul>
                    <a href="contact.php?product=pepper" class="btn" style="width: 100%; text-align: center; margin-top: auto;">Enquire Now</a>
                </div>
            </div>

             <!-- Product 5: Coconut -->
             <div class="product-card" style="height: auto; display: flex; flex-direction: column;">
                <div style="height: 250px; overflow: hidden;">
                    <img src="img\Coconut.jpeg" alt="Coconut" class="product-img">
                </div>
                <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                    <h3>Fresh Coconut</h3>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Pollachi/Kerala Origin</p>
                     <ul style="margin-bottom: 20px; font-size: 0.9rem; list-style: circle; padding-left: 20px; color: #555;">
                        <li><strong>Type:</strong> Semi-Husked / Fully Husked</li>
                        <li><strong>Weight:</strong> 500g - 700g per nut</li>
                        <li><strong>Shelf Life:</strong> 50-60 Days</li>
                    </ul>
                    <a href="contact.php?product=coconut" class="btn" style="width: 100%; text-align: center; margin-top: auto;">Enquire Now</a>
                </div>
            </div>

            <!-- Product: Cashew Nuts -->
            <div class="product-card" style="height: auto; display: flex; flex-direction: column;">
                <div style="height: 250px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1543160824-370003058b8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cashew Nuts" class="product-img">
                </div>
                <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                    <h3>Cashew Nuts</h3>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Premium Indian Cashews</p>
                     <ul style="margin-bottom: 20px; font-size: 0.9rem; list-style: circle; padding-left: 20px; color: #555;">
                        <li><strong>Grades:</strong> W180, W240, W320, Splits</li>
                        <li><strong>Processing:</strong> Raw / Roasted / Salted</li>
                        <li><strong>Origin:</strong> Kollam / Panruti</li>
                    </ul>
                    <a href="contact.php?product=cashew" class="btn" style="width: 100%; text-align: center; margin-top: auto;">Enquire Now</a>
                </div>
            </div>

            <!-- Product: Almonds -->
            <div class="product-card" style="height: auto; display: flex; flex-direction: column;">
                <div style="height: 250px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1623428187969-5da2dcea5ebf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Almonds" class="product-img">
                </div>
                <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                    <h3>Almonds (Badam)</h3>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Nutrient-rich Almond Kernels</p>
                     <ul style="margin-bottom: 20px; font-size: 0.9rem; list-style: circle; padding-left: 20px; color: #555;">
                        <li><strong>Variety:</strong> California, Gurbandi, Mamra</li>
                        <li><strong>Quality:</strong> Premium / Standard</li>
                        <li><strong>Packing:</strong> Vacuum Packed</li>
                    </ul>
                    <a href="contact.php?product=almond" class="btn" style="width: 100%; text-align: center; margin-top: auto;">Enquire Now</a>
                </div>
            </div>

            <!-- Product: Walnut Kernels -->
            <div class="product-card" style="height: auto; display: flex; flex-direction: column;">
                <div style="height: 250px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1574315042621-50c7689b78c8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Walnut Kernels" class="product-img">
                </div>
                <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                    <h3>Walnut Kernels</h3>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Healthy Brain Food</p>
                     <ul style="margin-bottom: 20px; font-size: 0.9rem; list-style: circle; padding-left: 20px; color: #555;">
                        <li><strong>Type:</strong> Light Halves, Quarters, Broken</li>
                        <li><strong>Shell:</strong> Without Shell (Kernels)</li>
                        <li><strong>Origin:</strong> Kashmir / Imported</li>
                    </ul>
                    <a href="contact.php?product=walnut" class="btn" style="width: 100%; text-align: center; margin-top: auto;">Enquire Now</a>
                </div>
            </div>

            <!-- Product: Pistachios -->
            <div class="product-card" style="height: auto; display: flex; flex-direction: column;">
                <div style="height: 250px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1600189020948-4cb294954495?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Pistachios" class="product-img">
                </div>
                <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                    <h3>Pistachios (Pista)</h3>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Rich & Creamy</p>
                     <ul style="margin-bottom: 20px; font-size: 0.9rem; list-style: circle; padding-left: 20px; color: #555;">
                        <li><strong>Form:</strong> Roasted & Salted / Plain</li>
                        <li><strong>Shell:</strong> In-shell / Kernels</li>
                        <li><strong>Quality:</strong> Jumbo / Standard</li>
                    </ul>
                    <a href="contact.php?product=pistachio" class="btn" style="width: 100%; text-align: center; margin-top: auto;">Enquire Now</a>
                </div>
            </div>

            <!-- Product: Raisin -->
            <div class="product-card" style="height: auto; display: flex; flex-direction: column;">
                <div style="height: 250px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1596383679808-b8c734419cb7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Raisins" class="product-img">
                </div>
                <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                    <h3>Raisins (Kishmish)</h3>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Sweet Dried Grapes</p>
                     <ul style="margin-bottom: 20px; font-size: 0.9rem; list-style: circle; padding-left: 20px; color: #555;">
                        <li><strong>Variety:</strong> Golden, Black, Green Malayar</li>
                        <li><strong>Size:</strong> Bold / Medium / Small</li>
                        <li><strong>Taste:</strong> Sweet</li>
                    </ul>
                    <a href="contact.php?product=raisin" class="btn" style="width: 100%; text-align: center; margin-top: auto;">Enquire Now</a>
                </div>

            <!-- Product 6: Cardamom & Others -->
            <div class="product-card" style="height: auto; display: flex; flex-direction: column;">
                <div style="height: 250px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1599909631737-145416102143?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cardamom" class="product-img">
                </div>
                <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                    <h3>Other Spices</h3>
                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Cardamom, Clove, Coriander</p>
                     <ul style="margin-bottom: 20px; font-size: 0.9rem; list-style: circle; padding-left: 20px; color: #555;">
                        <li><strong>Cardamom:</strong> 7mm - 8mm Green</li>
                        <li><strong>Coriander:</strong> Whole/Split Seeds</li>
                        <li><strong>Availability:</strong> Contact for details</li>
                    </ul>
                    <a href="contact.php?product=others" class="btn" style="width: 100%; text-align: center; margin-top: auto;">Enquire Now</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Specs Summary -->
<section class="section" style="background-color: var(--secondary-color); color: var(--white);">
    <div class="container">
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 30px;">
            <div style="flex: 1; min-width: 300px;">
                <h2 style="color: var(--white); margin-bottom: 10px;">Tailored to Your Needs</h2>
                <p>We understand that every market has unique requirements for grain size, moisture content, and packaging. Talk to us about your specific needs.</p>
            </div>
            <div style="flex: 1; min-width: 300px; text-align: center;">
                <a href="contact.php" class="btn" style="background: var(--white); color: var(--secondary-color); border: none;">Get a Custom Quote</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
