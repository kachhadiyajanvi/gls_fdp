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
                document.body.style.overflowY = 'auto';
                document.body.style.overflowX = 'hidden';
            }
        }, 5000);
    }
});

// 7. AJAX Form Handling
function submitForm(event) {
    if (event) event.preventDefault();
    const form = document.getElementById('registrationForm');
    const submitBtn = form.querySelector('button[type="submit"]');

    // --- Custom Inline Validation ---
    let isValid = true;
    const inputs = form.querySelectorAll('input, select');

    // 1. Reset Errors
    inputs.forEach(input => {
        input.classList.remove('is-invalid');
        // field-error text is handled via sibling, no need to hide manualy as CSS does it
    });

    // 2. Check Fields
    inputs.forEach(input => {
        const val = input.value.trim();

        // Required
        if (input.hasAttribute('required') && !val) {
            isValid = false;
            showError(input, 'This field is required');
        }
        // Email
        else if (val && input.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
            isValid = false;
            showError(input, 'Please enter a valid email');
        }
    });

    if (!isValid) {
        // Shake animation replay for UX
        const firstInvalid = form.querySelector('.is-invalid');
        if (firstInvalid) {
            firstInvalid.focus();
            firstInvalid.style.animation = 'none';
            firstInvalid.offsetHeight; /* reflow */
            firstInvalid.style.animation = 'shake 0.3s ease-in-out';
        }
        return false;
    }

    // --- Submit if Valid ---
    const formData = new FormData(form);

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
            if (result.startsWith("success")) {
                const parts = result.split('|');
                const regId = parts[1] ? parts[1] : '';

                let msg = 'Thank you for registering. We have received your details.';
                if (regId) {
                    msg += `<br><br><strong style="font-size:1.1em; color:#2563eb;">Your Registration ID: ${regId}</strong><br><small>(Please save this ID)</small>`;
                }

                showModal('success', 'Registration Successful!', msg);
                form.reset();
            } else if (result.includes("already registered")) {
                const emailInput = form.querySelector('input[type="email"]');
                showError(emailInput, 'This email is already registered.');
                emailInput.focus();
                // Shake effect
                emailInput.style.animation = 'none';
                emailInput.offsetHeight;
                emailInput.style.animation = 'shake 0.3s ease-in-out';
            } else {
                // General error in the feedback div
                const feedback = document.getElementById('form-feedback');
                if (feedback) {
                    feedback.style.display = 'block';
                    feedback.innerHTML = '<i class="fas fa-exclamation-circle"></i> ' + result;
                    // Reset animations if any
                    feedback.style.animation = 'none';
                    feedback.offsetHeight;
                    feedback.style.animation = 'shake 0.3s ease-in-out';
                } else {
                    alert(result);
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
            const feedback = document.getElementById('form-feedback');
            if (feedback) {
                feedback.style.display = 'block';
                feedback.innerText = 'Connection Error: ' + error.message;
            }
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Confirm Registration <i class="fas fa-check-circle"></i>';
        });

    return false;
}

function showError(input, message) {
    input.classList.add('is-invalid');
    const sm = input.nextElementSibling;
    if (sm && sm.classList.contains('field-error')) {
        sm.innerText = message;
    }
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
        modalMessage.innerHTML = message;

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
