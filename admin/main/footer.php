  <!-- FOOTER -->
            
            <footer class="footer mt-auto py-3 bg-white text-center">
                <div class="container">
                    <span class="text-muted"> Copyright © <span id="year"></span> <a
                            href="javascript:void(0);" class="text-dark fw-semibold">Expert</a>.
                        Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                            <span class="fw-semibold text-primary text-decoration-underline">Expert</span>
                        </a> All
                        rights
                        reserved
                    </span>
                </div>
            </footer>
            <!-- END FOOTER -->

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        <!-- SCROLL-TO-TOP -->
        <div class="scrollToTop">
                <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
        </div>
        <div id="responsive-overlay"></div>

        <!-- POPPER JS -->
        <script src="build/assets/libs/%40popperjs/core/umd/popper.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="build/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- NODE WAVES JS -->
        <script src="build/assets/libs/node-waves/waves.min.js"></script>

        <!-- SIMPLEBAR JS -->
        <script src="build/assets/libs/simplebar/simplebar.min.js"></script>
        <link rel="modulepreload" href="build/assets/simplebar-635bad04.js" /><script type="module" src="build/assets/simplebar-635bad04.js"></script>

        <!-- COLOR PICKER JS -->
        <script src="build/assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script>
        
        <!-- PRISM JS -->
        <script src="build/assets/libs/prismjs/prism.js"></script>
        <link rel="modulepreload" href="build/assets/prism-custom-cc53504d.js" /><script type="module" src="build/assets/prism-custom-cc53504d.js"></script>


        <!-- STICKY JS -->
		<script src="build/assets/sticky.js"></script>

        <!-- APP JS -->
		<link rel="modulepreload" href="build/assets/app-3cade095.js" /><script type="module" src="build/assets/app-3cade095.js"></script>

        <!-- CUSTOM-SWITCHER JS -->
        <link rel="modulepreload" href="build/assets/custom-switcher-383b6a5b.js" /><script type="module" src="build/assets/custom-switcher-383b6a5b.js"></script>
        
        <!-- END SCRIPTS -->
		
		 <!-- Include the Quill library -->
		<script>
			ClassicEditor
				.create(document.querySelector('#clientQuote'))
				.catch(error => {
					console.error(error);
				});
				
			 ClassicEditor
				.create(document.querySelector('#answer'))
				.catch(error => {
					console.error(error);
				});	
		</script>

	</body>
</html>


<?php
// Close the database connection
$conn->close();
?>