
<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h2 style="color: var(--primary-color); font-size: 2rem; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 2px;">Blue Wave Global Exim</h2>
        <h1>Trusted Indian Exporter of Agricultural Products</h1>
        <p>Premium quality Rice, Spices, and Coconuts sourced directly from farmers to the world.</p>
        <a href="product.php" class="btn">Explore Products</a>
        <a href="contact.php" class="btn btn-secondary" style="color:white; border-color:white;">Contact Us</a>
    </div>
</section>

<!-- About Preview -->
<section class="section about-preview">
    <div class="container">
        <div class="section-title">
            <span>Who We Are</span>
            <h2>Connecting Farmers to Global Markets</h2>
        </div>
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <p style="font-size: 1.1rem; margin-bottom: 20px;">
                Blue Wave Global Exim is an India-based merchant exporter supplying premium quality agricultural products to global markets.
                We work closely with farmers and processors to deliver consistent quality, competitive pricing, and reliable supply.
            </p>
            <ul style="display: flex; justify-content: center; gap: 20px; margin-bottom: 30px; flex-wrap: wrap;">
                <li><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> Direct Farmer Sourcing</li>
                <li><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> Export Quality</li>
                <li><i class="fas fa-check-circle" style="color: var(--primary-color);"></i> Custom Packaging</li>
            </ul>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="section" style="background-color: var(--background-color);">
    <div class="container">
        <div class="section-title">
            <span>Our Offerings</span>
            <h2>Premium Indian Commodities</h2>
        </div>
        <div class="products-grid">
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Rice" class="product-img">
                <div class="product-overlay">
                    <h3>Rice (All Varieties)</h3>
                    <p>Basmati, Non-Basmati, Parboiled & Raw Rice.</p>
                    <a href="product.php" class="btn" style="margin-top: 10px; font-size: 0.8rem; padding: 8px 16px;">Details</a>
                </div>
            </div>
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Spices" class="product-img">
                <div class="product-overlay">
                    <h3>Indian Spices</h3>
                    <p>Turmeric, Black Pepper, Dry Red Chilli & more.</p>
                    <a href="product.php" class="btn" style="margin-top: 10px; font-size: 0.8rem; padding: 8px 16px;">Details</a>
                </div>
            </div>
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Coconut" class="product-img">
                <div class="product-overlay">
                    <h3>Fresh Coconut</h3>
                    <p>Natural, fresh coconuts available on request.</p>
                    <a href="product.php" class="btn" style="margin-top: 10px; font-size: 0.8rem; padding: 8px 16px;">Details</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section features">
    <div class="container">
        <div class="section-title">
            <span>Why Choose Us</span>
            <h2>Our Strengths</h2>
        </div>
        <div class="features-grid">
            <div class="feature-item">
                <i class="fas fa-handshake feature-icon"></i>
                <h3>Direct Sourcing</h3>
                <p>We source directly from farmers to ensure the best rates and quality.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-award feature-icon"></i>
                <h3>Quality Assurance</h3>
                <p>Strict quality checks at every stage of processing and packing.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-boxes feature-icon"></i>
                <h3>Custom Packaging</h3>
                <p>Tailored packaging solutions (PP, Jute, etc.) for every market.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-shipping-fast feature-icon"></i>
                <h3>Reliable Logistics</h3>
                <p>Timely delivery with complete export documentation support.</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="section workflow">
    <div class="container">
        <div class="section-title">
            <span>Process</span>
            <h2>How We Work</h2>
        </div>
        <div class="step-grid">
            <div class="step">
                <div class="step-number">01</div>
                <h4>Requirement</h4>
                <p>Buyer sends detailed requirement</p>
            </div>
            <div class="step">
                <div class="step-number">02</div>
                <h4>Quote</h4>
                <p>We confirm specs & price</p>
            </div>
            <div class="step">
                <div class="step-number">03</div>
                <h4>Confirm</h4>
                <p>Order confirmation</p>
            </div>
            <div class="step">
                <div class="step-number">04</div>
                <h4>Export</h4>
                <p>Packing, Q.C. & Dispatch</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section" style="text-align: center;">
    <div class="container">
        <h2>Ready to source premium Indian products?</h2>
        <p>Contact us today for a quote or specific requirements.</p>
        <br>
        <a href="https://wa.me/918825436740" class="btn" target="_blank"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

<?php include 'footer.php'; ?>
