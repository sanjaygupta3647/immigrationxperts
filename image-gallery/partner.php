<?php
// Include the Database class file
require_once 'config/db.php';

// Create an instance of the Database class
$database = new Database();

// Get the database connection
$conn = $database->getConnection();

// Fetch partner logos data from the database
$sql = "SELECT * FROM partner_logos ORDER BY id DESC";
$result = $conn->query($sql);
?>
<section class="brand-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <div class="brand-one__title">
                    <h2>Trusted Our Partner Logo</h2>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="brand-one__main-content">
                   <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": {"delay": 5000, "disableOnInteraction": false}, "loop": true, "breakpoints": {"0": {"spaceBetween": 30, "slidesPerView": 2}, "375": {"spaceBetween": 30, "slidesPerView": 2}, "575": {"spaceBetween": 30, "slidesPerView": 3}, "767": {"spaceBetween": 50, "slidesPerView": 4}, "991": {"spaceBetween": 50, "slidesPerView": 5}, "1199": {"spaceBetween": 100, "slidesPerView": 5}}}'>
						<div class="swiper-wrapper">
							<?php
							// Display partner logos
							if ($result && $result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
									echo "<div class='swiper-slide'>
											<img src='{$row['image']}' alt='{$row['alt']}'>
										</div>";
								}
							}
							?>
						</div>
					</div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
// Close connection
$conn->close();
?>
