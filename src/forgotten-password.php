<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <title>Supportlyz - Forgotten Password</title>
</head>

<body>
  <main>
    <!-- Forgotten -->
    <div class="flex items-center h-screen">
      <!-- Left -->
      <div class="relative flex items-center justify-center w-2/4 h-full bg-tertiary-900">
        <!-- shape Animation -->
        <div class="absolute h-[100%] overflow-hidden w-full">
          <span class="absolute top-0 w-[1600px] h-100% animate-spin-slow -left-[500px] z-10">
            <img src="assets/images/shape-animation.svg" alt="animation" />
          </span>
        </div>

        <div class="absolute right-0 z-20 flex justify-center w-full top-12">
          <img src="assets/images/logo-white.svg" alt="Supportlyz Logo" class="w-80 h-14" />
        </div>
        <div class="relative z-40 flex flex-col items-center w-2/4">
          <h1 class="mb-8 text-6xl font-light text-center text-white">Don't have an <b class="font-medium">account?</b></h1>
          <a href="register.php">
            <button class="button-outline-white">Create a Free Account</button>
          </a>
        </div>
      </div>

      <!-- Right -->
      <div class="relative flex items-center justify-center w-2/4 h-full bg-geyser-100">
        <!-- Shape -->
        <div class="absolute top-0 h-screen -left-[8rem] md:w-[25%] 3xl:w-[30%]">
          <div class="w-full h-screen bg-center bg-no-repeat bg-cover" style="background-image: url('assets/images/shape-auth.svg')"></div>
        </div>

        <div class="absolute right-10 top-12">
          <!-- Language -->
          <?php include 'components/common/language.php'; ?>
        </div>

        <!-- Form Login -->
        <div class="relative z-20 flex items-start justify-center w-3/5">
          <div class="flex flex-col justify-center w-full text-center">
            <span class="relative text-8xl text-secondary-900">
              <i class="icon-user"></i>
            </span>
            <h1 class="mb-8 text-3xl text-penitentiary-900">Forgotten Password</h1>

            <div class="mb-4 input-container">
              <span class="absolute top-0 left-0 flex items-center justify-center h-12 text-xl bg-white w-14 text-secondary-900 after:content-[''] after:absolute after:top-2 after:right-1 after:w-px after:h-8 after:z-20 after:bg-tertiary-100">
                <i class="icon-envelope"></i>
              </span>
              <input type="text" class="input" placeholder="Email" value="jonhdoe@gmail.com">
            </div>
            <a href="dashboard.php">
              <button class="mb-5 button-secondary">Send Establish Instructions</button>
            </a>
            <div class="flex items-center justify-center gap-4">
              <a href="index.php" class="flex items-center justify-center gap-2 text-sm text-center transition cursor-pointer text-penitentiary-900 hover:text-secondary-900">
                <span class="text-lg text-secondary-900">
                  <i class="icon-user"></i>
                </span>
                <p>
                  Sign In
                </p>
              </a>
              <a href="register.php" class="flex items-center justify-center gap-2 text-sm text-center transition cursor-pointer text-penitentiary-900 hover:text-secondary-900">
                <span class="text-lg text-secondary-900">
                  <i class="icon-signup"></i>
                </span>
                <p>
                  Sign Up
                </p>
              </a>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <div class="absolute bottom-0 left-0 flex items-center justify-between w-full px-10 py-8">
          <p class="flex items-center gap-3 text-penitentiary-900">
            <img src="assets/images/logo-isotipe.svg" alt="isotipe" class="w-5 h-5">
            <b class="font-medium">Supportlyz</b> © All rights reserved
          </p>
          <div class="flex items-center gap-4">
            <a href="#" class="flex items-center gap-1 text-xs transition text-penitentiary-500 hover:text-secondary-900">
              Privacy Policy
              <i class="text-base icon-link text-secondary-900"></i>
            </a>
            <a href="#" class="flex items-center gap-1 text-xs transition text-penitentiary-500 hover:text-secondary-900">
              Terms and Conditions
              <i class="text-base icon-link text-secondary-900"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="assets/js/scripts.js"></script>
</body>

</html>
