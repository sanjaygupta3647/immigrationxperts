</head>
<style type="text/css">
    /* Styles for the submenu */
    .submenu {
        display: none;
        position: absolute;
        top: 100%; /* Position below the parent menu item */
        left: 0;
        background-color: #fff; /* Background color of the submenu */
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow for a nice effect */
        z-index: 1000; /* Ensure it's above other content */
		width: max-content;
    }

    /* Show the submenu when hovering over the parent menu item */
    .nav-item:hover .submenu {
        display: block;
    }
</style>
<script>
	document.addEventListener("DOMContentLoaded", function() {
    var submenuToggle = document.querySelector('.submenu-toggle');

    if (submenuToggle) {
        submenuToggle.addEventListener('click', function(event) {
            event.preventDefault();
            var submenu = submenuToggle.querySelector('.submenu');
            submenu.classList.toggle('show');
        });
    }
});

</script>
<body>
<div role="navigation" class="navbar navbar-default navbar-static-top">
  <div class="container">
	<div class="navbar-header">
	  <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	</div>
	<div class="navbar-collapse collapse">
	 <ul class="nav navbar-nav">
			<li><a href="gallery.php">Skills Assessment</a></li>
			<li><a href="skill_body_index.php">Skill Assessing</a></li>
			<li><a href="express_entry_index.php">Express Entry</a></li>
			<li class="nav-item">
				<a href="#" class="nav-link">About</a>
				<!-- Submenu -->
				<ul class="submenu">
					<li><a href="abt_gall_ad_index.php">About / Gallery</a></li>
					<li><a href="about_timeline_index.php">About Timeline</a></li>
				</ul>
			</li>             
			<li><a href="sponsor_ad_index.php">Sponsor</a></li>           
			<li><a href="news_ad_index.php">News</a></li>           
			<li><a href="metadata_index.php">Metadata</a></li>           
			<li class="nav-item">
				<a href="#" class="nav-link">Career</a>
				<!-- Submenu -->
				<ul class="submenu">
					<li><a href="job_index.php">Job Posting</a></li>
					<li><a href="job_tab_index.php">Career Tabs</a></li>
					<li><a href="job_applications.php">Job Applications</a></li>
				</ul>
			</li>   
			<li><a href="canada_job_view.php">Canada NOC</a></li>   
			<li class="nav-item">
				<a href="#" class="nav-link">Australia Skill Assessment</a>
				<!-- Submenu -->
				<ul class="submenu">
					<li><a href="anzsco_occupations_index.php">Australia ANZSCO Code</a></li> 
					<li><a href="anzsco_details_views.php">ANZSCO Code Details</a></li>
				</ul>
			</li> 
			<li><a href="frequently_asked_questions_index.php">FAQ</a></li>
			  
		</ul>
      
	</div>
  </div>
</div>
	
	