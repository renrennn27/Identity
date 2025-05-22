<?php

require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPortofolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
</head>
<body>
    <header data-aos="fade-down" data-aos-delay="200">
        <div class="judul">Reinrenn.</div>
        <div class="hamburger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul class="nav-link">
            <li><a href="#about" class="active">About</a></li>
            <li><a href="#skills">Skill</a></li>
            <li><a href="#achievements">Achievements</a></li>
            <li><a href="#projects" >Project</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="logo">
            <img src="asset/iconR.png" alt="Logo">
        </div>
    </header>

    <section class="home">
        <div class="text">
            <h1 class="title1" data-aos="fade-down"
            data-aos-duration="2000">WEBSITE</h1>
            <h1 class="title2" data-aos="flip-down" data-aos-duration="2100">PORTOFOLI<span>O</span></h1>
            <h1 class="title3" data-aos="fade-up"
            data-aos-duration="2000">RENO ALIF</h1>
        </div>
        <div class="btn">
            <a href="https://github.com/renrennn27" class="btn1">Github</a>
            <a href="#contact" class="btn2">Contact</a>
        </div>        
    </section>

    <section class="about" id="about">
        <h2 class="section-title" data-aos="fade-up">About Me</h2>
        <div class="about-content" data-aos="fade-up" data-aos-delay="200">
            <div class="about-img">
                <img src="asset/Renrenn.jpg" alt="Reno Alif">
            </div>
            <div class="about-text">
                <h3>Frontend Developer & UI/UX Designer</h3>
                <p>
                    Hello! I'm Reno Alif, a passionate frontend developer and UI/UX designer with a strong focus on creating beautiful, responsive, and user-friendly web experiences. I enjoy turning complex problems into simple, beautiful and intuitive designs.
                </p>
                <p>
                    With experience in HTML, CSS, JavaScript, and various modern frameworks like React or Tailwinds, I strive to build websites that not only look great but also provide exceptional user experiences. My goal is to always create products that provide pixel-perfect, performance-focused experiences.
                </p>
                <p>
                    When I'm not coding or designing, you can find me exploring new technologies, contributing to open-source projects, or enjoying outdoor activities. I'm always open to new opportunities and challenges that help me grow as a developer and designer.
                </p>
            </div>
        </div>
    </section>


<section class="skills" id="skills">
    <h2 class="section-title" data-aos="fade-up">My Skills</h2>
    <div class="skills-container" data-aos="fade-up" data-aos-delay="200">
        <div class="skill-icon" data-skill="HTML5">
            <i class="fab fa-html5"></i>
        </div>
        <div class="skill-icon" data-skill="CSS3">
            <i class="fab fa-css3-alt"></i>
        </div>
        <div class="skill-icon" data-skill="JavaScript">
            <i class="fab fa-js"></i>
        </div>
        <div class="skill-icon" data-skill="React">
            <i class="fab fa-react"></i>
        </div>
        <div class="skill-icon" data-skill="Tailwind">
            <i class="fab fa-css3"></i>
        </div>
        <div class="skill-icon" data-skill="UI/UX Design">
            <i class="fas fa-pencil-ruler"></i>
        </div>
        <div class="skill-icon" data-skill="Git">
            <i class="fab fa-git-alt"></i>
        </div>
        <div class="skill-icon" data-skill="GitHub">
            <i class="fab fa-github"></i>
        </div>
        <div class="skill-icon" data-skill="VS Code">
            <i class="fas fa-code"></i>
        </div>
        <div class="skill-icon" data-skill="Team Collaboration">
            <i class="fas fa-users"></i>
        </div>
        <div class="skill-icon" data-skill="Photography">
            <i class="fas fa-camera"></i>
        </div>
        <div class="skill-icon" data-skill="Videography">
            <i class="fas fa-video"></i>
        </div>
    </div>
