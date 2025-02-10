<?php
session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit();
}

include_once 'config/Database.php';

$database = new Database();
$mysqli = $database->getConnection();

// Get the tab ID from URL parameter
$tab_id = isset($_GET['tab_id']) ? (int)$_GET['tab_id'] : 0; 
if ($tab_id <= 0) {
    die("Invalid Tab ID.");
}

// Fetch tab details
$query = "SELECT * FROM skill_body_tabs WHERE id = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $tab_id);
$stmt->execute();
$tabResult = $stmt->get_result();
$tabData = $tabResult->fetch_assoc();

if (!$tabData) {
    die("Tab not found.");
}

// Auto-generate predefined sections if 'internalNav' is enabled
if ($tabData['internalNav'] == 1) {
    // List of predefined sections to add
    $predefinedSections = ['Requirements', 'Process', 'Timeline', 'Cost', 'Occupations'];

    foreach ($predefinedSections as $sectionTitle) {
        // Check if this section already exists for the current tab
        $checkQuery = "SELECT COUNT(*) FROM skill_body_sections WHERE tab_id = ? AND title = ?";
        $checkStmt = $mysqli->prepare($checkQuery);
        $checkStmt->bind_param("is", $tab_id, $sectionTitle);
        $checkStmt->execute();
        $checkStmt->bind_result($count);
        $checkStmt->fetch();
        $checkStmt->close();

        if ($count == 0) {
            // If section does not exist, insert it
            $anchor = strtolower(str_replace(' ', '-', $sectionTitle)); // Create anchor (e.g., "requirements")
            $insertQuery = "INSERT INTO skill_body_sections (tab_id, title, anchor, content) VALUES (?, ?, ?, ?)";
            $insertStmt = $mysqli->prepare($insertQuery);
            $content = ""; // Default empty content
            $insertStmt->bind_param("isss", $tab_id, $sectionTitle, $anchor, $content);
            $insertStmt->execute();
            $insertStmt->close();
        }
    }
}

// Fetch all sections for this tab
$sectionQuery = "SELECT * FROM skill_body_sections WHERE tab_id = ? ORDER BY id ASC";
$sectionStmt = $mysqli->prepare($sectionQuery);
$sectionStmt->bind_param("i", $tab_id);
$sectionStmt->execute();
$sections = $sectionStmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Sections for Tab: <?php echo htmlspecialchars($tabData['title']); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style>
        /* Sticky Navigation CSS */
        .sticky-nav {
            position: sticky;
            top: 0;
            background-color: #f8f9fa;
            padding: 10px;
            z-index: 1000;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

<?php include('include/container.php'); ?> <!-- Ensure your top menu is included here -->
<div class="container mt-5">
    <h2>Manage Sections for Tab: <?php echo htmlspecialchars($tabData['title']); ?></h2>

    <!-- Display Add New Section button only if 'internalNav' is 0 -->
    <?php if ($tabData['internalNav'] == 0 && $tabData['section_added'] == 0): ?>
        <a href="skill_body_insert_section.php?tab_id=<?php echo $tab_id; ?>" class="btn btn-info btn-sm">Add New Section</a>
    <?php endif; ?>

    <a href="skill_body_index.php" class="btn btn-info btn-sm">View Tabs</a>

    <?php if ($sections->num_rows > 0): ?>
        <?php if ($tabData['internalNav'] == 1): ?>
            <!-- Sticky Navigation -->
            <div class="sticky-nav">
                <?php while ($section = $sections->fetch_assoc()): ?>
                    <a class="btn btn-link" href="#section<?php echo htmlspecialchars($section['id']); ?>">
                        <?php echo htmlspecialchars($section['title']); ?>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <!-- Reset result set pointer to fetch sections for content display -->
        <?php $sections->data_seek(0); ?>

        <!-- Display Sections -->
        <div class="sections-content">
            <?php while ($section = $sections->fetch_assoc()): ?>
                <div id="section<?php echo htmlspecialchars($section['id']); ?>" class="mt-5">
                    <h3><?php echo htmlspecialchars($section['title']); ?></h3>
                    <p><?php echo ($section['content']); ?></p>

                    <!-- Action buttons for each section -->
                    <a href="skill_body_edit_section.php?id=<?php echo htmlspecialchars($section['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="skill_body_delete_section.php?id=<?php echo htmlspecialchars($section['id']); ?>&tab_id=<?php echo $tab_id; ?>"
                       class="btn btn-danger btn-sm" 
                       onclick="return confirm('Are you sure you want to delete this section?')">Delete</a>
                </div>
            <?php endwhile; ?>
        </div>

    <?php else: ?>
        <p>No sections found for this tab. <a href="skill_body_insert_section.php?tab_id=<?php echo $tab_id; ?>">Add a section</a> to get started.</p>
    <?php endif; ?>
</div>

</body>
</html>
