<!DOCTYPE html>
<html lang="en">

		<?php include_once('../partials/head.php'); ?>

		<body class="favorites page">

			<div class="block__title">
				<h2 class="block__subheading">Favorite Ingredients</h2>
				<?php include_once('../partials/logout.php'); ?>
			</div>

				<?php //include_once('../partials/header.php'); ?>

        <main class="main" role="main">
        	<div class="block__copy">
          	<p>Find your favorite foods!</p>
          </div>
          <form id="favorites-form" class="form" role="form">
            <div class="form__input">
                <label class="label" for="search">Search for Food</label>
                <input id="search" type="search" name="search" placeholder="Search for a food" />
            </div>
            <div class="form__radio">
            	<input id="Whole Wheat English Muffin" type="radio" name="favorites" checked />
            	<label class="radio" for="Whole Wheat English Muffin">Whole Wheat English Muffin<span>Trader Joes, 1 muffin</span></label>
            		<br>
            	<input id="Large Egg Nw" type="radio" name="favorites" />
            	<label class="radio" for="Large Egg Nw">Large Egg Nw<span>Dutch Farms, 1 egg (50g)</span></label>
            		<br>
            	<input id="Natural Choice Honey Deli Ham" type="radio" name="favorites" />
            	<label class="radio" for="Natural Choice Honey Deli Ham">Natural Choice Honey Deli Ham<span>Hormel, 2 slices</span></label>
            		<br>
            	<input id="Colby Jack Slice" type="radio" name="favorites" />
            	<label class="radio" for="Colby Jack Slice">Colby Jack Slice<span>Sargento, 1 slice</span></label>
            		<br>
            	<input id="Hellman's Light" type="radio" name="favorites" />
            	<label class="radio" for="Hellman's Light">Hellman's Light<span>Mayo, 15 grams</span></label>
            		<br>
            	<input id="Raw Almond Butter" type="radio" name="favorites" />
            	<label class="radio" for="Raw Almond Butter">Raw Almond Butter<span>1 tbsp</span></label>
            		<br>
            	<input id="Honeycrisp Apple" type="radio" name="favorites" />
            	<label class="radio" for="Honeycrisp Apple">Honeycrisp Apple<span>1 medium apple</span></label>
            		<br>
            	<input id="Avocado" type="radio" name="favorites" />
            	<label class="radio" for="Avocado">Avocado<span>1 medium</span></label>
            		<br>
            	<input id="Red Wine" type="radio" name="favorites" />
            	<label class="radio" for="Red Wine">Red Wine<span>6 oz</span></label>
            </div>
            <div class="form__input favorites">
                <label class="label" for="add-favorites">Add Favorites</label>
                <button id="add-favorites" class="button orange-light" type="button"><a href="../options/">Add Favorite</a></button>
            </div>
          </form>
        </main>

        <?php include_once('../partials/footer.php'); ?>

    </body>
</html>
