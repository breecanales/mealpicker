<!DOCTYPE html>
<html lang="en">

		<?php include_once('../partials/head.php'); ?>

		<body class="nutrition page">

			<div class="block__title">
				<h2 class="block__subheading">Nutrition</h2>
				<?php include_once('../partials/logout.php'); ?>
				<h3 class="block__subsubhead">Macros</h3>
			</div>

				<?php //include_once('../partials/header.php'); ?>

        <main class="main" role="main">
        	<img class="pie_chart" src="../img/piechart.png" alt="Macros Piechart">
        	<table class="nutrition_table">
        		<thead>
        			<tr>
        				<th colspan="2"></th>
        				<th>Total</th>
        				<th>Goal</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
	        			<td><span class="blue"></span></td>
	        			<td>Carbohydrates (68g)</td>
	        			<td>16%</td>
	        			<td>20%</td>
	        		</tr>
	        		<tr>
	        			<td><span class="red"></span></td>
	        			<td>Fat (87g)</td>
	        			<td>45%</td>
	        			<td>35%</td>
	        		</tr>
	        		<tr>
	        			<td><span class="green"></span></td>
	        			<td>Protein (171g)</td>
	        			<td>39%</td>
	        			<td>45%</td>
	        		</tr>
        		</tbody>
        	</table>
        	<div class="block__copy nutrition">
          	<p>Nutrients Remaining</p>
          	<div class="nutrients_remaining">160<span>Carbs (g)</span></div>
          	<div class="nutrients_remaining">38<span>Fat (g)</span></div>
          	<div class="nutrients_remaining">70<span>Protein (g)</span></div>
          </div>
        </main>

        <?php include_once('../partials/footer.php'); ?>

    </body>
</html>
