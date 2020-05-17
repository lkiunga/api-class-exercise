<!DOCTYPE html>
<html>

  <head>
    <title>Greeter</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  </head>

  <body>

    <?php if( $_GET['greet'] == "yes"): ?>

      <div class="flex mx-auto justify-center">
        <img class="w-1/4" src="greeter.gif" alt="">
      </div>

      <div class="flex mx-auto rounded w-1/4 items-center justify-center bg-blue-500 text-white text-lg text-center font-bold px-4 py-3 top-3" role="alert">

        <svg class=" fill-current w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </svg>
        <p><?php //echo "Hello ".$_GET['msg']; ?></p>

        <p class="text-center"><?="Hello ".$_GET['msg'];?></p>

      </div>

    <?php endif; ?>

    <div class="flex">

      <div class="mx-auto py-6">
        <form action="process.php" method="GET" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="mb-12">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="full-name">
              Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="full-name" name="full-name" type="text" required placeholder="Please enter your full name" pattern="[A-Za-z ]{1,32}" title="Letters,only example {fname lname}">
          </div>

          <div class="mb-12">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Age
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="age" name="age" type="number" required placeholder="Please enter your age">
          </div>

          <div class="mb-12">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
              Gender
            </label>
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="gender" name="gender" required>
                <option value="">Please select</option>
                <option value="f">Female</option>
                <option value="m">Male</option>
            </select>
          </div>

          <div class="flex items-center justify-between">
            <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline inline-flex" type="submit">
              <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path class="heroicon-ui" d="M17.62 10H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H8.5c-1.2 0-2.3-.72-2.74-1.79l-3.5-7-.03-.06A3 3 0 0 1 5 9h5V4c0-1.1.9-2 2-2h1.62l4 8zM16 11.24L12.38 4H12v7H5a1 1 0 0 0-.93 1.36l3.5 7.02a1 1 0 0 0 .93.62H16v-8.76zm2 .76v8h2v-8h-2z"/>
              </svg>
              <span>Salimia Me</span>
            </button>

          </div>
        </form>
      </div>

    </div>
  </body>

</html>
