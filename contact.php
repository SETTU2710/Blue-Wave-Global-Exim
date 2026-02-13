
<?php include 'header.php'; ?>

<section class="hero" style="height: 40vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1423666639041-f142fcb93370?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80') no-repeat center center/cover;">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch for requirements, queries, or partnerships</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 50px;">
            
            <!-- Contact Info -->
            <div>
                <h2 style="margin-bottom: 20px;">Reach Us At</h2>
                <div style="margin-bottom: 30px;">
                    <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                        <i class="fas fa-map-marker-alt" style="font-size: 1.5rem; color: var(--primary-color); margin-right: 15px; margin-top: 5px;"></i>
                        <div>
                            <h4>Address</h4>
                            <p>Blue Wave Global Exim<br>Tirupattur, Tamil Nadu, India</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                        <i class="fas fa-envelope" style="font-size: 1.5rem; color: var(--primary-color); margin-right: 15px; margin-top: 5px;"></i>
                        <div>
                            <h4>Email</h4>
                            <p><a href="mailto:bluewaveglobalexim@gmail.com">bluewaveglobalexim@gmail.com</a></p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                        <i class="fab fa-whatsapp" style="font-size: 1.5rem; color: var(--primary-color); margin-right: 15px; margin-top: 5px;"></i>
                        <div>
                            <h4>Phone / WhatsApp</h4>
                            <p><a href="https://wa.me/918825436740">+91 88254 36740</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div>
                <h2 style="margin-bottom: 20px;">Send a Message</h2>
                <form action="#" style="background: var(--white); padding: 30px; border-radius: 10px; box-shadow: var(--card-shadow);">
                    <div style="margin-bottom: 15px;">
                        <label for="name" style="display: block; margin-bottom: 5px; font-weight: 500;">Your Name</label>
                        <input type="text" id="name" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="email" style="display: block; margin-bottom: 5px; font-weight: 500;">Email Address</label>
                        <input type="email" id="email" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="message" style="display: block; margin-bottom: 5px; font-weight: 500;">Message / Requirement</label>
                        <textarea id="message" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;"></textarea>
                    </div>
                    <button type="submit" class="btn" style="border: none; cursor: pointer; width: 100%;">Send Inquiry</button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- Map Placeholder -->
<section style="height: 400px; background: #eee; display: flex; align-items: center; justify-content: center; color: #aaa;">
    <div style="text-align: center;">
        <i class="fas fa-map-marked-alt" style="font-size: 3rem; margin-bottom: 10px;"></i>
        <p>Google Map location for Tirupattur, Tamil Nadu to be embedded here</p>
    </div>
</section>

<?php include 'footer.php'; ?>
