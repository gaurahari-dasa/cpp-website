<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sri Chanchalapathi Dasa</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">
  <!-- Header -->
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
      <div class="text-center flex-1">
        <h1 class="text-lg font-semibold text-blue-900">Sri Chanchalapathi Dasa</h1>
        <p class="text-xs text-blue-700">In the service of Srila Prabhupada</p>
      </div>
      <nav class="hidden md:flex space-x-6">
        <a href="#" class="text-blue-700 hover:underline">Home</a>
        <a href="#" class="text-blue-700 hover:underline">About</a>
        <a href="#" class="text-blue-700 hover:underline">Contributions</a>
        <a href="#" class="text-blue-700 hover:underline">Highlights</a>
        <a href="#" class="text-blue-700 hover:underline">Contact</a>
      </nav>
      <button class="md:hidden text-blue-700" aria-label="Open menu">
        <!-- Hamburger icon -->
        <svg class="w-6 h-6" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/></svg>
      </button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative bg-blue-900 text-white">
    <img src="content/CPP template - About CPP.jpg" alt="Hero" class="w-full h-64 object-cover opacity-70">
    <div class="absolute inset-0 flex flex-col items-center justify-center">
      <div class="bg-white bg-opacity-80 rounded-lg p-4 shadow-lg text-center">
        <h2 class="text-xl font-bold text-blue-900 mb-2">The Official Website of</h2>
        <h3 class="text-2xl font-extrabold text-blue-900">Sri Chanchalapathi Dasa</h3>
        <p class="mt-2 text-sm text-blue-700">In the Service of His Divine Grace A.C. Bhaktivedanta Swami Prabhupada</p>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="max-w-5xl mx-auto px-4 py-10 grid md:grid-cols-2 gap-8 items-center">
    <img src="content/CPP template - About CPP.jpg" alt="About" class="rounded-lg shadow-md w-full h-64 object-cover">
    <div>
      <h2 class="text-xl font-bold mb-2 text-blue-900">About</h2>
      <p class="mb-4 text-gray-700">
        Sri Chanchalapathi Dasa came across the teachings of Srila Prabhupada while pursuing his studies at the prestigious Indian Institute of Science and became interested in his mission. As he gained a deeper understanding of Srila Prabhupada’s philosophy and ideals, he dedicated himself fully to the Krishna consciousness movement, joining the ISKCON Bangalore in 1984 and has been working tirelessly for the betterment of humanity since then.
      </p>
      <a href="#" class="inline-block px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Read More</a>
    </div>
  </section>

  <!-- Contributions Section -->
  <section class="bg-blue-900 py-10">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-xl font-bold text-white mb-6">Contributions</h2>
      <div class="bg-white rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center">
        <img src="content/CPP template - Akshaya Patra.jpg" alt="Akshaya Patra" class="w-full md:w-48 h-32 object-cover rounded mb-4 md:mb-0 md:mr-6">
        <div>
          <h3 class="text-lg font-semibold text-blue-900 mb-2">Akshaya Patra Foundation</h3>
          <p class="text-gray-700 mb-4">
            The Akshaya Patra Foundation is established with a mission to address the problem of classroom hunger. It provides nutritious, hygienic food to millions of children as part of the world’s largest mid-day meal program.
          </p>
          <a href="#" class="inline-block px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Highlights Section -->
  <section class="bg-blue-100 py-10">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-xl font-bold text-blue-900 mb-6">Highlights</h2>
      <div class="bg-white rounded-lg shadow-md p-6">
        <p class="text-gray-700 mb-4">
          Key moments from core initiatives and impactful projects focused towards community upliftment, social welfare programmes and cultural heritage preservation.
        </p>
        <a href="#" class="inline-block px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Read More</a>
      </div>
    </div>
  </section>

  <!-- Media Section -->
  <section class="py-10">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-xl font-bold text-blue-900 mb-6">Media</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
          <img src="content/CPP template - articles.jpg" alt="Gita Jayanti" class="w-full h-32 object-cover rounded mb-4">
          <h3 class="text-lg font-semibold text-blue-900 mb-2">Gita Jayanti 2024</h3>
          <p class="text-gray-700 mb-4">Commemorating the timeless wisdom of the Bhagavad Gita, inspiring millions to embrace spiritual values and harmony.</p>
          <a href="#" class="inline-block px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Read More</a>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
          <img src="content/CPP template - podcasts-1a.jpg" alt="Meditation" class="w-full h-32 object-cover rounded mb-4">
          <h3 class="text-lg font-semibold text-blue-900 mb-2">The role of meditation in mental health</h3>
          <p class="text-gray-700 mb-4">Exploring the importance of meditation and its positive impact on mental health and well-being.</p>
          <a href="#" class="inline-block px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Read More</a>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
          <img src="content/CPP template - highlights.jpg" alt="Goal of Life" class="w-full h-32 object-cover rounded mb-4">
          <h3 class="text-lg font-semibold text-blue-900 mb-2">What is the goal of life?</h3>
          <p class="text-gray-700 mb-4">A thought-provoking session on the deeper meaning and purpose of life from a spiritual perspective.</p>
          <a href="#" class="inline-block px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Events Section -->
  <section class="bg-blue-900 py-10">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-xl font-bold text-white mb-6">Events</h2>
      <div class="bg-white rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center">
        <img src="content/CPP template - event listing.jpg" alt="Event" class="w-full md:w-48 h-32 object-cover rounded mb-4 md:mb-0 md:mr-6">
        <div>
          <h3 class="text-lg font-semibold text-blue-900 mb-2">Sri Chanchalapathi Dasa addressing the audience at the UN Trusteeship Council Chamber</h3>
          <p class="text-gray-700 mb-4">
            Marking the pivotal steps through vision, dedication and commitment to a great mission towards humanity and progress by advocating classroom hunger eradication and improving the quality of life.
          </p>
          <a href="#" class="inline-block px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Dignitaries Section -->
  <section class="bg-blue-100 py-10">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-xl font-bold text-blue-900 mb-6">Dignitaries</h2>
      <div class="bg-white rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center">
        <img src="content/CPP template - digniteries.jpg" alt="Dignitaries" class="w-full md:w-48 h-32 object-cover rounded mb-4 md:mb-0 md:mr-6">
        <div>
          <p class="text-gray-700 mb-4">
            Featuring eminent leaders, scholars and visionaries from across the world coming together for mutual understanding, harmony, and the universal message of the movement.
          </p>
          <a href="#" class="inline-block px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Podcasts Section -->
  <section class="py-10">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-xl font-bold text-blue-900 mb-6">Podcasts</h2>
      <div class="bg-white rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center">
        <img src="content/CPP template - podcasts-1a.jpg" alt="Podcasts" class="w-full md:w-48 h-32 object-cover rounded mb-4 md:mb-0 md:mr-6">
        <div>
          <p class="text-gray-700 mb-4">
            Through engaging and insightful discussions, these conversations explore the guiding principles of spiritual wisdom and the ongoing mission and legacy of a person.
          </p>
          <a href="#" class="inline-block px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white border-t py-6 mt-10">
    <div class="max-w-5xl mx-auto px-4 text-center">
      <h3 class="text-blue-900 font-semibold mb-2">Sri Chanchalapathi Dasa</h3>
      <p class="text-xs text-gray-600 mb-2">In the service of Srila Prabhupada</p>
      <p class="text-xs text-gray-600">contact@iskcon-group.org</p>
      <p class="text-xs text-gray-600">Hare Krishna Hill, West of Chord Road, Rajajinagar, Bengaluru, Karnataka, India – 560 010</p>
    </div>
  </footer>
</body>
</html>