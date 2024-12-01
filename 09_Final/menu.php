<?php
define("TITLE", "Menu | Franklin's Fine Dining");
include('includes/header.php');

// Menu Items Array
$menuItems = array(
    "club-sandwich" => array(
        "title" => "Club Sandwich",
        "price" => 11,
        "blurb" => "Classic Bacon, Chicken Slices, Lettuce, Tomato, Mayo or Butter",
        "drink" => "Club Soda"
    ),
    "dill-salmon" => array(
        "title" => "Salmon Fillet & Dill Garnish",
        "price" => 18,
        "blurb" => "Sockeye Salmon Fillet with fresh Dill",
        "drink" => "White Wine"
    ),
    "super-salad" => array(
        "title" => "Super Salad",
        "price" => 14,
        "blurb" => "Deluxe Salad with Caesar or Italian Dressing, Bacon bits, Cherry Tomatoes, Cucumber, and Medallion Carrots",
        "drink" => "Lemon Infused Water"
    ),
    "mexican-barbacoa" => array(
        "title" => "Mexican Barbacoa",
        "price" => 21,
        "blurb" => "Shredded beef or pork, corn or flour tortillas, and a tasty marinade made from a base of dried chiles.",
        "drink" => "Tecate Original With Lime"
    ),
);
?>

<div id="menu-container">
    <div class="flex justify-center flex-col">
        <h1 class="flex mx-auto text-center text-3xl">
            Our Delicious Menu
        </h1>
        <p class="text-center py-2 text-[1.2rem]">
            Like our team, our menu is small but amazing!
        </p>
        <p class="text-center text-[1.2rem]"><em>Click any menu item to learn more</em></p>
        <hr>
    </div>
    <ul id="menu-items">
        <?php foreach ($menuItems as $dish => $item): ?>
            <div class="block flex-col mx-auto max-w-[26rem] text-center">
                <li class="text-center mx-auto mt-4">
                    <a href="#" class="menu-item text-2xl text-center"
                        data-title="<?php echo htmlspecialchars($item['title']); ?>"
                        data-price="<?php echo htmlspecialchars($item['price']); ?>"
                        data-blurb="<?php echo htmlspecialchars($item['blurb']); ?>"
                        data-drink="<?php echo htmlspecialchars($item['drink']); ?>">
                        <?php echo htmlspecialchars($item['title']); ?>&nbsp;$<?php echo htmlspecialchars($item['price']); ?>
                    </a>
                </li>
            </div>
        <?php endforeach; ?>
    </ul>
    <div id="dish-details" class="hidden flex-col items-center p-6 text-center">
        <!-- Dynamic Dish Details will be rendered here -->
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuItems = document.querySelectorAll('.menu-item');
        const menuContainer = document.getElementById('menu-items');
        const dishDetails = document.getElementById('dish-details');

        menuItems.forEach(item => {
            item.addEventListener('click', (event) => {
                event.preventDefault(); // Prevent default link behavior

                const title = item.getAttribute('data-title');
                const price = item.getAttribute('data-price');
                const blurb = item.getAttribute('data-blurb');
                const drink = item.getAttribute('data-drink');
                const tip = (price * 0.2).toFixed(2);

                // Hide menu and display dish details
                menuContainer.classList.add('hidden');
                dishDetails.classList.remove('hidden');

                // Populate dish details
                dishDetails.innerHTML = `
                    <h1 class="text-3xl font-bold">${title}<span class="price text-xl"> <sup>$</sup>${price}</span></h1>
                    <p class="mt-4 text-lg">${blurb}</p>
                    <p class="mt-4 text-lg"><strong>Suggested Beverage: ${drink}</strong></p>
                    <p class="mt-4 text-lg"><em>Suggested Tip: <sup>$</sup>${tip} (20%)</em></p>
                    <button 
                        id="back-to-menu" 
                        class="mt-6 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
                        Back to Menu
                    </button>
                `;

                // Add event listener to "Back to Menu" button
                document.getElementById('back-to-menu').addEventListener('click', () => {
                    dishDetails.classList.add('hidden');
                    menuContainer.classList.remove('hidden');
                });
            });
        });
    });
</script>

<?php include('includes/footer.php'); ?>