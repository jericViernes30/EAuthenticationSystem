<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>E-Authentication System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="display: grid; place-items: center; min-height: 100vh;" class="bg-green-100">
    <div class="w-2/3 flex justify-center">
        <div class="w-full px-10 py-4 md:w-2/4 md:py-10 md:px-24 bg-white rounded-tl-3xl rounded-bl-3xl">
            <div class="flex items-center gap-1 mb-10">
                <img class="w-1/6" src="img/logo.png" alt="">
                <p class="font-bold">SECURE</p>
            </div>
            <div>
                <p class="text-xl font-bold">Welcome Back!</p>
                <p class="text-xs mb-10">Login to get information about your current employee stats.</p>
                <button class="flex items-center justify-center border rounded-3xl w-full py-2 text-xs font-semibold mb-4">
                    <svg viewBox="0 0 24 24" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                        <g transform="matrix(1, 0, 0, 1, 27.009001, -39.238998)">
                            <path fill="#4285F4" d="M -3.264 51.509 C -3.264 50.719 -3.334 49.969 -3.454 49.239 L -14.754 49.239 L -14.754 53.749 L -8.284 53.749 C -8.574 55.229 -9.424 56.479 -10.684 57.329 L -10.684 60.329 L -6.824 60.329 C -4.564 58.239 -3.264 55.159 -3.264 51.509 Z"/>
                            <path fill="#34A853" d="M -14.754 63.239 C -11.514 63.239 -8.804 62.159 -6.824 60.329 L -10.684 57.329 C -11.764 58.049 -13.134 58.489 -14.754 58.489 C -17.884 58.489 -20.534 56.379 -21.484 53.529 L -25.464 53.529 L -25.464 56.619 C -23.494 60.539 -19.444 63.239 -14.754 63.239 Z"/>
                            <path fill="#FBBC05" d="M -21.484 53.529 C -21.734 52.809 -21.864 52.039 -21.864 51.239 C -21.864 50.439 -21.724 49.669 -21.484 48.949 L -21.484 45.859 L -25.464 45.859 C -26.284 47.479 -26.754 49.299 -26.754 51.239 C -26.754 53.179 -26.284 54.999 -25.464 56.619 L -21.484 53.529 Z"/>
                            <path fill="#EA4335" d="M -14.754 43.989 C -12.984 43.989 -11.404 44.599 -10.154 45.789 L -6.734 42.369 C -8.804 40.429 -11.514 39.239 -14.754 39.239 C -19.444 39.239 -23.494 41.939 -25.464 45.859 L -21.484 48.949 C -20.534 46.099 -17.884 43.989 -14.754 43.989 Z"/>
                        </g>
                    </svg><span class="px-5">Sign in with Google</span>
                </button>
                
                
                <div class="flex items-center mb-4">
                    <div class="flex-grow bg bg-gray-300 h-1"></div>
                    <div class="flex-grow-0 mx-5 text-xs text-gray-500">OR</div>
                    <div class="flex-grow bg bg-gray-300 h-1"></div>
                </div>
                <form class="flex flex-col" action="home.php">
                    <input type="email" name="email" placeholder="example@gmail.com" class="w-full border rounded-3xl px-4 py-2 text-xs mb-3">
                    <input type="password" name="password" placeholder="Password" class="w-full border rounded-3xl px-4 py-2 text-xs mb-3">
                    <div class="w-full flex text-xs justify-between mb-5">
                        <div class="flex items-center gap-1">
                            <input type="checkbox" name="remember">
                            <label for="">Remember Me</label>
                        </div>
                        <div><a href="" class="text-blue-500 underline">Forgot Password?</a></div>
                    </div>
                    <button class="w-full py-2 mx-auto bg-green-300 rounded-3xl text-sm text-web-gray mb-1">Login</button>
                </form>
                <p class="text-center text-xs">Don't have an account yet? <a href="#" class="text-blue-500 underline">Create one!</a></p>
            </div>
        </div>
        <div class="hidden sm:block w-2/4 relative bg-green-300 rounded-tr-3xl rounded-br-3xl">
            <img class="w-full absolute -left-24 top-2/4 transform -translate-y-2/4 mt-8" src="img/hero.png" alt="Hero">
        </div>
    </div>
</body>
</html>