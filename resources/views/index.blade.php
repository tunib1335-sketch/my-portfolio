<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Portfolio</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
  <header>
    <h1>Itti Samur Tunib</h1>
    <p>Web Developer | Designer | Programmer | Researcher</p>
  </header>

@if(session('success'))
    <p style="color:green;font-weight:bold">{{ session('success') }}</p>
@endif

{{-- Show uploaded image --}}
@if(session('image'))
    <img src="{{ asset('storage/' . session('image')) }}" class="profile-img" alt="Profile">
@endif

<form action="{{ route('upload.profile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="profile_image" required>
    <button type="submit" class="upload-btn">Upload Profile Photo</button>
</form>

  <nav>
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>

  <section id="about" class="section">
    <h2>About Me</h2>
    <p>Hello! I'm a aspiring developer who enjoys building responsive, and interactive web applications.</p>
  </section>

  <section id="skills" class="section">
    <h2>Skills</h2>
    <ul>
      <li>HTML, CSS, JavaScript</li>
      <li>PHP, Laravel</li>
      <li>MySQL, Database Handling</li>
      <li>Git & GitHub</li>
      <li>ML, DL</li>
    </ul>
  </section>

  <section id="projects" class="section">
    <h2>Projects</h2>
    <div class="projects">
      <div class="project-card">
        <h3>Project 1</h3>
        <p>Portfolio</p>
      </div>
      <div class="project-card">
        <h3>Project 2</h3>
        <p>E-Municipal</p>
      </div>
      <div class="project-card">
        <h3>Project 3</h3>
        <p>A study about hybrid learning frameworks</p>
      </div>
    </div>
  </section>

  <section id="contact" class="section">
    <h2>Contact</h2>
    <p>Email: ittisamurtunib20@gmail.com</p>
    <p>LinkedIn: your-link</p>
    <p>GitHub: https://github.com/tunib1335-sketch</p>
  </section>

  <footer>
    <p>&copy; 2025 Your Name. All Rights Reserved.</p>
  </footer>

  <button id="backToTop" onclick="scrollToTop()">↑</button>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
