<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Join the Faculty Development Program 2026 at GLS University. Explore Generative AI, GANs, and LLMs with industry experts.">
    <meta property="og:title" content="Generative AI FDP 2026 | GLS University">
    <meta property="og:description" content="A 5-day immersive workshop on Generative AI, GANs, and Large Language Models. Register now!">
    <meta property="og:image" content="images/campus.jpg">
    <meta property="og:url" content="https://www.glsuniversity.ac.in/fdp2026">
    <meta property="og:type" content="website">
    
    <title>GLS University | Future of Learning</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    
    <!-- CSS Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Message Modal -->
    <div id="messageModal" class="modal-overlay hidden">
        <div class="modal-content">
            <div id="modalIcon" class="status-icon"><i class="fas fa-check-circle"></i></div>
            <h2 id="modalTitle">Registration Successful!</h2>
            <p id="modalMessage">Thank you for registering. We have received your details.</p>
            <button class="btn btn-close-modal">Close</button>
        </div>
    </div>

    <!-- Back to Top Button -->
    <a href="#top" id="backToTop" class="back-to-top hidden"><i class="fas fa-arrow-up"></i></a>

    <!-- Preloader / Splash Screen -->
    <div id="preloader">
        <div class="loader-content">
            <h1 class="fade-in-text">Welcome to</h1>
            <h2 class="fade-in-text delay-1">Faculty Development Program 2026</h2>
            <p class="fade-in-text delay-2">GLS University</p>
        </div>
    </div>

    <!-- Floating Navigation -->
    <nav class="navbar">
        <div class="logo-container">
            <img src="images/gls-naac.png" alt="GLS University" class="nav-logo-gls">
        </div>
        <div class="nav-links">
            <a href="#about-uni">About Us</a>
            <a href="#fdp">About FDP</a>
            <a href="#resource-persons">Speaker</a>
            <a href="#committee">Committee</a>
            <a href="#schedule">Schedule</a>
            <a href="#register" class="nav-btn">Apply Now</a>
        </div>
        <div class="mobile-toggle"><i class="fas fa-bars"></i></div>
    </nav>

    <!-- Realism Hero -->
    <header class="hero" id="top">
            <div class="header-grid">
                <!-- Left: Content -->
                <div class="hero-content">
                    <div class="hero-tagline" data-aos="fade-down">
                        <span class="dash"></span> DO NOT MISS THIS OPPORTUNITY!
                    </div>
                    <h1 data-aos="fade-up" class="hero-title-large">
                        Generative AI & <br>
                        <span class="highlight-text">Large Language Models</span>
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="100" class="hero-description">
                        Join the 5-Day Faculty Development Program by GLS University. 
                        Master the future of AI with hands-on training from industry experts.
                        <strong>Feb 02 - Feb 06, 2026</strong>
                    </p>
                    
                    <div data-aos="fade-up" data-aos-delay="200" class="hero-actions">
                        <a href="#registrationForm" class="btn btn-dark">Register Now</a>
                    </div>
                </div>
                
                <!-- Right: Bento Grid Visuals -->
                <div class="hero-visuals" data-aos="fade-left" data-aos-duration="1200">
                    <div class="bento-col">
                        <div class="bento-card card-top-left">
                            <img src="images/campus2.jpg" alt="GLS Campus">
                        </div>
                        <div class="bento-card card-bottom-left">
                            <div class="stat-badge">
                                <i class="fas fa-certificate"></i>
                                <span>Certified FDP</span>
                            </div>
                        </div>
                    </div>
                    <div class="bento-col move-down">
                        <div class="bento-card card-large">
                            <img src="images/campus.jpg" alt="GLS Labs">
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <!-- About Section -->
    <section id="about-uni" class="section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">About Us</h2>
            </div>
            
            <div class="grid-2" style="display: grid; grid-template-columns: 1fr; gap: 30px;">
                <div class="light-card" style="text-align: left;" data-aos="fade-up">
                    <h3 style="color: var(--primary-color); margin-bottom: 15px; font-family: 'Space Grotesk';">About GLS University</h3>
                    <p style="margin-bottom: 15px;">GLS University has been established with the objective of providing an ideal and creative learning environment and continuing the tradition of excellence in education of the sponsoring body of the University, viz., Gujarat Law Society (GLS).</p>
                    <p style="margin-bottom: 15px;">Since its inception, GLS has taken a pioneering role by offering programmes in several disciplines such as Engineering, Business Management, Computer Technology, Commerce, Business Administration, Design, Law etc. Moreover, exclusive research degrees like Ph.D have also been introduced in various disciplines.</p>
                    <p>GLS currently has more than 25,000 students pursuing their graduate, post graduate and doctoral level studies at various levels within the university and its constituent colleges/institutions.</p>
                </div>

                <div class="light-card" style="text-align: left;" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: var(--primary-color); margin-bottom: 15px; font-family: 'Space Grotesk';">About FCAIT</h3>
                    <p style="margin-bottom: 15px;">GLS University, through its Faculty of Computer Applications and Information Technology (FCAIT), offers a comprehensive range of programs including Ph.D., MCA, M.Sc. (IT), Integrated M.Sc. (IT), and BCA. The faculty delivers all programs on Open Source platforms and is supported by state-of-the-art infrastructure.</p>
                    <p>FCAIT is committed to achieving excellence by inculcating educational, social, and ethical values in students for their holistic development. The institute focuses on comprehensive growth by exposing learners to the latest technological advancements and current industry trends.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FDP Feature Section (Dark Theme) -->
    <section id="fdp" class="section fdp-dark">
        <!-- Decorative Elements -->
        <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(59, 130, 246, 0.2) 0%, transparent 70%); border-radius: 50%;"></div>
        
        <div class="container" style="position: relative; z-index: 2;">
            <span class="badge" style="background: rgba(255,255,255,0.1); color: #93c5fd; border: 1px solid rgba(147, 197, 253, 0.3);">FEATURED EVENT</span>
            <h2 style="font-size: 3rem; margin: 20px 0;">Faculty Development Program (FDP)</h2>
            <div class="grid-2" style="gap: 50px; align-items: start;">
                <div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 40px;">on “Generative AI and Its Applications”</h3>
                     <p style="font-size: 1.1rem; margin-bottom: 30px; line-height: 1.8;">The Faculty Development Program (FDP) on Generative AI and Its Applications aims to provide researchers and educators with a comprehensive understanding of recent advances in generative AI techniques and their impact on computer vision. It focuses on advanced models such as Generative Adversarial Networks (GANs), Variational Autoencoders (VAEs), and Diffusion Models, and their use in tasks like image generation, enhancement, and object recognition. The program blends conceptual sessions, hands-on workshops, and collaborative discussions to equip participants with the skills required to address real-world computer vision problems using generative AI.</p>
                     <p style="font-size: 1.1rem; margin-bottom: 30px; line-height: 1.8;">Participants will also be sensitized to ethical and societal aspects of AI, including bias mitigation, responsible AI practices, and the risks associated with deepfakes and data misuse. The FDP is designed to foster innovation in generative AI research, pedagogy, and professional applications in computing disciplines.</p>
                     <div class="light-card" style="padding: 25px; margin-bottom: 30px;">
                        <h4 style="margin-bottom: 15px;">Who Can Participate</h4>
                        <p style="margin: 0;">The FDP is open to faculty members, researchers, academicians and industry professionals from any discipline who are interested in integrating generative AI into their teaching, research, or professional practice. Participants from diverse backgrounds are encouraged to join, as their varied perspectives will enrich discussions and promote interdisciplinary collaboration.​</p>
                    </div>
                </div>
                
                <div>
                     <div class="light-card" style="margin-bottom: 20px;">
                        <h4 style="margin-bottom: 15px;">Objectives</h4>
                        <ul class="objectives-list" style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 10px; display: flex; align-items:baseline; gap: 10px;"><i class="fas fa-check-circle" style="color: #60a5fa;"></i> Develop a clear understanding of core generative model architectures, including GANs and VAEs, and their role in computer vision applications.</li>
                            <li style="margin-bottom: 10px; display: flex; align-items:baseline; gap: 10px;"><i class="fas fa-check-circle" style="color: #60a5fa;"></i> Explore diverse applications of generative AI such as text generation, text summarization, drug discovery, medical imaging, image synthesis, object detection, and video generation.</li>
                            <li style="margin-bottom: 0; display: flex; align-items:baseline; gap: 10px;"><i class="fas fa-check-circle" style="color: #60a5fa;"></i> Build practical skills in using generative AI frameworks and tools to design, implement, and deploy models for real-world computer vision tasks.​</li>
                            <li style="margin-bottom: 0; display: flex; align-items:baseline; gap: 10px;"><i class="fas fa-check-circle" style="color: #60a5fa;"></i> Create awareness of ethical challenges in generative AI, including deepfakes, data privacy concerns, and responsible AI usage in computer vision contexts.​</li>
                        </ul>
                    </div>
                    
                    <div class="light-card">
                        <h4 style="margin-bottom: 15px;">Outcome & Impact</h4>
                        <ul class="objectives-list" style="list-style: none; padding: 0;">
                            <li style="margin-bottom: 10px; display: flex; align-items:baseline; gap: 10px;"><i class="fas fa-star" style="color: #f59e0b;"></i> Understand and explain key generative AI models such as GANs, VAEs, and Diffusion Models, along with their applications in computer vision.</li>
                            <li style="margin-bottom: 0; display: flex; align-items:baseline; gap: 10px;"><i class="fas fa-star" style="color: #f59e0b; margin-right: 10px;"></i> Apply generative AI techniques for image generation, enhancement, and object detection in practical scenarios.</li>
                            <li style="margin-bottom: 0; display: flex; align-items:baseline; gap: 10px;"><i class="fas fa-star" style="color: #f59e0b; margin-right: 10px;"></i> Fine-tune and adapt generative models for specialized computer vision tasks to improve performance and robustness.</li>
                            <li style="margin-bottom: 0; display: flex; align-items:baseline; gap: 10px;"><i class="fas fa-star" style="color: #f59e0b; margin-right: 10px;"></i> Identify and address ethical concerns such as deepfakes and algorithmic bias, thereby promoting responsible AI practice in teaching and research.​</li>
                            <li style="margin-bottom: 0; display: flex; align-items:baseline; gap: 10px;"><i class="fas fa-star" style="color: #f59e0b; margin-right: 10px;"></i> Conceptualize and propose innovative research problems and collaborative projects that advance the state of the art in computer vision and generative AI.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="position: relative; margin-top: 10px;">
        <!-- Wave Divider for smooth transition -->
        <div class="wave-divider" style="color: #f8fafc;">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#f8fafc" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </div>

    <!-- Resource Persons Section (Replaces Campus, Reference Design) -->
    <section id="resource-persons" class="section bg-light" style="padding-top: 50px;">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Speakers</h2>
            </div>
            
            <div class="speakerGrid" style="max-width: 1200px; margin: 0 auto; gap: 30px;">
                
                <!-- Speaker 1 -->
                <div class="speaker-horizontal variant-pink" data-aos="fade-up">
                    <div class="speaker-content-left">
                        <h3>Dr. Mayuri Mehta</h3>
                        <p><i class="fas fa-user-graduate"></i> Ph.D. (NIT, Surat)</p>
                        <p style="margin-top: 5px;"><i class="fas fa-briefcase"></i> Professor, SCET, Surat</p>
                        <p style="margin-top: 5px;"><i class="fas fa-building"></i> Computer Engineering</p>
                        <p style="margin-top: 5px;"><i class="fas fa-history"></i> 25 years Exp.</p>
                        <a href="mailto:mayuri.mehta@scet.ac.in" class="speaker-email"><i class="fas fa-envelope"></i> mayuri.mehta@scet.ac.in</a>
                    </div>
                    <div class="speaker-image-right">
                        <img src="images/speakers/mayuri_mehta.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Mayuri+Mehta&background=random'" alt="Dr. Mayuri Mehta">
                    </div>
                </div>

                <!-- Speaker 2 -->
                <div class="speaker-horizontal variant-blue" data-aos="fade-up" data-aos-delay="100">
                    <div class="speaker-content-left">
                        <h3>Jagriti Saini</h3>
                        <p><i class="fas fa-user-graduate"></i> Ph.D.</p>
                        <p style="margin-top: 5px;"><i class="fas fa-briefcase"></i> Founder & Owner - Eternal RESTEM</p>
                        <p style="margin-top: 5px;"><i class="fas fa-history"></i> 15 Years Exp.</p>
                        <a href="mailto:jagritis1327@gmail.com" class="speaker-email"><i class="fas fa-envelope"></i> jagritis1327@gmail.com</a>
                    </div>
                    <div class="speaker-image-right">
                        <img src="images/speakers/jagriti_saini.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Jagriti+Saini&background=random'" alt="Jagriti Saini">
                    </div>
                </div>

                <!-- Speaker 3 -->
                <div class="speaker-horizontal variant-blue" data-aos="fade-up">
                    <div class="speaker-content-left">
                        <h3>Ms. Rachana Chhajad</h3>
                        <p><i class="fas fa-user-graduate"></i> MTech, Pursuing Ph.D.</p>
                        <p style="margin-top: 5px;"><i class="fas fa-briefcase"></i> Assistant Professor, PICT, Pune</p>
                        <p style="margin-top: 5px;"><i class="fas fa-building"></i> IT</p>
                        <p style="margin-top: 5px;"><i class="fas fa-history"></i> 20 Years Exp.</p>
                        <a href="mailto:rrchhajed@pict.edu" class="speaker-email"><i class="fas fa-envelope"></i> rrchhajed@pict.edu</a>
                    </div>
                    <div class="speaker-image-right">
                        <img src="images/speakers/rachana_chhajad.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Rachana+Chhajad&background=random'" alt="Ms. Rachana Chhajad">
                    </div>
                </div>

                <!-- Speaker 4 -->
                <div class="speaker-horizontal variant-pink" data-aos="fade-up" data-aos-delay="100">
                    <div class="speaker-content-left">
                        <h3>Dr. Kiran Trivedi</h3>
                        <p><i class="fas fa-user-graduate"></i> Ph.D.</p>
                        <p style="margin-top: 5px;"><i class="fas fa-briefcase"></i> Associate Professor</p>
                        <p style="margin-top: 5px;"><i class="fas fa-university"></i> University of Wollongong, Australia:India</p>
                        <p style="margin-top: 5px;"><i class="fas fa-history"></i> 20 Years Exp.</p>
                        <a href="mailto:ktrivedi@uow.edu.au" class="speaker-email"><i class="fas fa-envelope"></i> ktrivedi@uow.edu.au</a>
                    </div>
                    <div class="speaker-image-right">
                        <img src="images/speakers/kiran_trivedi.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Kiran+Trivedi&background=random'" alt="Dr. Kiran Trivedi">
                    </div>
                </div>

                <!-- Speaker 5 -->
                <div class="speaker-horizontal variant-pink" data-aos="fade-up">
                    <div class="speaker-content-left">
                        <h3>Dr. Ripal Ranpara</h3>
                        <p><i class="fas fa-user-graduate"></i> Ph.D.</p>
                        <p style="margin-top: 5px;"><i class="fas fa-briefcase"></i> Associate Professor</p>
                        <p style="margin-top: 5px;"><i class="fas fa-university"></i> Marwadi University</p>
                        <p style="margin-top: 5px;"><i class="fas fa-building"></i> CS</p>
                        <p style="margin-top: 5px;"><i class="fas fa-history"></i> 10 Years Exp.</p>
                        <a href="mailto:ranpararipal@gmail.com" class="speaker-email"><i class="fas fa-envelope"></i> ranpararipal@gmail.com</a>
                    </div>
                    <div class="speaker-image-right">
                        <img src="images/speakers/ripal_ranpara.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Ripal+Ranpara&background=random'" alt="Dr. Ripal Ranpara">
                    </div>
                </div>

                    <!-- Speaker 6 -->
                <div class="speaker-horizontal variant-blue" data-aos="fade-up" data-aos-delay="100">
                    <div class="speaker-content-left">
                        <h3>Dr. Dulari Bhatt</h3>
                        <p><i class="fas fa-user-graduate"></i> Ph.D.</p>
                        <p style="margin-top: 5px;"><i class="fas fa-briefcase"></i> Master Trainer, Reg Lead, EduNet Foundation</p>
                        <p style="margin-top: 5px;"><i class="fas fa-history"></i> 15+ Years Exp.</p>
                        <a href="mailto:dulari.bos@gmail.com" class="speaker-email"><i class="fas fa-envelope"></i> dulari.bos@gmail.com</a>
                    </div>
                    <div class="speaker-image-right">
                        <img src="images/speakers/dulari_bhatt.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Dulari+Bhatt&background=random'" alt="Dr. Dulari Bhatt">
                    </div>
                </div>

                    <!-- Speaker 7 -->
                <div class="speaker-horizontal variant-blue" data-aos="fade-up">
                    <div class="speaker-content-left">
                        <h3>Mr. Chintan Patel</h3>
                        <p><i class="fas fa-user-graduate"></i> M.Tech.</p>
                        <p style="margin-top: 5px;"><i class="fas fa-briefcase"></i> Academic Associate, IIM Ahmedabad</p>
                        <p style="margin-top: 5px;"><i class="fas fa-building"></i> Management</p>
                        <p style="margin-top: 5px;"><i class="fas fa-history"></i> 14 Years Exp.</p>
                        <a href="mailto:chintanp@iima.ac.in" class="speaker-email"><i class="fas fa-envelope"></i> chintanp@iima.ac.in</a>
                    </div>
                    <div class="speaker-image-right">
                        <img src="images/speakers/chintan_patel.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Chintan+Patel&background=random'" alt="Mr. Chintan Patel">
                    </div>
                </div>

                <!-- Speaker 8 -->
                <div class="speaker-horizontal variant-pink" data-aos="fade-up" data-aos-delay="100">
                    <div class="speaker-content-left">
                        <h3>Mr. Parth Parekh</h3>
                        <p><i class="fas fa-user-graduate"></i> M.Tech.</p>
                        <p style="margin-top: 5px;"><i class="fas fa-briefcase"></i> Strategic Cloud Engineer, Google</p>
                        <p style="margin-top: 5px;"><i class="fas fa-history"></i> 10 Years Exp.</p>
                        <a href="mailto:parthparekh@google.com" class="speaker-email"><i class="fas fa-envelope"></i> parthparekh@google.com</a>
                    </div>
                    <div class="speaker-image-right">
                        <img src="images/speakers/parth_parekh.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Parth+Parekh&background=random'" alt="Mr. Parth Parekh">
                    </div>
                </div>

                <!-- Speaker 9 -->
                <div class="speaker-horizontal variant-pink" data-aos="fade-up">
                    <div class="speaker-content-left">
                        <h3>Dr. Ramesh Joshi</h3>
                        <p><i class="fas fa-user-graduate"></i> Ph.D.(CS)</p>
                        <p style="margin-top: 5px;"><i class="fas fa-briefcase"></i> Scientific Officer, IPR</p>
                        <p style="margin-top: 5px;"><i class="fas fa-history"></i> 20+ Years Exp.</p>
                        <a href="mailto:rjoshi@ipr.res.in" class="speaker-email"><i class="fas fa-envelope"></i> rjoshi@ipr.res.in</a>
                    </div>
                    <div class="speaker-image-right">
                        <img src="images/speakers/ramesh_joshi.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Ramesh+Joshi&background=random'" alt="Dr. Ramesh Joshi">
                    </div>
                </div>

                <!-- Speaker 10 -->
                <div class="speaker-horizontal variant-blue" data-aos="fade-up" data-aos-delay="100">
                    <div class="speaker-content-left">
                        <h3>Dr. Rohit Thanki</h3>
                        <p><i class="fas fa-user-graduate"></i> Ph.D.</p>
                        <p style="margin-top: 5px;"><i class="fas fa-briefcase"></i> Data Scientist, AI Lead</p>
                        <p style="margin-top: 5px;"><i class="fas fa-building"></i> KRiAN GmbH, Wolfsburg, Germany</p>
                        <p style="margin-top: 5px;"><i class="fas fa-history"></i> 20 Years Exp.</p>
                        <a href="mailto:rohitthanki9@gmail.com" class="speaker-email"><i class="fas fa-envelope"></i> rohitthanki9@gmail.com</a>
                    </div>
                    <div class="speaker-image-right">
                        <img src="images/speakers/rohit_thanki.jpg" onerror="this.src='https://ui-avatars.com/api/?name=Rohit+Thanki&background=random'" alt="Dr. Rohit Thanki">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Committee Section (Distinct Design) -->
    <section id="committee" class="section fdp-dark">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title" style="color: white;">Organizing Committee</h2>
                <p style="color: rgba(255,255,255,0.7); max-width: 600px; margin: 0 auto;">Meet the dedicated team behind this comprehensive Faculty Development Program.</p>
            </div>
            
            <!-- Leadership Grid -->
            <div class="grid-2" style="gap: 30px; margin-bottom: 50px;">
                <div class="leader-card" data-aos="fade-up">
                    <div class="leader-icon"><i class="fas fa-user-tie"></i></div>
                    <div class="leader-info">
                        <h4>Dr. Sudhir Nanavati</h4>
                        <span>Patron</span>
                        <p>President, GLSU</p>
                    </div>
                </div>
                <div class="leader-card" data-aos="fade-up">
                    <div class="leader-icon"><i class="fas fa-user-graduate"></i></div>
                    <div class="leader-info">
                        <h4>Dr. Harshal A. Arolkar</h4>
                        <span>FDP Convener</span>
                        <p>Professor & Head, GLSU</p>
                    </div>
                </div>
            </div>

            <!-- Detailed Lists -->
             <div class="committee-grid" style="grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));">
                <!-- Advisory Committee -->
                <div class="committee-box" data-aos="fade-up">
                    <h3><i class="fas fa-users-cog"></i> Advisory Committee</h3>
                    <ul>
                        <li><strong>Dr. Chandni Kapadiya</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Executive Director, GLSU</span></li>
                        <li><strong>Dr. Dharmesh Shah</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Pro-Vost, GLSU</span></li>
                        <li><strong>Dr. Dhruv Brahmbhatt</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Registrar, GLSU</span></li>
                        <li><strong>Dr. Jaineel Shah</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Assistant Registrar, GLSU</span></li>
                    </ul>
                </div>

                <!-- FDP Coordinators -->
                <div class="committee-box" data-aos="fade-up">
                     <h3><i class="fas fa-clipboard-check"></i> FDP Coordinators</h3>
                    <ul>
                         <li><strong>Dr. Madhuri Chopade</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Assistant Professor, GLSU</span></li>
                         <li><strong>Dr. Snehal Shukla</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Assistant Professor, GLSU</span></li>
                    </ul>
                </div>

                <!-- Organizing Committee -->
                <div class="committee-box" data-aos="fade-up">
                     <h3><i class="fas fa-briefcase"></i> Organizing Committee</h3>
                     <ul>
                        <li><strong>Dr. Devarshi Mehta</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Associate Professor, GLSU</span></li>
                        <li><strong>Dr. Krupa Mehta</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Assistant Professor, GLSU</span></li>
                        <li><strong>Dr. Rachana Chaudhari</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Assistant Professor, GLSU</span></li>
                    </ul>
                </div>

                <!-- Technical Committee -->
                <div class="committee-box" data-aos="fade-up">
                     <h3><i class="fas fa-cogs"></i> Technical Committee</h3>
                    <ul>
                         <li><strong>Dr. Arpit Jain</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Assistant Professor, GLSU</span></li>
                         <li><strong>Dr. Prerna Agrawal</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Assistant Professor, GLSU</span></li>
                         <li><strong>Dr. Jatin Modh</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Assistant Professor, GLSU</span></li>
                    </ul>
                </div>

                <!-- Publicity Committee -->
                <div class="committee-box" data-aos="fade-up">
                     <h3><i class="fas fa-bullhorn"></i> Publicity Committee</h3>
                    <ul>
                         <li><strong>Dr. Jenny Kasudiya</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Assistant Professor, GLSU</span></li>
                         <li><strong>Dr. Vishal Narvani</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Assistant Professor, GLSU</span></li>
                         <li><strong>Dr. Dinesh Kalal</strong><br><span style="font-size: 0.85rem; color: #cbd5e1;">Assistant Professor, GLSU</span></li>
                    </ul>
                </div>
             </div>
        </div>
    </section>
    <div style="position: relative; margin-top: 10px;">
        <!-- Wave Divider for smooth transition -->
        <div class="wave-divider" style="color: #f8fafc;">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#f8fafc" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </div>

    <!-- Schedule Section (Distinct Design) -->
    <section id="schedule" class="section schedule-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Program Schedule</h2>
                <p>A comprehensive 5-day roadmap to mastering Generative AI.</p>
            </div>

            <div class="timeline-container">
                <div class="timeline-header">
                     <div class="th-item">Date</div>
                     <div class="th-item">Time</div>
                     <div class="th-item">Topic</div>
                </div>
                
                <!-- Day 01: 02 Feb -->
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <span class="day">Day 01</span>
                        <span class="date">02 Feb, 2026</span>
                    </div>
                    <div class="time-col">11:00 AM - 11:30 AM</div>
                    <div class="topic-col">
                        <strong>Inauguration Session</strong>
                    </div>
                </div>
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <!-- Grouped under Day 01 -->
                    </div>
                    <div class="time-col">11:30 AM - 01:00 PM</div>
                    <div class="topic-col">
                        <strong>Introduction to Generative AI</strong>
                        <p>Concepts, Models, and Trends</p>
                    </div>
                </div>
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <!-- Grouped under Day 01 -->
                    </div>
                    <div class="time-col">02:00 PM - 03:30 PM</div>
                    <div class="topic-col">
                        <strong>Future of AI</strong>
                        <p>How GenAI is Shaping the Future for Everyone</p>
                    </div>
                </div>

                <!-- Day 02: 03 Feb -->
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <span class="day">Day 02</span>
                        <span class="date">03 Feb, 2026</span>
                    </div>
                    <div class="time-col">11:30 AM - 01:00 PM</div>
                    <div class="topic-col">
                        <strong>Architecture of GANs</strong>
                        <p>Training & Building GANs, Case Study</p>
                    </div>
                </div>
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <!-- Grouped under Day 02 -->
                    </div>
                    <div class="time-col">02:00 PM - 03:30 PM</div>
                    <div class="topic-col">
                        <strong>Autoencoders (VAEs)</strong>
                        <p>Introduction to VAEs, Building and Training (Hands-on)</p>
                    </div>
                </div>

                <!-- Day 03: 04 Feb -->
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <span class="day">Day 03</span>
                        <span class="date">04 Feb, 2026</span>
                    </div>
                    <div class="time-col">11:30 AM - 01:00 PM</div>
                    <div class="topic-col">
                        <strong>Applications of Generative AI</strong>
                        <p>Opportunities, Pitfalls and Safeguards</p>
                    </div>
                </div>
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <!-- Grouped under Day 03 -->
                    </div>
                    <div class="time-col">02:00 PM - 03:30 PM</div>
                    <div class="topic-col">
                        <strong>Prompt Engineering</strong>
                        <p>Hands-on session with ChatGPT</p>
                    </div>
                </div>

                <!-- Day 04: 05 Feb -->
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <span class="day">Day 04</span>
                        <span class="date">05 Feb, 2026</span>
                    </div>
                    <div class="time-col">11:30 AM - 01:00 PM</div>
                    <div class="topic-col">
                        <strong>LangChain Applications</strong>
                        <p>Designing Generative AI applications using LangChain</p>
                    </div>
                </div>
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <!-- Grouped under Day 04 -->
                    </div>
                    <div class="time-col">02:00 PM - 03:30 PM</div>
                    <div class="topic-col">
                        <strong>LLMs and Applications</strong>
                        <p>Large Language Models deep dive</p>
                    </div>
                </div>

                <!-- Day 05: 06 Feb -->
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <span class="day">Day 05</span>
                        <span class="date">06 Feb, 2026</span>
                    </div>
                    <div class="time-col">11:30 AM - 01:00 PM</div>
                    <div class="topic-col">
                        <strong>Retrieval Augmented Generation (RAG)</strong>
                        <p>A Need of Generative AI</p>
                    </div>
                </div>
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <!-- Grouped under Day 05 -->
                    </div>
                    <div class="time-col">02:00 PM - 03:30 PM</div>
                    <div class="topic-col">
                        <strong>Ethics & Bias Mitigation</strong>
                        <p>Ethical Considerations in Generative & Agentic AI</p>
                    </div>
                </div>
                <div class="timeline-row" data-aos="fade-up">
                    <div class="date-col">
                        <!-- Grouped under Day 05 -->
                    </div>
                    <div class="time-col">03:30 PM - 04:00 PM</div>
                    <div class="topic-col">
                        <strong>Valedictory Session</strong>
                        <p>Closing Ceremony</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form -->
    <section  id="register" class="form-section fdp-dark">
        <div class="container">
            <div class="modern-form">
                <div class="section-header">
                    <h2 class="section-title" style="color: var(--primary-color)!important; ">Registration</h2>
                    <p style="color: var(--text-light);">Secure your spot for the FDP 2026</p>
                </div>
                <form id="registrationForm" onsubmit="return submitForm(event)" novalidate>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Email Address <span style="color: #ef4444;">*</span></label>
                            <input type="email" name="email" class="form-control" required placeholder="hello@example.com">
                            <small class="field-error" style="color: #ef4444; display: none; margin-top: 5px; font-weight: 500;"></small>
                        </div>
                        <div class="form-group">
                            <label>Full Name <span style="color: #ef4444;">*</span></label>
                            <input type="text" name="name" class="form-control" required placeholder="John Doe">
                            <small class="field-error" style="color: #ef4444; display: none; margin-top: 5px; font-weight: 500;"></small>
                        </div>
                    </div>
                    
                    <div class="form-grid" style="margin-top: 20px;">
                        <div class="form-group">
                            <label>Mobile Number <span style="color: #ef4444;">*</span></label>
                            <input type="tel" name="mobile" class="form-control" required pattern="[0-9]{10}" placeholder="9876543210">
                            <small class="field-error" style="color: #ef4444; display: none; margin-top: 5px; font-weight: 500;"></small>
                        </div>
                        <div class="form-group">
                            <label>Gender <span style="color: #ef4444;">*</span></label>
                            <select name="gender" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <small class="field-error" style="color: #ef4444; display: none; margin-top: 5px; font-weight: 500;"></small>
                        </div>
                    </div>

                    <div class="form-grid" style="margin-top: 20px;">
                        <div class="form-group">
                            <label>Date of Birth <span style="color: #ef4444;">*</span></label>
                            <input type="date" name="dob" class="form-control" required>
                            <small class="field-error" style="color: #ef4444; display: none; margin-top: 5px; font-weight: 500;"></small>
                        </div>
                        <div class="form-group">
                            <label>Experience (Years) <span style="color: #ef4444;">*</span></label>
                            <input type="number" name="experience" class="form-control" step="0.5" required>
                            <small class="field-error" style="color: #ef4444; display: none; margin-top: 5px; font-weight: 500;"></small>
                        </div>
                    </div>

                    <div class="form-grid" style="margin-top: 20px;">
                        <div class="form-group">
                            <label>Institute Name <span style="color: #ef4444;">*</span></label>
                            <input type="text" name="institute" class="form-control" required>
                            <small class="field-error" style="color: #ef4444; display: none; margin-top: 5px; font-weight: 500;"></small>
                        </div>
                        <div class="form-group">
                            <label>University <span style="color: #ef4444;">*</span></label>
                            <input type="text" name="university" class="form-control" required>
                             <small class="field-error" style="color: #ef4444; display: none; margin-top: 5px; font-weight: 500;"></small>
                        </div>
                    </div>

                    <div id="form-feedback" style="display: none; text-align: center; margin-bottom: 20px; color: #ef4444; font-weight: 500; background: #fef2f2; padding: 10px; border-radius: 10px; border: 1px solid #fee2e2;"></div>

                    <div style="margin-top: 40px; text-align: center;">
                        <button type="submit" class="btn" style="background: var(--primary-color); padding: 18px 50px; font-size: 16px;">
                            Confirm Registration <i class="fas fa-check-circle"></i>
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </section>
    <div style="position: relative; margin-top: 20px;">
        <!-- Wave Divider for smooth transition -->
        <div class="wave-divider" style="color: #f8fafc;">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#dee5ed" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </div>

    <!-- Registration Info Cards -->
    <section style="background: #dee5ed; margin-top: 40px">
        <div class="container">
            <div class="grid-2" style="gap: 30px; margin-top: 40px;">
                <!-- Important Dates Card -->
                <div class="light-card" data-aos="fade-right" style="text-align: left; border-left: 5px solid #ef4444; padding: 30px; border-radius: 20px; overflow: hidden;">
                    <h4 style="color: var(--primary-dark); margin-bottom: 25px; display: flex; align-items: center; gap: 12px; font-size: 1.3rem;">
                        <i class="fas fa-calendar-check" style="color: #ef4444; font-size: 1.5rem;"></i> Important Dates
                    </h4>
                    <div style="display: grid; gap: 20px;">
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="background: #fef2f2; padding: 10px; border-radius: 10px; color: #ef4444;">
                                <i class="fas fa-hourglass-end"></i>
                            </div>
                            <div>
                                <p style="font-size: 0.85rem; color: #64748b; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Last Date to Apply</p>
                                <p style="font-size: 1.1rem; font-weight: 700; color: var(--text-color);">22nd January, 2026</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="background: #eff6ff; padding: 10px; border-radius: 10px; color: #3b82f6;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <p style="font-size: 0.85rem; color: #64748b; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">FDP Duration</p>
                                <p style="font-size: 1.1rem; font-weight: 700; color: var(--text-color);">02 Feb - 06 Feb, 2026</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Card -->
                <div class="light-card" data-aos="fade-left" style="text-align: left; border-left: 5px solid #3b82f6; padding: 30px; border-radius: 20px; overflow: hidden;">
                    <h4 style="color: var(--primary-dark); margin-bottom: 25px; display: flex; align-items: center; gap: 12px; font-size: 1.3rem;">
                        <i class="fas fa-headset" style="color: #3b82f6; font-size: 1.5rem;"></i> For Inquiry
                    </h4>
                    <div style="display: grid; gap: 20px;">
                        <div style="background: #f8fafc; padding: 15px; border-radius: 12px;">
                            <p style="font-weight: 700; margin-bottom: 5px; color: var(--primary-dark);">Dr. Madhuri Chopade</p>
                            <a href="mailto:madhuri.chopade@glsuniversity.ac.in" style="color: var(--primary-color); text-decoration: none; font-size: 0.95rem; display: flex; align-items: center; gap: 8px;">
                                <i class="fas fa-envelope"></i> madhuri.chopade@glsuniversity.ac.in
                            </a>
                        </div>
                        <div style="background: #f8fafc; padding: 15px; border-radius: 12px;">
                            <p style="font-weight: 700; margin-bottom: 5px; color: var(--primary-dark);">Dr. Snehal Shukla</p>
                            <a href="mailto:snehal.shukla@glsuniversity.ac.in" style="color: var(--primary-color); text-decoration: none; font-size: 0.95rem; display: flex; align-items: center; gap: 8px;">
                                <i class="fas fa-envelope"></i> snehal.shukla@glsuniversity.ac.in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="background: #0f172a; color: white; padding: 80px 0 40px; margin-top: 50px;">
        <div class="container">
            <div class="grid-3" style="text-align: left; margin-bottom: 50px; gap: 50px;">
                <!-- Brand Column -->
                <div data-aos="fade-up">
                    <img src="images/gls-naac.png" alt="GLS University" style="height: 60px; margin-bottom: 20px;">
                    <h3 style="font-family: 'Space Grotesk'; font-size: 1.5rem; margin-bottom: 15px;">GLS UNIVERSITY</h3>
                    <p style="color: #94a3b8; line-height: 1.6; margin-bottom: 20px; font-size: 0.95rem;">
                        Fostering excellence in global education and innovation. Join us in shaping the future of technology and learning.
                    </p>
                    <a href="https://www.glsuniversity.ac.in/" target="_blank" style="color: #3b82f6; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; transition: gap 0.3s;">
                        Visit Official Website <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>

                <!-- Quick Links Column -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <h4 style="font-size: 1.2rem; margin-bottom: 25px; border-bottom: 2px solid #3b82f6; padding-bottom: 10px; display: inline-block;">Quick Links</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 12px;"><a href="#about-uni" style="color: #cbd5e1; text-decoration: none; transition: color 0.3s; display: block;">About Us</a></li>
                        <li style="margin-bottom: 12px;"><a href="#campus" style="color: #cbd5e1; text-decoration: none; transition: color 0.3s; display: block;">Campus Life</a></li>
                        <li style="margin-bottom: 12px;"><a href="#fdp" style="color: #cbd5e1; text-decoration: none; transition: color 0.3s; display: block;">FDP Details</a></li>
                        <li style="margin-bottom: 12px;"><a href="#schedule" style="color: #cbd5e1; text-decoration: none; transition: color 0.3s; display: block;">Program Schedule</a></li>
                        <li style="margin-bottom: 12px;"><a href="#committee" style="color: #cbd5e1; text-decoration: none; transition: color 0.3s; display: block;">Organizing Committee</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div data-aos="fade-up" data-aos-delay="200">
                    <h4 style="font-size: 1.2rem; margin-bottom: 25px; border-bottom: 2px solid #3b82f6; padding-bottom: 10px; display: inline-block;">Contact Us</h4>
                    <p style="color: #cbd5e1; margin-bottom: 20px; line-height: 1.6; display: flex; gap: 10px;">
                        <i class="fas fa-map-marker-alt" style="color: #3b82f6; margin-top: 5px;"></i> 
                        <span>GLS Campus, Opp. Law Garden,<br> Ellisbridge, Ahmedabad – 380006.</span>
                    </p>
                    <p style="color: #cbd5e1; margin-bottom: 20px; line-height: 1.6; display: flex; gap: 10px;">
                        <i class="fas fa-phone-alt" style="color: #3b82f6; margin-top: 5px;"></i> 
                        <span>+91 79 26440532</span>
                    </p>
                    <div style="display: flex; gap: 15px; margin-top: 25px;">
                        <a href="https://www.facebook.com/GLSuniversity?fref=photo" style="width: 40px; text-decoration: none; height: 40px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; color: white; transition: all 0.3s; border: 1px solid rgba(255,255,255,0.1);"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/GlsUniversity" style="width: 40px; text-decoration: none; height: 40px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; color: white; transition: all 0.3s; border: 1px solid rgba(255,255,255,0.1);"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/glsuniversity/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D#" style="width: 40px; text-decoration: none; height: 40px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; color: white; transition: all 0.3s; border: 1px solid rgba(255,255,255,0.1);"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@glsuniversity8974/videos" style="width: 40px; text-decoration: none; height: 40px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; color: white; transition: all 0.3s; border: 1px solid rgba(255,255,255,0.1);"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div style="border-top: 1px solid #1e293b; padding-top: 30px; text-align: center; color: #64748b; font-size: 0.9rem;">
                <p>&copy; 2026 GLS University. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