</section>
    
    <section class="achievements" id="achievements">
        <h2 class="section-title" data-aos="fade-up">Achievements</h2>
        <div class="achievements-container">
            <div class="achievement-card" data-aos="fade-up" data-aos-delay="100">
                <img src="asset/dasar pemrogaman.png" alt="Basic Programming Certification" class="achievement-img">
                <h3 class="achievement-title">Basic Programming Certification</h3>
            </div>
            <div class="achievement-card" data-aos="fade-up" data-aos-delay="200">
                <img src="asset/logic pemrogaman.png" alt="Logic Programming Certification" class="achievement-img">
                <h3 class="achievement-title">Logic Programming Certification</h3>
            </div>
            <div class="achievement-card" data-aos="fade-up" data-aos-delay="300">
                <img src="asset/dasar git.png" alt="Basic Git Certification" class="achievement-img">
                <h3 class="achievement-title">Basic Git Certification</h3>
            </div>
            <div class="achievement-card" data-aos="fade-up" data-aos-delay="400">
                <img src="asset/dasar web.png" alt="Basic Programming Web Certification" class="achievement-img">
                <h3 class="achievement-title">Basic Programming Web Certification</h3>
            </div>
            <div class="achievement-card" data-aos="fade-up" data-aos-delay="400">
                <img src="asset/dasar javascript.png" alt="Basic Programming JavaScript Certification" class="achievement-img">
                <h3 class="achievement-title">Basic Programming JavaScript Certification</h3>
            </div>
            <div class="achievement-card" data-aos="fade-up" data-aos-delay="500">
                <img src="asset/front-end.png" alt="Beginners Web Front-End Certification" class="achievement-img">
                <h3 class="achievement-title">Beginners Web Front-End Certification</h3>
            </div>
            <div class="achievement-card hidden-achievement" data-aos="fade-up" data-aos-delay="600">
                <img src="asset/web dev.png" alt="Fundamental Front-End Web Certification" class="achievement-img">
                <h3 class="achievement-title">Fundamental Front-End Web Certification</h3>
            </div>
            <div class="achievement-card hidden-achievement" data-aos="fade-up" data-aos-delay="700">
                <img src="asset/back-end js.png" alt="Beginners Back-End JavaScript Certification" class="achievement-img">
                <h3 class="achievement-title">Beginners Back-End JavaScript Certification</h3>
            </div>
            <div class="achievement-card hidden-achievement" data-aos="fade-up" data-aos-delay="800">
                <img src="asset/financial literacy.png" alt="Financial literacy Certification" class="achievement-img">
                <h3 class="achievement-title">Financial literacy Certification</h3>
            </div>
            <div class="achievement-card hidden-achievement" data-aos="fade-up" data-aos-delay="900">
                <img src="asset/english.png" alt="English For Business Communication Certification" class="achievement-img">
                <h3 class="achievement-title">English For Business Communication Certification</h3>
            </div>
            <div class="achievement-card hidden-achievement" data-aos="fade-up" data-aos-delay="1000">
                <img src="asset/certificate dbs.png" alt="Certificate of Completion DBS" class="achievement-img">
                <h3 class="achievement-title">Certificate of Completion DBS</h3>
            </div>
            <div class="achievement-card hidden-achievement" data-aos="fade-up" data-aos-delay="1100">
                <img src="asset/captsone.png" alt="Best Capstone Certification" class="achievement-img">
                <h3 class="achievement-title">Best Capstone Certification</h3>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="section-title" data-aos="fade-up">My Projects</h2>
        <div class="projects-container">
            <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                <div class="project-img">
                    <img src="asset/BlockchainEdu.png" alt="Blockchain Education">
                </div>
                <div class="project-info">
                    <h3>Blockchain Education</h3>
                    <p>My first website that introduces the basics of blockchain technology in a simple way. Built using only HTML and CSS to help beginners understand what blockchain is and how it works.</p>
                    <div class="project-links">
                        <a href="https://renrennn27.github.io/Blckchn/" target="_blank">View Live</a>
                        <a href="https://github.com/renrennn27/Blckchn.git" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                <div class="project-img">
                    <img src="asset/Bookshelf.png" alt="BookShelf">
                </div>
                <div class="project-info">
                    <h3>BookShelf App</h3>
                    <p>My second website project that helps users manage a list of books they are reading or have finished. Users can add, delete, and move books between “Unread” and “Finished” lists. All data is saved in localStorage so it wont be lost on refresh. Built with HTML, CSS, and JavaScript.</p>
                    <div class="project-links">
                        <a href=" https://renrennn27.github.io/BookShelf/" target="_blank">View Live</a>
                        <a href="https://github.com/renrennn27/BookShelf.git" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="project-card" data-aos="fade-up" data-aos-delay="300">
                <div class="project-img">
                    <img src="asset/HDE.png" alt="Health Digicate">
                </div>
                <div class="project-info">
                    <h3>Health Digicate</h3>
                    <p>A collaborative website project that serves as a home workout guide. It includes categorized workout movements, a workout schedule note feature, and nutrition information to support fitness goals. Built using HTML and CSS.</p>
                    <div class="project-links">
                        <a href="https://healthdigicate.netlify.app/" target="_blank">View Live</a>
                        <a href="https://github.com/HablSank/ITC-Project.git" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="project-card" data-aos="fade-up" data-aos-delay="400">
                <div class="project-img">
                    <img src="asset/financial.png" alt="Financial Tracker">
                </div>
                <div class="project-info">
                    <h3>Financial Tracker</h3>
                    <p>A team project to record daily income and expenses. Built with React and Tailwind CSS for a clean, responsive UI. Helps users manage their money easily.</p>
                    <div class="project-links">
                        <a href="https://capstone-financial-tracker.vercel.app/" target="_blank">View Live</a>
                        <a href="https://github.com/Randi-95/capstone2.git" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="project-card" data-aos="fade-up" data-aos-delay="500">
                <div class="project-img">
                    <img src="asset/HDE.png" alt="Health Digicate">
                </div>
                <div class="project-info">
                    <h3>Health Digicate</h3>
                    <p>A collaborative website project that serves as a home workout guide. It includes categorized workout movements, a workout schedule note feature, and nutrition information to support fitness goals. Built using HTML and CSS.</p>
                    <div class="project-links">
                        <a href="https://hablsank.github.io/ITC-Project/#home" target="_blank">View Live</a>
                        <a href="https://github.com/HablSank/ITC-Project.git" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="section-title" data-aos="fade-up" data-aos-delay="300">Contact Me</h2>
        <div class="contact-container">
            <div class="contact-info" data-aos="fade-up" data-aos-delay="100">
                <h3>Let's Connect</h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">renoalifprasetyo20@gmail.com</div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">+62 881 0267 55050</div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">Pucang Arjo, Kertajaya, Kec. Gubeng, Surabaya, Indonesia</div>
                    </div>
                </div>
                <h3>Follow Me</h3>
                <div class="social-links">
                    <a href="https://github.com/renrennn27" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/reno-alif-prasetyo-080938363?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://x.com/Atreides176?t=oiePBGwEKOHRBASP-FIQUQ&s=09" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/renno.renn/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="contact-form" data-aos="fade-down" data-aos-delay="200">
<form action="process_contact.php" method="POST"> <div class="form-group"> <label for="name">Your Name</label> <input type="text" id="name" name="name" required> </div> <div class="form-group"> <label for="email">Your Email</label> <input type="email" id="email" name="email" required> </div> <div class="form-group"> <label for="subject">Subject</label> <input type="text" id="subject" name="subject" required> </div> <div class="form-group"> <label for="message">Your Message</label> <textarea id="message" name="message" required></textarea> </div> <button type="submit" class="form-btn">Send Message</button> </form>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Reno Alif. All Rights Reserved.</p>
    </footer>


    <script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('process_contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.status === 'success') {
            alert('Pesan berhasil dikirim!');
            this.reset();
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat mengirim pesan');
    });
});
</script>
    <script src="script.js"></script>
    <script>
        document.getElementById('showMoreBtn').addEventListener('click', function () {
            const hiddenItems = document.querySelectorAll('.hidden-achievement');
            hiddenItems.forEach(item => item.style.display = 'block');
            this.style.display = 'none'; // sembunyikan tombol setelah diklik
        });
</script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
</body>
</html>