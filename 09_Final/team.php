<?php
// Nav menu items
$navItems = array(
    array(
        "slug" => "index.php",
        "link" => "Home"
    ),
    array(
        "slug" => "team.php",
        "link" => "Team"
    ),
    array(
        "slug" => "menu.php",
        "link" => "Menu"
    ),
    array(
        "slug" => "contact.php",
        "link" => "Contact"
    ),
);

$teamMembers = array(
    array(
        "name" => "Frankie",
        "position" => "Owner",
        "bio" => "Frankie is the Great-Grandson of the founder, he is the current owner of Franklin's Fine Dining.",
        "img" => "frankie"
    ),
    array(
        "name" => "Francis",
        "position" => "General Manager",
        "bio" => "Frankie is the General Manager, she is the sister of Frankie.",
        "img" => "francis"
    ),
    array(
        "name" => "Carlos",
        "position" => "Head Chef",
        "bio" => "Carlos is the Head Chef of Franklin's Fine Dining.",
        "img" => "carlos"
    )
);

define("TITLE", "Team | Franklin's Fine Dining");

include('includes/header.php');
?>

<div id="team-members" class="cf">
    <h1 class="text-3xl">Our Team At Franklin's</h1>
    <p>We're small, but mighty, Franklin's Fine Dining has been a
        has been a family-owned and run business since
        the thirties, and we're proud of it!
        <strong>The best food you've ever had!</strong>
    </p>
    <hr>
    <?php foreach ($teamMembers as $member): ?>
        <div class="member">
            <img src="img/<?php echo $member['img']; ?>.png" alt="Picture of <?php echo $member['name']; ?> ">
            <h2><?php echo $member['name']; ?></h2>
            <p><?php echo $member['bio']; ?></p>
        </div>
    <?php endforeach; ?>
</div>
<hr>
<?php include('includes/footer.php'); ?>