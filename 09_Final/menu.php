<?php
define("TITLE", "Menu | Franklin's Fine Dining");
include('includes/header.php');

$menuItems = array(
    "club-sandwich" => array(
        "title" => "Club Sandwich",
        "price" => 11,
        "blurb" => "Classic Bacon, Chicken Slices, Lettuce, Tomato, Mayo or Butter ",
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
        "blurb" => "Deluxe Salad with Caesar or Italian Dressing Bacon bits, Cherry Tomatoes, Cucumber, and Medallion Carrots ",
        "drink" => "Lemon Infused Water"
    ),
    "mexican-barbacoa" => array(
        "title" => "Mexican Barbacoa",
        "price" => 21,
        "blurb" => "Shredded beef or pork, corn or flour tortillas, and a tasty marinade made from a base of dried chiles. ",
        "drink" => "Tecate Original With Lime"
    ),
)


    ?>


<div id="menu-items">
    <div class="flex justify-center flex-col">
        <h1 class="flex mx-auto text-center text-3xl">
            Our Delicious Menu
        </h1>

        <p class="text-center py-2 text-[1.2rem]">
            Like our team, our menu is small but amazing!
        </p>
        <p class="text-center  text-[1.2rem]"><em>Click any menu item to learn more</em></p>
        <hr>
    </div>
    <ul>
        <?php
        foreach ($menuItems as $dish => $item) {
            ?>
            <div class="block flex-col mx-auto w-[17rem] max-w-[22rem] text-left">
                <li class="text-left mx-auto">
                    <a class="text-left"
                        href="dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?>&nbsp$<?php echo $item['price'] ?></a>
                </li>
            </div>
        <?php } ?>
    </ul>
</div>



<?php
include('includes/footer.php')
    ?>