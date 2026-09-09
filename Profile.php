<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$name  = $_POST['member_name'] ?? 'Unknown Member';
$role  = $_POST['member_role'] ?? 'No role provided';
$desc  = $_POST['member_desc'] ?? 'No description available.';
$image = $_POST['member_image'] ?? 'images/default.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($name); ?> - Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="card profile-card">
        <img src="<?= htmlspecialchars($image); ?>" alt="<?= htmlspecialchars($name); ?>">
        <div class="card-body">
            <h1 class="name" style="font-size: 1.4rem;"><?= htmlspecialchars($name); ?></h1>
            <p class="role" style="font-size: 1rem;"><?= htmlspecialchars($role); ?></p>
            <p class="desc" style="font-size: 0.9rem;"><?= htmlspecialchars($desc); ?></p>
            <p style="font-size: 0.75rem; color: #28a745; font-weight: bold; margin-bottom: 15px;">
                ✓ Loaded via HTTP POST Method
            </p>
            <a href="index.php" class="back-link">&larr; Back to Team Page</a>
        </div>
    </div>

</body>
</html>
