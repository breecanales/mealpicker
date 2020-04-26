<!DOCTYPE html>
<html lang="en">

		<?php include_once('head.php'); ?>

		<body class="register">

				<?php include_once('header.php'); ?>

        <main class="main" role="main">
            <h2 class="block__subheading">Lost your password?</h2>
            <form id="sign-in-form" class="form" role="form">
                <div class="form__input">
                    <label class="label" for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="Email" />
                </div>
                <div class="helper__text">
                    <p>Enter your email address for a link to reset your password.</p>
                </div>
                <div class="form__input">
                    <label class="label" for="submit">Submit</label>
                    <button id="submit" class="button orange-dark" type="button"><a href="reset.php">Submit</a></button>
                </div>
            </form>
        </main>
    </body>

</html>
