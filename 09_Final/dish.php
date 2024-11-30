<?php
define("TITLE", "Menu Item | Franklin's Fine Dining");
include('menu.php'); // Ensure menu.php is included correctly

function strip_bad_chars($input)
{
    return preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
}

// Get menu item
$dish = null;
if (isset($_GET['item'])) {
    $menuItem = strip_bad_chars($_GET['item']);
    if (isset($menuItems[$menuItem])) {
        $dish = $menuItems[$menuItem];
    }
}
?>

<div id="dish">
    <?php if ($dish): ?>
        <h1>
            <?php echo htmlspecialchars($dish['title']); ?><span class="price"> <sup>$</sup>
                <?php echo htmlspecialchars($dish['price']); ?></span>
        </h1>
        <p>
            <?php echo htmlspecialchars($dish['blurb']); ?>
        </p>
        <br>
        <p>
            <strong>Suggested Beverage: <?php echo htmlspecialchars($dish['drink']); ?></strong>
        </p>
        <p>
            <em>Suggested Tip: <sup>$</sup><?php echo number_format($dish['price'] * 0.2, 2); ?> (20%)</em>
        </p>
    <?php else: ?>
        <p>Sorry, no menu item found. Please select a valid menu item.</p>
    <?php endif; ?>
</div>

<?php include('includes/footer.php'); ?>