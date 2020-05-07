<!DOCTYPE html>
<html lang="en">

		<?php include_once('../partials/head.php'); ?>

		<body class="options page">

			<div class="block__title">
				<h2 class="block__subheading">Meal Options</h2>
				<?php include_once('../partials/logout.php'); ?>
			</div>

				<?php //include_once('../partials/header.php'); ?>

        <main class="main" role="main">
        	<div class="block__copy options">
          	<p>Nutrients Remaining</p>
          	<div class="nutrients_remaining">160<span>Carbs (g)</span></div>
          	<div class="nutrients_remaining">38<span>Fat (g)</span></div>
          	<div class="nutrients_remaining">70<span>Protein (g)</span></div>
          </div>
        	<form id="favorites-form" class="form" role="form">
        		<div class="block__copy meal">
        			<p>Breakfast</p>
        			<span class="meal_macros">Carbs 25.5g • </span>
        			<span class="meal_macros">Fat 16.8g • </span>
        			<span class="meal_macros">Protein 20g</span>
        		</div>
            <div class="form__radio">
            	<div class="radio">Whole Wheat English Muffin<span>Trader Joes, 1 muffin</span></div>
            	<div class="radio">Large Egg Nw<span>Dutch Farms, 1 egg (50g)</span></div>
            	<div class="radio">Natural Choice Honey Deli Ham<span>Hormel, 2 slices</span></div>
            	<div class="radio">Colby Jack Slice<span>Sargento, 1 slice</span></div>
            	<div class="radio">Hellman's Light<span>Mayo, 15 grams</span></div>
            </div>
          </form>
        </main>

        <?php include_once('../partials/footer.php'); ?>

    </body>
</html>
