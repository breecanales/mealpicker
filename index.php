<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="robots" content="noindex, nofollow">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Meal Picker</title>
        <meta name="description" content="Meal Picker App">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <!-- <link rel="shortcut icon" href="favicon.ico"> -->
    </head>

    <body class="home">

        <header class="header animated rubberBand" role="header">
            <svg class="block__logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="50 275 600 600"><defs><filter id="luminosity-noclip" x="-165.28" y="-8792" width="1133.86" height="32766" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask" x="-165.28" y="-8792" width="1133.86" height="32766" maskUnits="userSpaceOnUse"><g class="cls-17"/></mask><radialGradient id="radial-gradient" cx="-462.49" cy="567.32" r="95.67" gradientTransform="translate(2616.93 538.51) scale(4.79 0.53)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#666"/><stop offset="0.05" stop-color="#898989"/><stop offset="0.11" stop-color="#a8a8a8"/><stop offset="0.17" stop-color="#c4c4c4"/><stop offset="0.25" stop-color="#dadada"/><stop offset="0.33" stop-color="#ebebeb"/><stop offset="0.44" stop-color="#f6f6f6"/><stop offset="0.59" stop-color="#fdfdfd"/><stop offset="1" stop-color="#fff"/></radialGradient><filter id="luminosity-noclip-2" x="-165.28" y="805.55" width="1133.86" height="69.78" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-color="#fff" result="bg"/><feBlend in="SourceGraphic" in2="bg"/></filter><mask id="mask-2" x="-165.28" y="805.55" width="1133.86" height="69.78" maskUnits="userSpaceOnUse"><g class="cls-1"><path class="cls-2" d="M968.58,840.44c0,19.27-253.82,34.89-566.93,34.89s-566.93-15.62-566.93-34.89,253.82-34.89,566.93-34.89S968.58,821.17,968.58,840.44Z"/></g></mask><radialGradient id="radial-gradient-2" cx="-462.49" cy="567.32" r="95.67" gradientTransform="translate(2616.93 538.51) scale(4.79 0.53)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#7f7367"/><stop offset="0.05" stop-color="#9c9289"/><stop offset="0.11" stop-color="#b6afa8"/><stop offset="0.17" stop-color="#cdc8c4"/><stop offset="0.25" stop-color="#e0ddda"/><stop offset="0.33" stop-color="#eeeceb"/><stop offset="0.44" stop-color="#f8f7f6"/><stop offset="0.59" stop-color="#fdfdfd"/><stop offset="1" stop-color="#fff"/></radialGradient><clipPath id="clip-path"><path class="cls-3" d="M584.39,451.06c-16.17-114.13-117.45-76.9-192.75-50.34-74.66,26.33-195.81,68.52-197.34,152C192.77,636.65,313.94,708.59,379.08,743c61.08,32.21,135.68,47.29,170.92-26C579.37,655.8,589.08,484.2,584.39,451.06Z"/></clipPath></defs><g class="cls-4"><g id="Layer_1" data-name="Layer 1"><g class="cls-5"><path class="cls-6" d="M968.58,840.44c0,19.27-253.82,34.89-566.93,34.89s-566.93-15.62-566.93-34.89,253.82-34.89,566.93-34.89S968.58,821.17,968.58,840.44Z"/></g><g class="cls-7"><path class="cls-8" d="M176.67,348.7c45.93-34.64,107.49-76.31,169.74-40S454.89,352.34,529.22,334c37.58-9.3,56.46-27.34,76.38-52.94C616,300,629.55,318,639.13,337.14c10.22,20.45,10.51,43.19,21.37,63.23,8.32,15.33,37.72,30.4,36.5,47.18-2.63,36.39-115.89,70.67-147.74,83.87C494,554.33,437.6,577.76,378.65,594.63c-50-59.77-110-115.36-168.14-171.08-12.61-12.09-22.44-21.21-29-37.25Z"/><path class="cls-9" d="M175.47,365.92c45.94-34.65,107.49-76.31,169.74-40S453.7,369.56,528,351.17c37.57-9.3,56.46-27.34,76.37-52.94,10.4,18.94,24,36.94,33.53,56.12,10.22,20.46,10.52,43.19,21.38,63.23,8.32,15.33,37.71,30.41,36.5,47.19-2.64,36.39-115.9,70.66-147.74,83.87C492.8,571.55,436.41,595,377.45,611.84c-50-59.77-110-115.35-168.13-171.07-12.61-12.1-22.44-21.21-29-37.25Z"/><path class="cls-10" d="M149.35,457.93c45.93-34.64,107.49-76.31,169.73-40s108.5,43.68,182.82,25.28c37.58-9.3,56.46-27.33,76.38-52.94,10.4,18.95,24,36.95,33.53,56.13,10.21,20.46,10.51,43.19,21.38,63.23,8.31,15.33,37.71,30.41,36.49,47.18-2.64,36.39-115.9,70.67-147.74,83.87C466.68,663.56,410.28,687,351.33,703.86c-50-59.77-110-115.36-168.14-171.08-12.61-12.09-22.43-21.2-29-37.25Z"/><path class="cls-11" d="M627.48,520.71C577.16,487.54,508.67,471.89,451.24,510S326.15,527.14,274,512.42c-37.8-10.68-59.88-25.56-83.07-50.5-7.93,19.23-20,50.72-27.11,70.15-7.55,20.73-4.9,43.43-13.16,63.77-6.31,15.55-33.7,31.5-30.31,48.2,7.34,36.24,124.81,67,158.3,79.18,58.12,21.18,117.43,42.83,178.45,57.86,42.17-61.19,94.89-118.5,145.67-175.89,11-12.45,19.64-21.85,24.12-38.06Z"/><path class="cls-12" d="M615.59,545.4c-53.75-29.52-105-37.76-157.7,4.42s-96.27,49.86-174.12,39.29c-39.36-5.34-62.37-21.22-88.23-44.47-5.69,19.77-14.73,38.94-19.54,58.86-5.15,21.24.07,43.73-5.82,64.63-4.51,16-29.89,33.88-24.63,50.32,11.4,35.67,131.55,57.94,166.19,67.73,60.12,17,121.47,34.35,183.78,45C530.43,767,576.28,706,620.18,645c9.53-13.23,17-23.24,19.64-39.75Z"/><path class="cls-13" d="M668.36,628.22c-58.33-32.59-131.59-54.14-178.8-32.16S354.43,723.94,228.29,718.49,168,821.91,168,821.91L324.4,916.2l423.38-31.05Z"/><path class="cls-14" d="M666.74,725.87c-50-40.53-117.25-72.5-169.1-58.1S333.86,772.41,210.49,748.24s-84.05,91.94-84.05,91.94L258.73,955.59l425.75,32.95Z"/><path class="cls-15" d="M450.43,455.89c-2.37,2.11,1.38,5.7,1.38,5.7l75.82,77.15a4,4,0,0,1,.75.67c1.71,1.92,1.32,5.05-.88,7s-5.21,1.94-6.93.14l-.07.06-73.65-76.52s-5.07-6.55-8.55-3.45c-2.81,2.51,2.76,8.27,2.76,8.27l70.15,77.94,0,0,0,0,0,0a4.37,4.37,0,0,1,.44.42,5.27,5.27,0,1,1-7.87,7,5.6,5.6,0,0,1-.36-.49l-.05,0,0,0,0,0-69-79s-5-6.23-7.88-3.73c-3.49,3.08,2.41,8.9,2.41,8.9l67.12,82.3-.06.05a5,5,0,0,1-1,6.88c-2.2,1.94-5.36,2-7.07,0a4.17,4.17,0,0,1-.56-.83L419.72,490s-3.11-4.17-5.49-2.06c-2.53,2.24.38,6,.38,6l65.78,100.61.09-.07c9.88,14.79,34.73,14.16,50.2,4.24L685.27,786.92h0c5.47,3.65,14.73,2,22.32-4.37l0,0c7.21-6.78,10-15.79,7-21.66h0L546.38,584.87c11.44-14,13.52-37.45,1.89-50.43l.08-.07-92-77.38S453,453.64,450.43,455.89Z"/><path class="cls-15" d="M389.14,535.5c-1.57-23-11.4-38.18-22.14-40.91H367l-.05,0h0c-10.64-2.7-26.63,5.95-39,25.39-12.68,20-28.22,45-33,66.37-6.76,30.22,7.35,47.26,24.18,53.82L250.4,873.65h0c0,6.57,6.66,13.28,16.16,16v0c9.65,2.15,18.69-.59,21.87-6.35h0l51-238c17.94,2.31,38.54-5.9,47-35.74C392.46,588.55,390.76,559.11,389.14,535.5Z"/></g><path class="cls-11" d="M467.67,339.39a11.75,11.75,0,1,1-10.91-12.53A11.76,11.76,0,0,1,467.67,339.39Z"/><path class="cls-10" d="M195.8,689.45a9.12,9.12,0,1,1-8.47-9.72A9.12,9.12,0,0,1,195.8,689.45Z"/><path class="cls-9" d="M612.87,315.59a22,22,0,1,1-20.46-23.51A22,22,0,0,1,612.87,315.59Z"/><path class="cls-13" d="M157.67,487.89a16.39,16.39,0,1,1-15.22-17.49A16.4,16.4,0,0,1,157.67,487.89Z"/><path class="cls-11" d="M152.23,616.65a32.42,32.42,0,1,1-30.1-34.58A32.42,32.42,0,0,1,152.23,616.65Z"/></g></g></svg>
            <h1 class="block__heading">Meal<br />Picker</h1>
        </header>

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
                    <a href="#">Forgot username or password?</a>
                </div>
                <div class="form__input">
                    <label class="label" for="sign-in">Sign In</label>
                    <button id="sign-in" class="button orange-light" type="button">Sign In</button>
                </div>
            </form>
            <aside class="create__profile">
                <div class="helper__text"><p>New to Meal Picker?</p></div>
                <label class="label" for="create-profile">Create Profile</label>
                <button id="create-profile" class="button orange-dark"><a href="#">Create Profile</a></button>
            </aside>
        </main>
    </body>

</html>
