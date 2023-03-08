<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              laravel: '#ef3b2d',
            },
          },
        },
      }
  </script>
  <title>PHP Movies | Find Actors & Movies</title>
</head>

<body class="mb-48">
  <nav class="flex justify-between items-center mb-4">
    <a href="/"><img class="w-24" src="{{asset('images/PMlogo.png')}}" alt="" class="logo" /></a>
    <ul class="flex space-x-6 mr-6 text-lg">

      <li>
        <a href="/" class="hover:text-laravel"><i class="fa-solid"></i> Actors</a>
      </li>
      <li>
        <a href="/movies/" class="hover:text-laravel"><i class="fa-solid"></i> Movies</a>
      </li>
      <li>
        <a href="/starwars/" class="hover:text-laravel"><i class="fa-solid"></i> Star Wars</a>
      </li>

    </ul>
  </nav>

  <main>
    {{$slot}}
  </main>
  <footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

  </footer>

</body>

</html>