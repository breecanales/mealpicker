<!DOCTYPE html>
<html lang="en">

		<?php include_once('../partials/head.php'); ?>

		<body class="profile page">

			<div class="block__title">
				<h2 class="block__subheading">Hello, Heidi!</h2>
				<div class="logout_app">
					<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><title>Logout</title><circle cx='256' cy='256' r='48'/><circle cx='256' cy='416' r='48'/><circle cx='256' cy='96' r='48'/></svg>
					<div class="profile_logout">
						<a href="../">Logout</a>
					</div>
				</div>
			</div>

				<?php //include_once('../partials/header.php'); ?>

        <main class="main" role="main">
        	<div class="profile_img">
        		<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><title>Profile Image</title><path d='M332.64,64.58C313.18,43.57,286,32,256,32c-30.16,0-57.43,11.5-76.8,32.38-19.58,21.11-29.12,49.8-26.88,80.78C156.76,206.28,203.27,256,256,256s99.16-49.71,103.67-110.82C361.94,114.48,352.34,85.85,332.64,64.58Z'/><path d='M432,480H80A31,31,0,0,1,55.8,468.87c-6.5-7.77-9.12-18.38-7.18-29.11C57.06,392.94,83.4,353.61,124.8,326c36.78-24.51,83.37-38,131.2-38s94.42,13.5,131.2,38c41.4,27.6,67.74,66.93,76.18,113.75,1.94,10.73-.68,21.34-7.18,29.11A31,31,0,0,1,432,480Z'/></svg>
        		<div class="change_img">
        			<svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><title>Change Profile Image</title><circle cx='256' cy='272' r='64'/><path d='M432,144H373c-3,0-6.72-1.94-9.62-5L337.44,98.06a15.52,15.52,0,0,0-1.37-1.85C327.11,85.76,315,80,302,80H210c-13,0-25.11,5.76-34.07,16.21a15.52,15.52,0,0,0-1.37,1.85l-25.94,41c-2.22,2.42-5.34,5-8.62,5v-8a16,16,0,0,0-16-16H100a16,16,0,0,0-16,16v8H80a48.05,48.05,0,0,0-48,48V384a48.05,48.05,0,0,0,48,48H432a48.05,48.05,0,0,0,48-48V192A48.05,48.05,0,0,0,432,144ZM256,368a96,96,0,1,1,96-96A96.11,96.11,0,0,1,256,368Z'/></svg>
        		</div>
        	</div>
        	<div class="block__copy">
        		<p>Heidi Holden</p>
        	</div>
        	<form id="sign-in-form" class="form" role="form">
                <div class="form__input">
                    <label class="label" for="name">Name</label>
                    <input id="name" type="text" name="name" placeholder="Name" />
                </div>
                <div class="form__input">
                    <label class="label" for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="Email" />
                </div>
                <div class="form__input">
                    <label class="label" for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Password" />
                </div>
                <div class="form__radio">
                	<input id="macros" type="radio" name="macros__calories" checked />
                	<label class="radio" for="macros">Use Macros</label>
                	<input id="calories" type="radio" name="macros__calories" />
                	<label class="radio" for="calories">Use Calories</label>
                </div>
                <div class="form__input">
                    <label class="label" for="submit">Update</label>
                    <button id="submit" class="button orange-dark" type="button"><a href="#">Update</a></button>
                </div>
            </form>
        </main>

        <?php include_once('../partials/footer.php'); ?>

    </body>
</html>
