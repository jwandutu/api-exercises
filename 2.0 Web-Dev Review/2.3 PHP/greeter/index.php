<!DOCTYPE html>
<html>

  <head>
<<<<<<< HEAD
     <title>Greeter</title>
     <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  </head>

 <body>

   <?php if($_GET['greet'] == "yes"): ?>

       <div class="flex mx-auto justify-centre">
        <img class="w-1/4" src="greeter.gif" alt="">
      </div>

      <div class="flex mx-auto rounded w-1/4 items-centre justify-centre bg-blue-500 text-white text-ig text-centre font-bold px-4 py-3 top-3" role="alert">
          <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="24" height="24">
            <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/>
          </svg>
          <p><?php //echo "Hello".$_GET['msg']; ?></p>
          <p class="text-centre"><?="Hello".$_GET['msg']; ?></p>
     </div>

 <?php endif; ?>


<br/>

   <div class="w-full max-w-xs">
  <form action="process.php" method="GET" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-12">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="full-name">
        Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="full-name" name="full-name" type="text" required placeholder="Please enter your full name" pattern="[A-Za-z ]{1,32}" title="Invalid name provided">
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
          <option value="M">Male</option>
     </select>
    </div>


    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Salimia Me
      </button>

    </div>
  </form>
</div>



 </body>


=======
    <title>Greeter</title>
    <style media="screen">
      .toasty-greeter{
        width : 35%;
      }
      .toastify-avatar{
        width: 50% !important;
        height: 50% !important;
        float:right;
      }

    </style>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Toastify -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  </head>

  <body>

    <div class="flex">

      <div class="mx-auto px-4 mx-4 py-6 w-2/3">
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

      <div class="mx-auto py-6 w-1/3">
        <table class="text-left w-2/3 border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
         <thead>
           <tr>
             <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
             <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Gender</th>
           </tr>
         </thead>

          <tbody>
            <tr class="hover:bg-grey-lighter">
              <td colspan="2">None</td>
            </tr>
          </tbody>
      </div>

    </div>
    <!-- Toastify JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script type="text/javascript">

    <?php
      if( $_GET['greet'] == "yes"):
     ?>
        //Toasts
        Toastify({
          text: "<?="Hello ".$_GET['msg'];?>",
          duration: 10000,
          destination: "#",
          newWindow: false,
          close: false,
          gravity: "top", // `top` or `bottom`
          position: 'left', // `left`, `center` or `right`
          backgroundColor: "linear-gradient(90deg, rgba(2,0,36,0) 0%, rgba(9,9,121,1) 6%, rgba(255,255,255,1) 50%)",
          stopOnFocus: true, // Prevents dismissing of toast on hover
          avatar: 'greeter2.gif',
          className: 'toasty-greeter',
          onClick: function(){} // Callback after click
        }).showToast();
      <?php endif; ?>

  </script>
  </body>
>>>>>>> b2c72d8b391d5160f6616ff988e5264b46865c83

</html>
