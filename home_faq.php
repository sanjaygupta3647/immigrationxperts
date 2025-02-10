<?php
// Include database connection and fetch FAQs
include('admin/db/db_connection.php');

function getAllFAQs($conn) {
    $sql = "SELECT id, question, answer, category FROM faq";
    $result = $conn->query($sql);
    $faqs = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $faqs[] = $row;
        }
    }
    return $faqs;
}

$faqs = getAllFAQs($conn);
?>

<!-- HTML section -->
<section class="services-two">
    <div class="container">
        <div class="services-two__top text-center">
           <div class="section-title text-left">
				
				<h2 class="section-title__title">Frequently Asked Questions (FAQs)</h2>
			</div>
        </div>

        <div class="faq-one__single">
            <div class="accrodion-grp faq-one-accrodion faq-one-accrodion-1" data-grp-name="faq-one-accrodion-1">
                <?php foreach ($faqs as $faq) : ?>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4><span>&gt;</span> <?php echo $faq['question']; ?></h4>
                        </div>
                        <div class="accrodion-content" style="display: none;">
                            <div class="inner">
                                <?php echo $faq['answer']; ?>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
