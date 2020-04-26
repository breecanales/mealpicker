<!DOCTYPE html>
<html lang="en">

		<?php include_once('head.php'); ?>

		<body class="home">

				<?php include_once('header.php'); ?>

        <main class="main" role="main">
            <h2 class="block__subheading">Sign In</h2>
            <form id="sign-in-form" class="form" role="form">
                <div class="form__input">
                    <label class="label" for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="Email" />
                </div>
                <div class="form__input">
                    <label class="label" for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Password" />
                </div>
                <div class="helper__text">
                    <a href="#">Forgot username<br />or password?</a>
                </div>
                <div class="form__input">
                    <label class="label" for="sign-in">Sign In</label>
                    <button id="sign-in" class="button orange-light" type="button"><a href="./index.php">Sign In</a></button>
                </div>
            </form>
            <aside class="create__profile">
                <div class="helper__text"><p>New to Meal Picker?</p></div>
                <label class="label" for="create-profile">Create Profile</label>
                <button id="create-profile" class="button orange-dark"><a href="./register.php">Create Profile</a></button>
            </aside>
        </main>
    </body>

</html>
