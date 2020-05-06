<!DOCTYPE html>
<html lang="en">

		<?php include_once('../partials/head.php'); ?>

		<body class="options page">

			<div class="block__title">
				<h2 class="block__subheading">Meal Options</h2>
			</div>

				<?php //include_once('../partials/header.php'); ?>

        <main class="main" role="main">
        	<div class="block__copy nutrients">
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
            	<!-- <input id="Whole Wheat English Muffin" type="radio" name="favorites" checked /> -->
            	<label class="radio" for="Whole Wheat English Muffin">Whole Wheat English Muffin<span>Trader Joes, 1 muffin</span></label>
            		<br>
            	<!-- <input id="Large Egg Nw" type="radio" name="favorites" /> -->
            	<label class="radio" for="Large Egg Nw">Large Egg Nw<span>Dutch Farms, 1 egg (50g)</span></label>
            		<br>
            	<!-- <input id="Natural Choice Honey Deli Ham" type="radio" name="favorites" /> -->
            	<label class="radio" for="Natural Choice Honey Deli Ham">Natural Choice Honey Deli Ham<span>Hormel, 2 slices</span></label>
            		<br>
            	<!-- <input id="Colby Jack Slice" type="radio" name="favorites" /> -->
            	<label class="radio" for="Colby Jack Slice">Colby Jack Slice<span>Sargento, 1 slice</span></label>
            		<br>
            	<!-- <input id="Hellman's Light" type="radio" name="favorites" /> -->
            	<label class="radio" for="Hellman's Light">Hellman's Light<span>Mayo, 15 grams</span></label>
            		<br>
            	<!-- <input id="Raw Almond Butter" type="radio" name="favorites" /> -->
            	<label class="radio" for="Raw Almond Butter">Raw Almond Butter<span>1 tbsp</span></label>
            		<br>
            	<!-- <input id="Honeycrisp Apple" type="radio" name="favorites" /> -->
            	<label class="radio" for="Honeycrisp Apple">Honeycrisp Apple<span>1 medium apple</span></label>
            		<br>
            	<!-- <input id="Avocado" type="radio" name="favorites" /> -->
            	<label class="radio" for="Avocado">Avocado<span>1 medium</span></label>
            		<br>
            	<!-- <input id="Red Wine" type="radio" name="favorites" /> -->
            	<label class="radio" for="Red Wine">Red Wine<span>6 oz</span></label>
            </div>
          </form>
        </main>

        <?php include_once('../partials/footer.php'); ?>

    </body>
</html>
