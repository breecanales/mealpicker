<!DOCTYPE html>
<html lang="en">

		<?php include_once('head.php'); ?>

		<body class="register">

				<?php include_once('header.php'); ?>

        <main class="main" role="main">
            <h2 class="block__subheading">Password Reset</h2>
            <form id="sign-in-form" class="form" role="form">
                <div class="form__input">
                    <label class="label" for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Password" />
                </div>
                <div class="helper__text">
                    <p>Enter a new password.</p>
                </div>
                <div class="form__input">
                    <label class="label" for="submit">Submit</label>
                    <button id="submit" class="button orange-dark" type="button"><a href="nutrition.php">Submit</a></button>
                </div>
            </form>
        </main>
    </body>

</html>
