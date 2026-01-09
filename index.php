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

    <!-- Success Modal -->
    <div id="successModal" class="modal-overlay hidden">
        <div class="modal-content">
            <div class="success-icon"><i class="fas fa-check-circle"></i></div>
            <h2>Registration Successful!</h2>
            <p>Thank you for registering. We have received your details.</p>
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
            <a href="#campus">Campus</a>
            <a href="#fdp">Academics</a>
            <a href="#committee">Committee</a>
            <a href="#schedule">Schedule</a>
            <a href="#register" class="nav-btn">Apply Now</a>
        </div>
        <div class="mobile-toggle"><i class="fas fa-bars"></i></div>
    </nav>

    <!-- Realism Hero -->
    <header class="hero" id="top">
        <div class="hero-content">
            <div class="hero-badges" data-aos="fade-down">
                <span class="badge">02 - 06 Feb, 2026</span>
                <span class="badge">Online Mode</span>
            </div>
            <h1 data-aos="fade-up">Generative AI &<br>Its Applications</h1>
            <h2 data-aos="fade-up" data-aos-delay="100">5 Days Faculty Development Program (FDP)<br>Organized by FCAIT, GLS University</h2>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="#register" class="btn">Register Now <i class="fas fa-arrow-right"></i></a>
                <a href="#fdp" class="btn btn-outline" style="margin-left: 10px;">View Details</a>
            </div>
        </div>
        
        <!-- Video Background Container -->
        <div class="hero-video-container" data-aos="fade-left" data-aos-duration="1200">
            <video autoplay muted loop playsinline poster="images/campus.jpg" class="hero-video">
                <source src="https://www.youtube.com/watch?v=k46i0Kr5hd0" type="video/mp4">
                <!-- GLS University Branding Enforced -->
                Your browser does not support the video tag.
            </video>
            <!-- Overlay to ensure text readability if needed, though mask handles it -->
            <div class="hero-video-overlay"></div>
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

    <!-- Campus Gallery (Curved Divider) -->
    <div style="position: relative; margin-top: 50px;">
        <div class="wave-divider" style="color: #f8fafc;">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#f8fafc" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
        <section id="campus" class="section bg-light">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Campus Life</h2>
                </div>
                <div class="grid-3">
                    <div class="light-card" data-aos="zoom-in">
                        <img src="images/campus1.jpg" alt="Library">
                        <h3>Knowledge Hub</h3>
                    </div>
                    <div class="light-card" data-aos="zoom-in" data-aos-delay="100">
                        <img src="images/campus2.jpg" alt="Labs">
                        <h3>Tech Labs</h3>
                    </div>
                    <div class="light-card" data-aos="zoom-in" data-aos-delay="200">
                        <img src="images/campus3.jpg" alt="Campus">
                        <h3>Green Campus</h3>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- FDP Feature Section -->
    <section id="fdp" class="section">
        <div class="container">
            <div style="background: linear-gradient(135deg, #eff6ff 0%, #ffffff 100%); border-radius: 40px; padding: 60px; position: relative; overflow: hidden; border: 1px solid #dbeafe;">
                <!-- Decorative Circle -->
                <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: #dbeafe; border-radius: 50%; opacity: 0.5;"></div>
                
                <div style="position: relative; z-index: 2;">
                    <span class="badge" style="background: #3b82f6; color: white;">FEATURED EVENT</span>
                    <h2 style="font-size: 3rem; margin: 20px 0;">Faculty Development Program (FDP)</h2>
                    <h3 style="font-size: 1.5rem; margin-bottom: 20px; color: var(--primary-dark);">on “Generative AI and Its Applications”</h3>
                    
                    <p style="font-size: 1.1rem; margin-bottom: 30px; line-height: 1.8;">The Faculty Development Program (FDP) on Generative AI and Its Applications aims to provide researchers and educators with a comprehensive understanding of recent advances in generative AI techniques and their impact on computer vision. It focuses on advanced models such as Generative Adversarial Networks (GANs), Variational Autoencoders (VAEs), and Diffusion Models, and their use in tasks like image generation, enhancement, and object recognition. The program blends conceptual sessions, hands-on workshops, and collaborative discussions to equip participants with the skills required to address real-world computer vision problems using generative AI.</p>
                    <p style="font-size: 1.1rem; margin-bottom: 30px; line-height: 1.8;">Participants will also be sensitized to ethical and societal aspects of AI, including bias mitigation, responsible AI practices, and the risks associated with deepfakes and data misuse. The FDP is designed to foster innovation in generative AI research, pedagogy, and professional applications in computing disciplines.</p>

                    <div class="grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; text-align: left; margin-bottom: 40px;">
                        <div>
                            <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.3rem;">Objectives</h4>
                            <ul class="objectives-list" style="list-style: none;">
                                <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i>Develop a clear understanding of core generative model architectures, including GANs and VAEs, and their role in computer vision applications.</li>
                                <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i>Explore diverse applications of generative AI such as text generation, text summarization, drug discovery, medical imaging, image synthesis, object detection, and video generation.​</li>
                                <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i>Build practical skills in using generative AI frameworks and tools to design, implement, and deploy models for real-world computer vision tasks.​</li>
                                <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i>Create awareness of ethical challenges in generative AI, including deepfakes, data privacy concerns, and responsible AI usage in computer vision contexts.</li>
                            </ul>
                        </div>
                        <div>
                            <h4 style="color: var(--primary-color); margin-bottom: 15px; font-size: 1.3rem;">Outcome & Impact</h4>
                            <ul class="objectives-list" style="list-style: none;">
                                <li style="margin-bottom: 10px;"><i class="fas fa-star" style="color: #f59e0b; margin-right: 10px;"></i>Understand and explain key generative AI models such as GANs, VAEs, and Diffusion Models, along with their applications in computer vision.</li>
                                <li style="margin-bottom: 10px;"><i class="fas fa-star" style="color: #f59e0b; margin-right: 10px;"></i>Apply generative AI techniques for image generation, enhancement, and object detection in practical scenarios.</li>
                                <li style="margin-bottom: 10px;"><i class="fas fa-star" style="color: #f59e0b; margin-right: 10px;"></i>Fine-tune and adapt generative models for specialized computer vision tasks to improve performance and robustness.</li>
                                <li style="margin-bottom: 10px;"><i class="fas fa-star" style="color: #f59e0b; margin-right: 10px;"></i>Identify and address ethical concerns such as deepfakes and algorithmic bias, thereby promoting responsible AI practice in teaching and research.</li>
                                <li style="margin-bottom: 10px;"><i class="fas fa-star" style="color: #f59e0b; margin-right: 10px;"></i>Conceptualize and propose innovative research problems and collaborative projects that advance the state of the art in computer vision and generative AI.</li>
                            </ul>
                        </div>
                    </div>

                    <div style="background: #fff; padding: 25px; border-radius: 15px; text-align: left; margin-bottom: 40px;">
                        <h4 style="color: var(--primary-color); margin-bottom: 10px;">Who Can Participate</h4>
                        <p>The FDP is open to faculty members, researchers, academicians and industry professionals from any discipline who are interested in integrating generative AI into their teaching, research, or professional practice. Participants from diverse backgrounds are encouraged to join, as their varied perspectives will enrich discussions and promote interdisciplinary collaboration.</p>
                    </div>

                    <!-- Committees Section -->
                    <section id="committee" style="margin-bottom: 40px; text-align: left; padding-top: 80px; margin-top: -80px;">
                        <h3 style="text-align: center; margin-bottom: 40px; font-family: 'Space Grotesk'; font-size: 2.2rem;">FDP Committees</h3>
                        
                        <!-- Leadership Grid -->
                        <div class="grid-2" style="gap: 30px; margin-bottom: 30px;">
                            <div class="light-card" style="border-left: 5px solid var(--primary-color);">
                                <h4 style="color: var(--primary-dark); margin-bottom: 10px;">Patron</h4>
                                <p style="font-size: 1.1rem;"><strong>Dr. Sudhir Nanavati</strong><br><span style="color: var(--text-light); font-size: 0.9rem;">President, GLSU</span></p>
                            </div>
                            <div class="light-card" style="border-left: 5px solid var(--primary-color);">
                                <h4 style="color: var(--primary-dark); margin-bottom: 10px;">FDP Convener</h4>
                                <p style="font-size: 1.1rem;"><strong>Dr. Harshal A. Arolkar</strong><br><span style="color: var(--text-light); font-size: 0.9rem;">Professor & Head, GLSU</span></p>
                            </div>
                        </div>

                        <!-- Advisory & Coordinators -->
                        <div class="grid-2" style="gap: 30px; margin-bottom: 30px;">
                             <div class="light-card">
                                <h4 style="color: var(--primary-color); margin-bottom: 15px;">Advisory Committee</h4>
                                <ul style="list-style: none; padding: 0;">
                                    <li style="margin-bottom: 8px;"><strong>Dr. Chandni Kapadiya</strong> <span style="color: #64748b;">- Executive Director, GLSU</span></li>
                                    <li style="margin-bottom: 8px;"><strong>Dr. Dharmesh Shah</strong> <span style="color: #64748b;">- Pro-Vost, GLSU</span></li>
                                    <li style="margin-bottom: 8px;"><strong>Dr. Dhruv Brahmbhatt</strong> <span style="color: #64748b;">- Registrar, GLSU</span></li>
                                    <li style="margin-bottom: 8px;"><strong>Dr. Jaineel Shah</strong> <span style="color: #64748b;">- Assistant Registrar, GLSU</span></li>
                                </ul>
                             </div>
                             <div class="light-card">
                                <h4 style="color: var(--primary-color); margin-bottom: 15px;">FDP Coordinators</h4>
                                <ul style="list-style: none; padding: 0;">
                                    <li style="margin-bottom: 10px;"><strong>Dr. Madhuri Chopade</strong><br><span style="color: #64748b; font-size: 0.9rem;">Assistant Professor, GLSU</span></li>
                                    <li style="margin-bottom: 10px;"><strong>Dr. Snehal Shukla</strong><br><span style="color: #64748b; font-size: 0.9rem;">Assistant Professor, GLSU</span></li>
                                </ul>
                             </div>
                        </div>

                        <!-- Working Committees -->
                        <div class="grid-3" style="gap: 20px;">
                            <div class="light-card">
                                <h4 style="color: var(--primary-dark); border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; margin-bottom: 15px;">Organizing Committee</h4>
                                <ul style="list-style: none; padding: 0; font-size: 0.95rem;">
                                    <li style="margin-bottom: 8px;">Dr. Devarshi Mehta</li>
                                    <li style="margin-bottom: 8px;">Dr. Krupa Mehta</li>
                                    <li style="margin-bottom: 8px;">Dr. Rachana Chaudhari</li>
                                </ul>
                            </div>
                            <div class="light-card">
                                <h4 style="color: var(--primary-dark); border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; margin-bottom: 15px;">Technical Committee</h4>
                                <ul style="list-style: none; padding: 0; font-size: 0.95rem;">
                                    <li style="margin-bottom: 8px;">Dr. Arpit Jain</li>
                                    <li style="margin-bottom: 8px;">Dr. Prerna Agrawal</li>
                                    <li style="margin-bottom: 8px;">Dr. Jatin Modh</li>
                                </ul>
                            </div>
                            <div class="light-card">
                                <h4 style="color: var(--primary-dark); border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; margin-bottom: 15px;">Publicity Committee</h4>
                                <ul style="list-style: none; padding: 0; font-size: 0.95rem;">
                                    <li style="margin-bottom: 8px;">Dr. Jenny Kasudiya</li>
                                    <li style="margin-bottom: 8px;">Dr. Vishal Narvani</li>
                                    <li style="margin-bottom: 8px;">Dr. Dinesh Kalal</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Restored Detailed Schedule -->
                    <section id="schedule" style="background: white; border-radius: 20px; padding: 30px; margin-bottom: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); padding-top: 80px; margin-top: 40px">
                        <h3 style="margin-bottom: 20px; font-family: 'Space Grotesk';">Program Schedule</h3>
                        <div style="overflow-x: auto;">
                            <table style="width: 100%; border-collapse: collapse; min-width: 600px;">
                                <thead style="background: #f1f5f9; color: var(--text-color);">
                                    <tr>
                                        <th style="padding: 15px; text-align: left; border-radius: 10px 0 0 10px;">Date</th>
                                        <th style="padding: 15px; text-align: left;">Time</th>
                                        <th style="padding: 15px; text-align: left; border-radius: 0 10px 10px 0;">Topic</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Day 1 -->
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td rowspan="3" style="padding: 15px; vertical-align: top; font-weight: 600;">02/02/2026</td>
                                        <td style="padding: 15px;">11:00 PM - 11:30 PM</td>
                                        <td style="padding: 15px;">Inauguration Session</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td style="padding: 15px;">11:30 PM - 01:00 PM</td>
                                        <td style="padding: 15px;">Introduction to Generative AI: Concepts, Models, and Trends</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td style="padding: 15px;">02:00 PM - 03:30 PM</td>
                                        <td style="padding: 15px;">How GenAI is Shaping the Future for Everyone</td>
                                    </tr>
                                    <!-- Day 2 -->
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td rowspan="2" style="padding: 15px; vertical-align: top; font-weight: 600;">03/02/2026</td>
                                        <td style="padding: 15px;">11:30 PM - 01:00 PM</td>
                                        <td style="padding: 15px;">Architecture of GANs, Training & Building GANs, Case Study</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td style="padding: 15px;">02:00 PM - 03:30 PM</td>
                                        <td style="padding: 15px;">Introduction to Autoencoders, VAEs (Hands-on)</td>
                                    </tr>
                                    <!-- Day 3 -->
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td rowspan="2" style="padding: 15px; vertical-align: top; font-weight: 600;">04/02/2026</td>
                                        <td style="padding: 15px;">11:30 PM - 01:00 PM</td>
                                        <td style="padding: 15px;">Applications of GenAI: Opportunities, Pitfalls & Safeguards</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td style="padding: 15px;">02:00 PM - 03:30 PM</td>
                                        <td style="padding: 15px;">Prompt Engineering on ChatGPT (Hands-on)</td>
                                    </tr>
                                    <!-- Day 4 -->
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td rowspan="2" style="padding: 15px; vertical-align: top; font-weight: 600;">05/02/2026</td>
                                        <td style="padding: 15px;">11:30 PM - 01:00 PM</td>
                                        <td style="padding: 15px;">Designing GenAI applications using LangChain</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td style="padding: 15px;">02:00 PM - 03:30 PM</td>
                                        <td style="padding: 15px;">LLM and its Applications</td>
                                    </tr>
                                    <!-- Day 5 -->
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td rowspan="3" style="padding: 15px; vertical-align: top; font-weight: 600;">06/02/2026</td>
                                        <td style="padding: 15px;">11:30 PM - 01:00 PM</td>
                                        <td style="padding: 15px;">Retrieval Augmented Generation (RAG): A Need of GenAI</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td style="padding: 15px;">02:00 PM - 03:30 PM</td>
                                        <td style="padding: 15px;">Ethical Considerations & Bias Mitigation in GenAI</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid #e2e8f0;">
                                        <td style="padding: 15px;">03:30 PM - 04:00 PM</td>
                                        <td style="padding: 15px;">Valedictory Session</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form -->
    <section id="register" class="form-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Registration</h2>
                <p style="color: var(--text-light);">Secure your spot for the FDP 2026</p>
            </div>
            
            <div class="modern-form">
                <form id="registrationForm" onsubmit="return submitForm(event)">
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" required placeholder="hello@example.com">
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" required placeholder="John Doe">
                        </div>
                    </div>
                    
                    <div class="form-grid" style="margin-top: 20px;">
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="tel" name="mobile" class="form-control" required pattern="[0-9]{10}" placeholder="9876543210">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-grid" style="margin-top: 20px;">
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Experience (Years)</label>
                            <input type="number" name="experience" class="form-control" step="0.5" required>
                        </div>
                    </div>

                    <div class="form-grid" style="margin-top: 20px;">
                        <div class="form-group">
                            <label>Institute Name</label>
                            <input type="text" name="institute" class="form-control" required>
                        </div>
                         <div class="form-group">
                            <label>University</label>
                            <input type="text" name="university" class="form-control" required>
                        </div>
                    </div>

                    <div style="margin-top: 40px; text-align: center;">
                        <button type="submit" class="btn" style="background: var(--primary-color); padding: 18px 50px;">
                            Confirm Registration <i class="fas fa-check-circle"></i>
                        </button>
                    </div>
                </form>
            </div>
              <!-- Registration Info Cards -->
            <div class="grid-2" style="gap: 30px; margin-top: 40px;">
                <!-- Important Dates Card -->
                <div class="light-card" style="text-align: left; border-left: 5px solid #ef4444; padding: 30px;">
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
                <div class="light-card" style="text-align: left; border-left: 5px solid #3b82f6; padding: 30px;">
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
                <div>
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
                <div>
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
                <div>
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
