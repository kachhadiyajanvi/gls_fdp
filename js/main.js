document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = menuToggle.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // 2. Navbar Scroll Effect
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.05)';
        } else {
            navbar.style.background = 'rgba(255, 255, 255, 0.85)';
            navbar.style.boxShadow = 'none';
        }
    });

    // 3. Smooth Scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                if (navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                    menuToggle.querySelector('i').classList.remove('fa-times');
                    menuToggle.querySelector('i').classList.add('fa-bars');
                }

                const headerOffset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            }
        });
    });

    // 4. Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out',
            once: true,
            offset: 100
        });
    }

    // 5. Back to Top Button
    const backToTopBtn = document.getElementById('backToTop');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTopBtn.classList.remove('hidden');
            } else {
                backToTopBtn.classList.add('hidden');
            }
        });
    }

    // 6. Preloader Logic
    const preloader = document.getElementById('preloader');
    if (preloader) {
        // Force hide after load
        window.addEventListener('load', () => {
            setTimeout(() => {
                preloader.classList.add('hidden');
                document.body.style.overflow = 'auto'; // Enable scrolling

                // Refresh AOS
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                }
            }, 1200);
        });

        // Fallback: hide after 5 seconds if load event doesn't fire
        setTimeout(() => {
            if (!preloader.classList.contains('hidden')) {
                preloader.classList.add('hidden');
                document.body.style.overflowY = 'hidden';
            }
        }, 5000);
    }
});

// 7. AJAX Form Handling
function submitForm(event) {
    event.preventDefault();
    const form = document.getElementById('registrationForm');

    // Manual Validation
    const inputs = form.querySelectorAll('input, select');
    for (let input of inputs) {
        if (input.hasAttribute('required') && !input.value.trim()) {
            const label = input.closest('.form-group').querySelector('label').innerText.replace('*', '').trim();
            showModal('error', 'Missing Information', `${label} is required.`);
            input.focus();
            return false;
        }

        // Email Validation
        if (input.type === 'email' && input.value) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(input.value)) {
                showModal('error', 'Invalid Email', 'Please enter a valid email address (e.g., hello@example.com).');
                input.focus();
                return false;
            }
        }

        // Mobile Validation
        if (input.name === 'mobile' && input.value) {
            const mobilePattern = /^[0-9]{10}$/;
            if (!mobilePattern.test(input.value)) {
                showModal('error', 'Invalid Mobile', 'Please enter a valid 10-digit mobile number.');
                input.focus();
                return false;
            }
        }
    }

    const formData = new FormData(form);
    const submitBtn = form.querySelector('button[type="submit"]');

    // Disable button
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';

    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            const result = data.trim();
            if (result === "success") {
                showModal('success', 'Registration Successful!', 'Thank you for registering. We have received your details.');
                form.reset();
            } else if (result.includes("already registered")) {
                showModal('error', 'Registration Failed', 'This email address is already registered with us.');
            } else {
                showModal('error', 'An Error Occurred', result);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showModal('error', 'Connection Error', 'Unable to reach the server. Please try again.');
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Complete Registration <i class="fas fa-arrow-right"></i>';
        });

    return false;
}

// Modal Functions
function showModal(type, title, message) {
    const modal = document.getElementById('messageModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalMessage = document.getElementById('modalMessage');
    const modalIcon = document.getElementById('modalIcon');
    const modalContent = modal.querySelector('.modal-content');

    if (modal) {
        // Set Content
        modalTitle.textContent = title;
        modalMessage.textContent = message;

        // Reset Classes
        modalIcon.className = 'status-icon';
        modalContent.classList.remove('success-mode', 'error-mode');

        // Apply Styles based on Type
        if (type === 'success') {
            modalIcon.innerHTML = '<i class="fas fa-check-circle"></i>';
            modalIcon.classList.add('success');
            modalContent.classList.add('success-mode');
        } else {
            modalIcon.innerHTML = '<i class="fas fa-exclamation-circle"></i>';
            modalIcon.classList.add('error');
            modalContent.classList.add('error-mode');
        }

        modal.classList.remove('hidden');
    }
}

function closeModal() {
    const modal = document.getElementById('messageModal');
    if (modal) {
        modal.classList.add('hidden');
    }
}

// Add Close Listeners
document.addEventListener('DOMContentLoaded', () => {
    const closeBtn = document.querySelector('.btn-close-modal');
    const modalOverlay = document.querySelector('.modal-overlay');

    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    if (modalOverlay) {
        modalOverlay.addEventListener('click', (e) => {
            if (e.target === modalOverlay) {
                closeModal();
            }
        });
    }
});
