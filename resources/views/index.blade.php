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
    <h1>Your Name</h1>
    <p>Web Developer | Designer | Programmer</p>
  </header>

  <nav>
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>

  <section id="about" class="section">
    <h2>About Me</h2>
    <p>Hello! I'm a passionate developer who enjoys building clean, responsive, and interactive web applications.</p>
  </section>

  <section id="skills" class="section">
    <h2>Skills</h2>
    <ul>
      <li>HTML, CSS, JavaScript</li>
      <li>PHP, Laravel</li>
      <li>MySQL, Database Handling</li>
      <li>Git & GitHub</li>
    </ul>
  </section>

  <section id="projects" class="section">
    <h2>Projects</h2>
    <div class="projects">
      <div class="project-card">
        <h3>Project 1</h3>
        <p>A simple description of your project.</p>
      </div>
      <div class="project-card">
        <h3>Project 2</h3>
        <p>A simple description of your project.</p>
      </div>
      <div class="project-card">
        <h3>Project 3</h3>
        <p>A simple description of your project.</p>
      </div>
    </div>
  </section>

  <section id="contact" class="section">
    <h2>Contact</h2>
    <p>Email: youremail@example.com</p>
    <p>LinkedIn: your-link</p>
    <p>GitHub: your-link</p>
  </section>

  <footer>
    <p>&copy; 2025 Your Name. All Rights Reserved.</p>
  </footer>

  <button id="backToTop" onclick="scrollToTop()">↑</button>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
