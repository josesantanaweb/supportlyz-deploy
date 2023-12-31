<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <title>Supportlyz - Register</title>
</head>

<body>
  <main>
    <!-- Register -->
    <div class="flex items-center h-screen">
      <!-- Left -->
      <div class="relative flex items-center justify-center w-2/4 h-full overflow-hidden bg-tertiary-900">
        <!-- shape Animation -->
        <div class="absolute h-[100%] overflow-hidden w-full">
          <span class="absolute top-0 w-[1600px] h-100% animate-spin-slow -left-[500px] z-10">
            <img src="assets/images/shape-animation.svg" alt="animation" />
          </span>
        </div>

        <div class="absolute right-0 z-20 flex justify-center w-full top-12">
          <img src="assets/images/logo-white.svg" alt="Supportlyz Logo" class="w-80 h-14" />
        </div>
        <div class="relative z-40 flex flex-col w-3/5">
          <h1 class="mb-8 text-6xl font-light text-white"><b class="font-medium">Grow</b> with Faster Customer Service</h1>
          <p class="mb-4 text-2xl font-light text-white">Maximize your support capacity with automation and AI</p>
          <ul>
            <li class="flex items-center gap-3 mb-4 text-white last:mb-0">
              <span class="flex items-center justify-center w-6 h-6 rounded-full bg-secondary-900">
                <i class="-rotate-45 icon-arrow"></i>
              </span>
              <p class="text-base">Solve up to 70% of customer problems with AI</p>
            </li>
            <li class="flex items-center gap-3 mb-4 text-white last:mb-0">
              <span class="flex items-center justify-center w-6 h-6 rounded-full bg-secondary-900">
                <i class="-rotate-45 icon-arrow"></i>
              </span>
              <p class="text-base">Engage your customers on all messaging channels</p>
            </li>
            <li class="flex items-center gap-3 mb-4 text-white last:mb-0">
              <span class="flex items-center justify-center w-6 h-6 rounded-full bg-secondary-900">
                <i class="-rotate-45 icon-arrow"></i>
              </span>
              <p class="text-base">Provide hands-on support with live chat and helpdesk tools</p>
            </li>
          </ul>
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
            <h1 class="mb-8 text-3xl text-penitentiary-900">Create a free account</h1>

            <div class="flex items-center gap-4">
              <button class="w-1/2 h-12 button-tertiary-light">
                <span class="flex items-center justify-center text-lg rounded-fulw-7 h-7">
                  <i class="icon-card"></i>
                </span>
                No credit card required
              </button>
            </div>

            <div class="or-line">
              <span class="relative z-20">or</span>
            </div>

            <div class="mb-4 input-container">
              <span class="absolute top-0 left-0 flex items-center justify-center h-12 text-xl bg-white w-14 text-secondary-900 after:content-[''] after:absolute after:top-2 after:right-1 after:w-px after:h-8 after:z-20 after:bg-tertiary-100">
                <i class="icon-envelope"></i>
              </span>

              <input type="text" class="input" placeholder="Email" value="jonhdoe@gmail.com">
            </div>
            <div class="mb-4 input-container">
              <span class="absolute top-0 left-0 flex items-center justify-center h-12 text-xl bg-white w-14 text-secondary-900 after:content-[''] after:absolute after:top-2 after:right-1 after:w-px after:h-8 after:z-20 after:bg-tertiary-100">
                <i class="icon-lock"></i>
              </span>
              <input type="password" class="input" placeholder="Password" value="12345">
              <span class="absolute top-0 right-0 flex items-center justify-center h-12 text-xl bg-white w-14 text-secondary-900">
                <i class="icon-password"></i>
              </span>
            </div>
            <div class="mb-4 input-container">
              <span class="absolute top-0 left-0 flex items-center justify-center h-12 text-xl bg-white w-14 text-secondary-900 after:content-[''] after:absolute after:top-2 after:right-1 after:w-px after:h-8 after:z-20 after:bg-tertiary-100">
                <i class="icon-hyperlink"></i>
              </span>
              <input type="text" class="input" placeholder="Websiste" value="www.supportlyz.com">
            </div>

            <div class="inline-flex items-center">
              <div class="relative flex items-center p-3 rounded-full cursor-pointer">
                <input type="checkbox" class="checkbox peer" />
                <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                </span>
              </div>
              <label class="mt-px cursor-pointer select-none" htmlFor="terms">
                <p class="pl-2 text-sm text-left"><span class="text-secondary-900">I accept the</span> Terms and Conditions <span class="text-secondary-900">and</span> Privacy Policy <span class="text-secondary-900">of Supportlyz</span></p>
              </label>
            </div>

            <a href="step-1.php">
              <button class="mb-5 button-secondary">Get Started for Free</button>
            </a>
            <p class="text-penitentiary-900">
              You can also register with:
            </p>
            <div class="relative flex items-center justify-center gap-5 my-5">
              <button class="button-icon-outline">
                <i class="text-base icon-gmail"></i>
              </button>
              <button class="button-icon-outline">
                <i class="text-base icon-shopify"></i>
              </button>
            </div>
            <a href="index.php" class="flex items-center justify-center gap-2 text-sm text-center transition cursor-pointer text-penitentiary-900 hover:text-secondary-900">
              <span class="text-lg text-secondary-900">
                <i class="icon-user"></i>
              </span>
              <p>
                Already have an account? Sign In
              </p>
            </a>
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
