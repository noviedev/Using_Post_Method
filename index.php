<?php
$team = [
    [
        "id" => 1,
        "name" => "Novelene Udtohan",
        "role" => "Team Leader / Fullstack Developer",
        "desc" => "I am a versatile developer who builds complete applications from the ground up. I love tackling both visual layouts and complex server logic, utilizing tools like C#, Java, and SQL to create seamless, end-to-end solutions that look great and run perfectly.",
        "image" => "images/novelene.jpg"
    ],
    [
        "id" => 2,
        "name" => "Mary Rose De Los Santos",
        "role" => "UI/UX Designer",
        "desc" => "I am a creative problem-solver dedicated to crafting visually stunning and intuitive digital experiences. My goal is to deeply understand user needs and design beautiful, user-friendly interfaces that make technology accessible and enjoyable for everyone.",
        "image" => "images/maryrose.jpg"
    ],
    [
        "id" => 3,
        "name" => "Glen Delgado",
        "role" => "Front-end Developer",
        "desc" => "I bring designs to life! I focus entirely on the user-facing side of applications, writing clean code to build responsive and highly interactive layouts. I ensure that every website I touch is easy to navigate and looks incredible on any device.",
        "image" => "images/glen.jpg"
    ],
    [
        "id" => 4,
        "name" => "Crisnar Villagarcia",
        "role" => "Back-end Developer",
        "desc" => "I am the architect working behind the scenes. I build the core foundation of applications, design robust database schemas, and write the server-side logic that powers everything. My focus is on keeping systems secure, fast, and efficient.",
        "image" => "images/crisnar.jpg"
    ],
    [
        "id" => 5,
        "name" => "Shire Grace Villagorda",
        "role" => "UI/UX Designer",
        "desc" => "I focus on the user's journey. UX designers map out how a user navigates from point A to point B, ensuring the process is logical, intuitive, and solves the user's problem without frustration. Wireframes, user flows, and interactive prototypes.",
        "image" => "images/shire.jpg"
    ],
    [
        "id" => 6,
        "name" => "Deo Reyes",
        "role" => "Front-end Developer",
        "desc" => "I am ensuring the website or app looks exactly like the design across all devices (desktop, tablet, mobile) and browsers. They make buttons click, menus open, and pages transition smoothly. Responsive web pages, interactive user interfaces, and fast-loading client-side architecture.",
        "image" => "images/deo.jpg"
    ],
    [
        "id" => 7,
        "name" => "Marc Angelo Bato",
        "role" => "Back-end Developer",
        "desc" => "I am managing data, security, and server logic. When a user clicks 'Log In' on the front end, the back end checks the database to see if the password is correct, generates a secure session, and sends the user's profile data back to the front end.",
        "image" => "images/marc.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - INTPROG Midterm Exercise #4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1 class="title">&#128155; OUR TEAM</h1>

    <div class="grid">
        <?php foreach ($team as $member): ?>
            <div class="card">
                <img src="<?= htmlspecialchars($member['image']); ?>" alt="<?= htmlspecialchars($member['name']); ?>">
                <div class="card-body">
                    <h2 class="name"><?= htmlspecialchars($member['name']); ?></h2>
                    <p class="role"><?= htmlspecialchars($member['role']); ?></p>
                    <p class="desc"><?= htmlspecialchars($member['desc']); ?></p>

                    <!-- Form using POST method -->
                    <form method="POST" action="profile.php">
                        <input type="hidden" name="member_id" value="<?= htmlspecialchars($member['id']); ?>">
                        <input type="hidden" name="member_name" value="<?= htmlspecialchars($member['name']); ?>">
                        <input type="hidden" name="member_role" value="<?= htmlspecialchars($member['role']); ?>">
                        <input type="hidden" name="member_desc" value="<?= htmlspecialchars($member['desc']); ?>">
                        <input type="hidden" name="member_image" value="<?= htmlspecialchars($member['image']); ?>">
                        <button type="submit" class="view-btn">View Full Profile (POST)</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
