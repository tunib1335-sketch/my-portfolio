<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Itti Samur Tunib — Professional Portfolio</title>
    <meta
      name="description"
      content="Portfolio of Itti Samur Tunib, CSE undergraduate focusing on software engineering, machine learning, and systems."
    />
    <style>
      :root {
        --bg: #0f1724;
        --card: #0b1220;
        --muted: #9aa4b2;
        --accent: #6ee7b7;
        --glass: rgba(255, 255, 255, 0.04);
        --max-width: 1100px;
        --radius: 14px;
        --gap: 18px;
        --ff: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue",
          Arial;
      }
      * {
        box-sizing: border-box;
      }
      html,
      body {
        height: 100%;
      }
      body {
        margin: 0;
        font-family: var(--ff);
        background: linear-gradient(180deg, #071020 0%, #071525 100%);
        color: #e6eef6;
        padding: 32px 20px;
        display: flex;
        justify-content: center;
      }
      .wrap {
        width: 100%;
        max-width: var(--max-width);
      }
      header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 28px;
      }
      .brand {
        display: flex;
        gap: 12px;
        align-items: center;
      }
      .logo {
        width: 56px;
        height: 56px;
        border-radius: 12px;
        background: linear-gradient(135deg, var(--accent), #60a5fa);
        display: grid;
        place-items: center;
        color: #022;
        font-weight: 700;
        font-size: 18px;
      }
      nav {
        display: flex;
        gap: 12px;
      }
      nav a {
        color: var(--muted);
        text-decoration: none;
      }
      .btn {
        background: var(--accent);
        color: #022;
        border: none;
        padding: 10px 14px;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
      }
      .hero {
        display: grid;
        grid-template-columns: 1fr 360px;
        gap: 28px;
        margin-bottom: 26px;
      }
      .card {
        background: linear-gradient(180deg, var(--card), rgba(7, 17, 30, 0.6));
        padding: 20px;
        border-radius: var(--radius);
      }
      .intro h1 {
        margin: 0 0 8px;
        font-size: 34px;
      }
      .intro p {
        color: var(--muted);
        margin-bottom: 16px;
      }
      .profile {
        text-align: center;
      }
      .avatar {
        width: 240px;
        height: 240px;
        border-radius: 14px;
        overflow: hidden;
        margin: auto;
      }
      .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .stats {
        display: flex;
        gap: 12px;
        justify-content: center;
        margin-top: 12px;
      }
      .stat {
        background: var(--glass);
        padding: 10px 12px;
        border-radius: 10px;
      }
      section {
        margin-bottom: 22px;
      }
      .grid-3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: var(--gap);
      }
      footer {
        text-align: center;
        color: var(--muted);
        padding: 18px 0;
      }
      @media (max-width: 980px) {
        .hero {
          grid-template-columns: 1fr;
        }
        .grid-3 {
          grid-template-columns: repeat(2, 1fr);
        }
      }
      @media (max-width: 620px) {
        nav {
          display: none;
        }
        .grid-3 {
          grid-template-columns: 1fr;
        }
      }
      .muted {
        color: var(--muted);
      }
      a.link {
        color: var(--accent);
        text-decoration: none;
      }
    </style>
  </head>

  <body>
    <div class="wrap">
      <header>
        <div class="brand">
          <div class="logo">IT</div>
          <div>
            <div style="font-weight: 700">Itti Samur Tunib</div>
            <div class="muted" style="font-size: 13px">
              CSE Undergraduate • ML & Software Engineering
            </div>
          </div>
        </div>
        <nav>
          <a href="#projects">Projects</a>
          <a href="#skills">Skills</a>
          <a href="#about">About</a>
          <a href="#contact">Contact</a>
        </nav>
        <button class="btn" id="downloadResume">Download Resume</button>
      </header>

      <main>
        <section class="hero">
          <div class="card intro">
            <h1>Hi, I'm Itti.</h1>
            <p>
              I am a Computer Science & Engineering undergraduate with strong
              interests in machine learning, compiler design, and software
              systems. I enjoy building practical, well-structured solutions.
            </p>
            <a class="btn" href="#projects">View Projects</a>
          </div>

          <aside class="card profile">
            <div class="avatar">
              <img
                src="https://via.placeholder.com/640x640.png?text=Your+Photo"
                alt="Itti Samur Tunib"
              />
            </div>
            <div style="font-weight: 700; margin-top: 10px">
              Itti Samur Tunib
            </div>
            <div class="muted">Bangladesh</div>
            <div class="stats">
              <div class="stat">
                <b>3+</b><span class="muted">Years Study</span>
              </div>
              <div class="stat">
                <b>10+</b><span class="muted">Projects</span>
              </div>
              <div class="stat"><b>1</b><span class="muted">Thesis</span></div>
            </div>
          </aside>
        </section>

        <section id="projects" class="card">
          <h2>Projects</h2>
          <div class="grid-3">
            <div class="card">
              <h3>Imbalanced Dataset Classification</h3>
              <p class="muted">
                ML pipeline using resampling, multiple classifiers, and
                cross-validation on Kaggle datasets.
              </p>
              <div class="muted">PyTorch • scikit-learn • Imbalanced-learn</div>
            </div>
            <div class="card">
              <h3>Compiler Design Toolkit</h3>
              <p class="muted">
                Implementation of FIRST/FOLLOW, LL(1) parsing, syntax trees, and
                three-address code.
              </p>
              <div class="muted">C • Lex/Yacc</div>
            </div>
            <div class="card">
              <h3>Office Network Simulation</h3>
              <p class="muted">
                Designed DNS and Web Server-based office topology using Cisco
                Packet Tracer.
              </p>
              <div class="muted">Networking • Cisco Packet Tracer</div>
            </div>
          </div>
        </section>

        <section id="skills" class="card">
          <h2>Skills</h2>
          <p class="muted">
            HTML, CSS, JavaScript, Python, C, PyTorch, scikit-learn, FastAPI,
            Git, Linux, Cisco Packet Tracer
          </p>
        </section>

        <section id="about" class="card">
          <h2>About</h2>
          <p class="muted">
            I am currently pursuing my Bachelor's degree in Computer Science and
            Engineering. My academic focus includes machine learning on small
            and imbalanced datasets, compiler construction, and network design.
          </p>
        </section>

        <section id="contact" class="card">
          <h2>Contact</h2>
          <p class="muted">
            Email:
            <a class="link" href="mailto:ittisamurtunib20@gmail.com"
              >ittisamurtunib20@gmail.com</a
            >
          </p>
        </section>
      </main>

      <footer>© <span id="year"></span> Itti Samur Tunib</footer>
    </div>

    <script>
      document.getElementById("year").textContent = new Date().getFullYear();
      document
        .getElementById("downloadResume")
        .addEventListener("click", () => {
          const a = document.createElement("a");
          a.href = "resume.pdf";
          a.download = "Itti_Samur_Tunib_Resume.pdf";
          a.click();
        });
    </script>
  </body>
</html>
