	<?php
	// Your other PHP code...

	// Database configuration
	include('admin/db/db_connection.php');
	// Function to fetch testimonials from the database
	function fetchTestimonials() {
		global $conn;

		$testimonials = array();

		$sql = "SELECT * FROM testimonials"; // Adjust the query based on your table structure
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$testimonials[] = $row;
			}
		}

		return $testimonials;
	}

	// Your HTML and PHP mixed content here

    // Assuming fetchTestimonials() fetches testimonials as an array of testimonial data
    $testimonials = fetchTestimonials();

    foreach ($testimonials as $testimonial) {
        $clientName = $testimonial['client_name'];
        $clientLocation = $testimonial['client_location'];
        $clientQuote = $testimonial['client_quote'];
        $clientImage = $testimonial['client_image'];
        $facebookLink = $testimonial['facebook_link'];
        $linkedinLink = $testimonial['linkedin_link'];
		$trimmedQuote = substr($clientQuote, 0, 250); // Limit to 250 characters
		$displayQuote = strlen($clientQuote) > 250 ? $trimmedQuote . "..." : $clientQuote;
 
    ?>
	<div class="item">
    <div class="testimonial-one__single">
        <div class="testimonial-one__single-inner">
            <div class="testimonial-one__shape-1">
                <img src="/assets/images/shapes/testimonial-one-shape-1.png" alt="">
            </div>
            <div class="testimonial-one__client-info">
                <div class="testimonial-one__client-img-box">
                    <img src="admin/images/testimonial/<?php echo $clientImage; ?>" alt="">
                    <div class="testimonial-one__quote">
                        <img src="/assets/images/testimonial/testimonial-1-quote.png" alt="">
                    </div>
                </div>
                <div class="testimonial-one__client-content">
                    <div class="testimonial-one__client-details">
                        <h3 class="testimonial-one__client-name"><?php echo $clientName; ?></h3>
                        <p class="testimonial-one__client-sub-title"><?php echo $clientLocation; ?></p>
                    </div>
                    <div class="testimonial__social">
                        <a href="<?php echo $facebookLink; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="<?php echo $linkedinLink; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <p class="testimonial-one__text"><?php echo $displayQuote; ?></p>
                <?php if (strlen($clientQuote) > 250) : ?>
                    <a href="testimonial_details.php?id=<?php echo $testimonial['id']; ?>">View Details</a>
                <?php endif; ?>
        </div>
    </div>
	</div>
    <?php } ?>
