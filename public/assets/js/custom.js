/**
 * 360 Business Services - Custom JavaScript
 * Enhanced functionality for better user experience
 */

// Global function to open quote popup - called directly from onclick
window.openQuotePopup = function (button, event) {
    console.log("Opening quote popup...");

    // Prevent event bubbling if event is passed
    if (event) {
        event.preventDefault();
        event.stopPropagation();
        event.stopImmediatePropagation();
    }

    const popup = $(".search-popup-wrap");
    if (popup.length > 0) {
        // Use the same smooth animation as the header button
        setTimeout(function () {
            popup.animate(
                {
                    width: "toggle",
                },
                500
            );

            console.log("Quote popup opened with smooth animation");
        }, 50);

        return true;
    } else {
        console.error("Quote popup not found");
        return false;
    }
};

// Global function to close quote popup
window.closeQuotePopup = function () {
    const popup = $(".search-popup-wrap");
    popup.slideUp(500); // Use the same slide animation as the original
    console.log("Quote popup closed with slide animation");
};

$(document).ready(function () {
    // Initialize enhanced features
    initializeEnhancedFeatures();

    // Initialize lazy loading for images
    initializeLazyLoading();

    // Initialize service search for better SEO navigation
    initializeServiceSearch();

    // Initialize quote popup functionality (backup for other quote buttons)
    initializeQuotePopup();

    // Enhanced form handling
    initializeFormEnhancements();

    // Initialize loading states
    initializeLoadingStates();

    // Initialize smooth scrolling
    initializeSmoothScrolling();

    // Initialize enhanced animations
    initializeEnhancedAnimations();

    // ===== SIMPLE MISSION & VISION FUNCTIONALITY =====

    // Simple scroll effects
    function simpleScrollEffects() {
        // Simple parallax for floating shapes
        const scrollTop = window.pageYOffset;
        const shapes = document.querySelectorAll('.floating-shapes .shape');
        shapes.forEach((shape, index) => {
            const speed = 0.2 + (index * 0.1);
            const yPos = -(scrollTop * speed);
            shape.style.transform = `translateY(${yPos}px)`;
        });
    }

    // Enhanced interactive card hover effects
    function initializeCardHoverEffects() {
        const cards = document.querySelectorAll('.mv-card');

        cards.forEach(card => {
            // Add tabindex for keyboard focus
            card.setAttribute('tabindex', '0');

            // Mouse tracking for glow effect
            card.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = ((e.clientX - rect.left) / rect.width) * 100;
                const y = ((e.clientY - rect.top) / rect.height) * 100;

                this.style.setProperty('--x', x + '%');
                this.style.setProperty('--y', y + '%');
            });

            card.addEventListener('mouseenter', function(e) {
                // Enhanced 3D transform
                this.style.transform = 'translateY(-20px) rotateY(2deg) rotateX(2deg) scale(1.02)';
                this.style.boxShadow = '0 30px 80px rgba(37, 86, 193, 0.15), 0 0 50px rgba(37, 86, 193, 0.1)';
                this.style.borderColor = 'rgba(37, 86, 193, 0.3)';

                // Trigger special animation for mission card
                if (this.classList.contains('mission-card')) {
                    this.style.transform = 'translateY(-20px) rotateY(-2deg) rotateX(2deg) scale(1.02)';
                }

                // Icon animations
                const icon = this.querySelector('.card-icon');
                if (icon) {
                    icon.style.transform = 'scale(1.15) rotate(10deg)';
                    icon.style.boxShadow = '0 20px 50px rgba(37, 86, 193, 0.4), 0 0 30px rgba(37, 86, 193, 0.3)';

                    // Icon inner animation
                    const iconInner = icon.querySelector('i');
                    if (iconInner) {
                        iconInner.style.transform = 'scale(1.2) rotate(-10deg)';
                        iconInner.style.textShadow = '0 0 10px rgba(255, 255, 255, 0.5)';
                    }
                }

                // Number animation with glow
                const number = this.querySelector('.card-number');
                if (number) {
                    number.style.color = 'rgba(37, 86, 193, 0.3)';
                    number.style.transform = 'scale(1.1) translateX(-5px)';
                    number.style.textShadow = '0 0 20px rgba(37, 86, 193, 0.3)';
                }

                // Title animation
                const title = this.querySelector('.card-title');
                if (title) {
                    title.style.color = '#2556c1';
                    title.style.transform = 'translateY(-2px)';
                    title.style.textShadow = '0 2px 10px rgba(37, 86, 193, 0.1)';
                }

                // Description animation
                const description = this.querySelector('.card-description');
                if (description) {
                    description.style.color = '#374151';
                    description.style.transform = 'translateY(-1px)';
                    description.style.letterSpacing = '0.2px';
                }

                // Add pulse effect to the card
                this.style.animation = 'none';
                setTimeout(() => {
                    if (this.classList.contains('mission-card')) {
                        this.style.animation = 'float-mission 3s ease-in-out infinite';
                    } else {
                        this.style.animation = 'float-gentle 3s ease-in-out infinite';
                    }
                }, 100);
            });

            card.addEventListener('mouseleave', function() {
                // Reset all transformations
                this.style.transform = '';
                this.style.boxShadow = '';
                this.style.borderColor = '';
                this.style.animation = '';

                // Reset icon
                const icon = this.querySelector('.card-icon');
                if (icon) {
                    icon.style.transform = '';
                    icon.style.boxShadow = '';

                    const iconInner = icon.querySelector('i');
                    if (iconInner) {
                        iconInner.style.transform = '';
                        iconInner.style.textShadow = '';
                    }
                }

                // Reset number
                const number = this.querySelector('.card-number');
                if (number) {
                    number.style.color = '';
                    number.style.transform = '';
                    number.style.textShadow = '';
                }

                // Reset title
                const title = this.querySelector('.card-title');
                if (title) {
                    title.style.color = '';
                    title.style.transform = '';
                    title.style.textShadow = '';
                }

                // Reset description
                const description = this.querySelector('.card-description');
                if (description) {
                    description.style.color = '';
                    description.style.transform = '';
                    description.style.letterSpacing = '';
                }
            });

            // Enhanced focus support with keyboard interaction
            card.addEventListener('focus', function() {
                this.style.transform = 'translateY(-20px) scale(1.02)';
                this.style.boxShadow = '0 30px 80px rgba(37, 86, 193, 0.15), 0 0 0 3px rgba(37, 86, 193, 0.2)';
                this.style.borderColor = 'rgba(37, 86, 193, 0.3)';

                // Add subtle animation on focus
                this.style.animation = 'float-gentle 3s ease-in-out infinite';
            });

            card.addEventListener('blur', function() {
                this.style.transform = '';
                this.style.boxShadow = '';
                this.style.borderColor = '';
                this.style.animation = '';
            });

            // Add click animation
            card.addEventListener('click', function() {
                // Create ripple effect
                const ripple = document.createElement('div');
                ripple.style.cssText = `
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 10px;
                    height: 10px;
                    background: radial-gradient(circle, rgba(37, 86, 193, 0.3) 0%, transparent 70%);
                    border-radius: 50%;
                    transform: translate(-50%, -50%);
                    pointer-events: none;
                    z-index: 10;
                    animation: ripple-expand 0.6s ease-out;
                `;

                this.appendChild(ripple);

                // Remove ripple after animation
                setTimeout(() => {
                    if (ripple.parentNode) {
                        ripple.parentNode.removeChild(ripple);
                    }
                }, 600);

                // Temporary scale effect
                this.style.transform = 'translateY(-20px) scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'translateY(-20px) scale(1.02)';
                }, 150);
            });
        });
    }

    // Add dynamic CSS animations
    function addDynamicAnimations() {
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple-expand {
                0% {
                    width: 10px;
                    height: 10px;
                    opacity: 1;
                }
                100% {
                    width: 300px;
                    height: 300px;
                    opacity: 0;
                }
            }

            @keyframes title-glow {
                0%, 100% { text-shadow: 0 2px 10px rgba(37, 86, 193, 0.1); }
                50% { text-shadow: 0 2px 20px rgba(37, 86, 193, 0.3); }
            }

            @keyframes icon-pulse {
                0%, 100% { box-shadow: 0 20px 50px rgba(37, 86, 193, 0.4), 0 0 30px rgba(37, 86, 193, 0.3); }
                50% { box-shadow: 0 25px 60px rgba(37, 86, 193, 0.5), 0 0 40px rgba(37, 86, 193, 0.4); }
            }

            .mv-card:hover .card-title {
                animation: title-glow 2s ease-in-out infinite;
            }

            .mv-card:hover .card-icon {
                animation: icon-pulse 2s ease-in-out infinite;
            }
        `;
        document.head.appendChild(style);
    }

    // Initialize AOS with simple settings
    function initializeSimpleAOS() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 50
            });
        }
    }

    // Performance optimized scroll handler
    let scrollTimeout;
    function optimizedScrollHandler() {
        if (scrollTimeout) {
            clearTimeout(scrollTimeout);
        }

        scrollTimeout = setTimeout(() => {
            simpleScrollEffects();
        }, 10);
    }

    // Initialize all simple features
    function initializeSimpleFeatures() {
        initializeCardHoverEffects();
        initializeSimpleAOS();
        addDynamicAnimations();
        simpleScrollEffects();
    }

    // Event listeners
    $(window).on('scroll', optimizedScrollHandler);
    $(window).on('resize', simpleScrollEffects);

    // Initialize simple features when DOM is ready
    initializeSimpleFeatures();

    // Reinitialize on window load
    $(window).on('load', function() {
        setTimeout(initializeSimpleFeatures, 100);
    });
});

/**
 * Initialize Enhanced Features
 */
function initializeEnhancedFeatures() {
    // Enhanced button interactions
    $(".btn-enhanced, .btn-pay-now, .btn-consult")
        .on("mouseenter", function () {
            $(this).find("i").addClass("animate__animated animate__pulse");
        })
        .on("mouseleave", function () {
            $(this).find("i").removeClass("animate__animated animate__pulse");
        });

    // Enhanced play button functionality
    $(".play-btn-enhanced").on("click", function (e) {
        e.preventDefault();

        // Add click animation
        $(this)
            .find(".play-icon-wrapper")
            .addClass("animate__animated animate__heartBeat");

        // Remove animation after completion
        setTimeout(() => {
            $(this)
                .find(".play-icon-wrapper")
                .removeClass("animate__animated animate__heartBeat");
        }, 1000);

        // Trigger original popup video functionality
        const videoUrl = $(this).attr("href");
        if (videoUrl) {
            // Use existing popup video functionality
            $(this).magnificPopup({
                type: "iframe",
                iframe: {
                    patterns: {
                        youtube: {
                            index: "youtube.com/",
                            id: "v=",
                            src: "https://www.youtube.com/embed/%id%?autoplay=1",
                        },
                        vimeo: {
                            index: "vimeo.com/",
                            id: "/",
                            src: "https://player.vimeo.com/video/%id%?autoplay=1",
                        },
                    },
                },
            });
        }
    });

    // Enhanced stats counter animation
    animateCounters();

    // Enhanced floating elements
    initializeFloatingElements();
}

/**
 * Initialize Quote Popup Functionality
 */
function initializeQuotePopup() {
    console.log("Quote popup initialization started");

    // Check if popup exists
    const popup = $(".search-popup-wrap");
    if (popup.length === 0) {
        console.warn("Quote popup HTML not found - header may not be included");
        return;
    }

    console.log("Quote popup found, setting up backup event handlers");

    // Remove any existing handlers first
    $(document).off("click.quote-popup");

    // Backup event handler for other quote buttons (like header) - use namespace
    $(document).on("click.quote-popup", ".quote-btn", function (e) {
        // Skip if this button has onclick attribute (Learn More buttons)
        if (this.onclick || this.hasAttribute("onclick")) {
            console.log("Skipping backup handler - button has onclick");
            return;
        }

        console.log("Backup quote button clicked:", this);
        e.preventDefault();
        e.stopPropagation();

        openQuotePopup(this, e);
    });

    // Close quote popup functionality
    $(document).on("click.quote-popup", ".search-close", function (e) {
        e.preventDefault();
        e.stopPropagation();
        closeQuotePopup();
    });

    // Close popup when clicking outside - add delay to prevent immediate closing
    $(document).on("click.quote-popup", ".search-popup-wrap", function (e) {
        if (e.target === this) {
            // Add small delay to prevent immediate closing after opening
            setTimeout(function () {
                closeQuotePopup();
            }, 100);
        }
    });
}

/**
 * Initialize Form Enhancements
 */
function initializeFormEnhancements() {
    // Enhanced form validation
    $(".form-enhanced").on("submit", function (e) {
        const form = $(this);
        let isValid = true;

        // Remove previous error states
        form.find(".form-control").removeClass("is-invalid");
        form.find(".invalid-feedback").remove();

        // Validate required fields
        form.find(".form-control[required]").each(function () {
            const field = $(this);
            const value = field.val().trim();

            if (!value) {
                field.addClass("is-invalid");
                field.after(
                    '<div class="invalid-feedback">This field is required.</div>'
                );
                isValid = false;
            }
        });

        // Validate email fields
        form.find('input[type="email"]').each(function () {
            const field = $(this);
            const email = field.val().trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email && !emailRegex.test(email)) {
                field.addClass("is-invalid");
                field.after(
                    '<div class="invalid-feedback">Please enter a valid email address.</div>'
                );
                isValid = false;
            }
        });

        // Validate phone fields
        form.find(
            'input[type="tel"], input[name*="phone"], input[name*="mobile"]'
        ).each(function () {
            const field = $(this);
            const phone = field.val().trim();
            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;

            if (phone && !phoneRegex.test(phone)) {
                field.addClass("is-invalid");
                field.after(
                    '<div class="invalid-feedback">Please enter a valid phone number.</div>'
                );
                isValid = false;
            }
        });

        if (!isValid) {
            e.preventDefault();

            // Scroll to first error
            const firstError = form.find(".is-invalid").first();
            if (firstError.length) {
                $("html, body").animate(
                    {
                        scrollTop: firstError.offset().top - 100,
                    },
                    500
                );
            }
        }
    });

    // Enhanced input animations
    $(".form-enhanced .form-control")
        .on("focus", function () {
            $(this).parent().addClass("focused");
        })
        .on("blur", function () {
            if (!$(this).val()) {
                $(this).parent().removeClass("focused");
            }
        });

    // Auto-resize textareas
    $(".form-enhanced textarea").on("input", function () {
        this.style.height = "auto";
        this.style.height = this.scrollHeight + "px";
    });
}

/**
 * Initialize Loading States
 */
function initializeLoadingStates() {
    // Global loading function
    window.showLoading = function (element, text = "Loading...") {
        const $element = $(element);
        const originalContent = $element.html();

        $element.data("original-content", originalContent);
        $element.html(`
            <div class="d-flex align-items-center justify-content-center">
                <div class="loading-spinner me-2"></div>
                <span>${text}</span>
            </div>
        `);
        $element.prop("disabled", true);
    };

    window.hideLoading = function (element) {
        const $element = $(element);
        const originalContent = $element.data("original-content");

        if (originalContent) {
            $element.html(originalContent);
            $element.prop("disabled", false);
        }
    };

    // Auto-apply loading to form submissions
    $(".form-enhanced").on("submit", function () {
        const submitBtn = $(this).find(
            'button[type="submit"], input[type="submit"]'
        );
        if (submitBtn.length) {
            showLoading(submitBtn, "Processing...");
        }
    });
}

/**
 * Initialize Smooth Scrolling
 */
function initializeSmoothScrolling() {
    // Smooth scroll for anchor links
    $('a[href^="#"]').on("click", function (e) {
        e.preventDefault();

        const target = $(this.getAttribute("href"));
        if (target.length) {
            $("html, body").animate(
                {
                    scrollTop: target.offset().top - 80,
                },
                1000
            );
        }
    });
}

/**
 * Initialize Enhanced Animations
 */
function initializeEnhancedAnimations() {
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const element = entry.target;
                element.classList.add("animate__animated");

                // Add specific animation based on data attribute
                const animation =
                    element.dataset.animation || "animate__fadeInUp";
                element.classList.add(animation);

                // Remove observer after animation
                observer.unobserve(element);
            }
        });
    }, observerOptions);

    // Observe elements with animation data
    document.querySelectorAll("[data-animation]").forEach((el) => {
        observer.observe(el);
    });

    // Parallax effect for floating elements
    $(window).on("scroll", function () {
        const scrolled = $(window).scrollTop();
        const rate = scrolled * -0.5;

        $(".floating-elements").css("transform", `translateY(${rate}px)`);
    });
}

/**
 * Animate Counters
 */
function animateCounters() {
    const counters = $(".stat-number");

    counters.each(function () {
        const counter = $(this);
        const originalText = counter.text();

        // Skip animation for non-numeric values like "24/7"
        if (
            originalText.includes("/") ||
            originalText.includes("min") ||
            originalText.includes("₹")
        ) {
            return;
        }

        const target = parseInt(originalText.replace(/[^0-9]/g, ""));
        const prefix = originalText.match(/[^\d]/g)
            ? originalText.match(/[^\d]/g).join("")
            : "";

        if (target > 0) {
            counter.text("0" + prefix);

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animateCounter(counter, target, prefix);
                        observer.unobserve(entry.target);
                    }
                });
            });

            observer.observe(counter[0]);
        }
    });
}

/**
 * Animate Individual Counter
 */
function animateCounter(element, target, prefix) {
    let current = 0;
    const increment = target / 100;
    const timer = setInterval(() => {
        current += increment;
        element.text(Math.ceil(current) + prefix);

        if (current >= target) {
            element.text(target + prefix);
            clearInterval(timer);
        }
    }, 50);
}

/**
 * Initialize Floating Elements
 */
function initializeFloatingElements() {
    // Add random delays to floating elements
    $(".floating-icon").each(function (index) {
        $(this).css("animation-delay", `${index * 0.5}s`);
    });

    // Add hover effects to floating elements
    $(".floating-icon")
        .on("mouseenter", function () {
            $(this).css("animation-play-state", "paused");
            $(this).addClass("animate__animated animate__pulse");
        })
        .on("mouseleave", function () {
            $(this).css("animation-play-state", "running");
            $(this).removeClass("animate__animated animate__pulse");
        });
}

/**
 * Enhanced Search Functionality
 */
function enhancedSearch() {
    const searchInput = $("#searchInput");
    const searchResults = $("#searchResults");

    if (searchInput.length) {
        // Enhanced search with debouncing
        let searchTimeout;

        searchInput.on("input", function () {
            clearTimeout(searchTimeout);
            const query = $(this).val().trim();

            if (query.length > 2) {
                searchTimeout = setTimeout(() => {
                    performSearch(query);
                }, 300);
            } else {
                searchResults.hide();
            }
        });

        // Close search results when clicking outside
        $(document).on("click", function (e) {
            if (!$(e.target).closest(".banner-form").length) {
                searchResults.hide();
            }
        });
    }
}

/**
 * Enhanced Payment Processing
 */
function enhancePaymentProcessing() {
    // Enhanced payment form validation
    $(".payment-form").on("submit", function (e) {
        const form = $(this);
        const submitBtn = form.find('button[type="submit"]');

        // Show loading state
        showLoading(submitBtn, "Processing Payment...");

        // Additional validation can be added here

        // If validation fails, hide loading
        // hideLoading(submitBtn);
        // e.preventDefault();
    });

    // Enhanced payment method selection
    $(".payment-method").on("click", function () {
        $(".payment-method").removeClass("selected");
        $(this).addClass("selected");

        // Show relevant payment fields
        const method = $(this).data("method");
        $(".payment-fields").hide();
        $(`.payment-fields[data-method="${method}"]`).show();
    });
}

/**
 * Initialize all enhanced features on page load
 */
$(window).on("load", function () {
    // Initialize enhanced search
    enhancedSearch();

    // Initialize enhanced payment processing
    enhancePaymentProcessing();

    // Hide loading screen if exists
    $(".loading-screen").fadeOut();

    // Initialize tooltips
    if (typeof bootstrap !== "undefined") {
        const tooltipTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="tooltip"]')
        );
        const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }

    // Initialize popovers
    if (typeof bootstrap !== "undefined") {
        const popoverTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="popover"]')
        );
        const popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
    }
});

/**
 * Enhanced Error Handling
 */
window.addEventListener("error", function (e) {
    console.error("JavaScript Error:", e.error);

    // Show user-friendly error message
    if (typeof showToast === "function") {
        showToast(
            "An error occurred. Please refresh the page and try again.",
            "error"
        );
    }
});

/**
 * Enhanced Performance Monitoring
 */
if ("performance" in window) {
    window.addEventListener("load", function () {
        setTimeout(function () {
            const perfData = performance.getEntriesByType("navigation")[0];
            console.log(
                "Page Load Time:",
                perfData.loadEventEnd - perfData.loadEventStart,
                "ms"
            );
        }, 0);
    });
}

/**
 * Enhanced Accessibility Features
 */
function enhanceAccessibility() {
    // Enhanced keyboard navigation
    $(document).on("keydown", function (e) {
        // Enhanced focus management
        if (e.key === "Tab") {
            const focusableElements =
                'a, button, input, textarea, select, [tabindex]:not([tabindex="-1"])';
            const focusable = $(focusableElements).filter(":visible");
            const currentIndex = focusable.index(document.activeElement);

            if (e.shiftKey) {
                // Shift + Tab (previous element)
                if (currentIndex === 0) {
                    focusable.last().focus();
                    e.preventDefault();
                }
            } else {
                // Tab (next element)
                if (currentIndex === focusable.length - 1) {
                    focusable.first().focus();
                    e.preventDefault();
                }
            }
        }

        // Enhanced escape key handling
        if (e.key === "Escape") {
            // Close modals, dropdowns, etc.
            $(".modal").modal("hide");
            $(".dropdown-menu").removeClass("show");
            searchResults.hide();
        }
    });

    // Enhanced screen reader support
    $("[aria-label], [aria-describedby]").each(function () {
        const element = $(this);
        if (!element.attr("role")) {
            element.attr("role", "button");
        }
    });
}

// Initialize accessibility features
$(document).ready(function () {
    enhanceAccessibility();
    initializeKeyFeatures();
});

/**
 * Initialize Key Features Animation
 */
function initializeKeyFeatures() {
    // Add click animation to play button
    $(".play-btn-enhanced").on("click", function () {
        // Animate the key features
        animateKeyFeatures();

        // Add click feedback
        $(this).addClass("animate__animated animate__pulse");
        setTimeout(() => {
            $(this).removeClass("animate__animated animate__pulse");
        }, 1000);
    });

    // Add hover effects to key features
    $(".video-stat")
        .on("mouseenter", function () {
            $(this).addClass("animate__animated animate__bounceIn");
        })
        .on("mouseleave", function () {
            $(this).removeClass("animate__animated animate__bounceIn");
        });
}

/**
 * Animate Key Features
 */
function animateKeyFeatures() {
    const features = $(".video-stat");

    features.each(function (index) {
        const feature = $(this);
        setTimeout(() => {
            feature.addClass("animate__animated animate__fadeInUp");
            setTimeout(() => {
                feature.removeClass("animate__animated animate__fadeInUp");
            }, 1000);
        }, index * 200);
    });
}

/**
 * Initialize Lazy Loading for Images
 */
function initializeLazyLoading() {
    // Add intersection observer for lazy loading
    if ("IntersectionObserver" in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove("lazy");
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll("img[data-src]").forEach((img) => {
            imageObserver.observe(img);
        });
    } else {
        // Fallback for older browsers
        document.querySelectorAll("img[data-src]").forEach((img) => {
            img.src = img.dataset.src;
        });
    }
}

/**
 * Enhanced Service Search for SEO
 */
function initializeServiceSearch() {
    const services = [
        // Business Formation Services
        {
            name: "Private Limited Company Registration",
            url: "/pvt",
            category: "Business Formation",
            keywords: ["pvt", "private", "limited", "company", "registration"],
        },
        {
            name: "One Person Company Registration",
            url: "/onepersoncompany",
            category: "Business Formation",
            keywords: ["opc", "one", "person", "company"],
        },
        {
            name: "Limited Liability Partnership",
            url: "/llp",
            category: "Business Formation",
            keywords: ["llp", "partnership", "limited", "liability"],
        },
        {
            name: "Partnership Firm Registration",
            url: "/partnership",
            category: "Business Formation",
            keywords: ["partnership", "firm", "registration"],
        },
        {
            name: "Proprietorship Registration",
            url: "/proprietorship",
            category: "Business Formation",
            keywords: ["proprietorship", "sole", "single", "owner"],
        },
        {
            name: "Section 8 Company Registration",
            url: "/section8",
            category: "Business Formation",
            keywords: ["section", "8", "non", "profit", "ngo"],
        },
        {
            name: "NGO Registration",
            url: "/ngo",
            category: "Business Formation",
            keywords: ["ngo", "non", "profit", "trust", "society"],
        },
        {
            name: "Nidhi Company Registration",
            url: "/nidhi",
            category: "Business Formation",
            keywords: ["nidhi", "company", "finance"],
        },
        {
            name: "E-commerce Registration",
            url: "/e-commerce",
            category: "Business Formation",
            keywords: ["ecommerce", "online", "business", "digital"],
        },

        // Registration Services
        {
            name: "GST Registration",
            url: "/gst",
            category: "Registration",
            keywords: ["gst", "goods", "service", "tax", "registration"],
        },
        {
            name: "MSME Registration",
            url: "/msme",
            category: "Registration",
            keywords: ["msme", "micro", "small", "medium", "enterprise"],
        },
        {
            name: "Trade License Registration",
            url: "/trade",
            category: "Registration",
            keywords: ["trade", "license", "business", "permit"],
        },
        {
            name: "Professional Tax Registration",
            url: "/ptax",
            category: "Registration",
            keywords: ["professional", "tax", "ptax", "registration"],
        },
        {
            name: "FSSAI Registration",
            url: "/fssai",
            category: "Registration",
            keywords: ["fssai", "food", "safety", "license"],
        },
        {
            name: "ISO Certification",
            url: "/iso",
            category: "Registration",
            keywords: ["iso", "certification", "quality", "standard"],
        },
        {
            name: "Fire License Registration",
            url: "/fire",
            category: "Registration",
            keywords: ["fire", "safety", "license", "noc"],
        },
        {
            name: "AYUSH License",
            url: "/ayush",
            category: "Registration",
            keywords: ["ayush", "medicine", "herbal", "license"],
        },
        {
            name: "RERA Registration",
            url: "/rera",
            category: "Registration",
            keywords: ["rera", "real", "estate", "property"],
        },
        {
            name: "Labour License Registration",
            url: "/labour",
            category: "Registration",
            keywords: ["labour", "license", "contractor", "worker"],
        },
        {
            name: "Pollution Control License",
            url: "/pollution",
            category: "Registration",
            keywords: ["pollution", "control", "environment", "clearance"],
        },
        {
            name: "Shop Act License",
            url: "/shop",
            category: "Registration",
            keywords: ["shop", "act", "license", "establishment"],
        },
        {
            name: "Digital Signature Certificate",
            url: "/dsc",
            category: "Registration",
            keywords: ["dsc", "digital", "signature", "certificate"],
        },
        {
            name: "Trademark Registration",
            url: "/trademark",
            category: "Registration",
            keywords: ["trademark", "brand", "logo", "registration"],
        },
        {
            name: "Copyright Registration",
            url: "/copyright",
            category: "Registration",
            keywords: ["copyright", "intellectual", "property", "content"],
        },
        {
            name: "IEC Registration",
            url: "/iec",
            category: "Registration",
            keywords: ["iec", "import", "export", "code"],
        },
        {
            name: "Startup Registration",
            url: "/startup",
            category: "Registration",
            keywords: ["startup", "recognition", "dpiit", "innovation"],
        },

        // Compliance Services
        {
            name: "GST Return Filing",
            url: "/gst-return-filling",
            category: "Compliance",
            keywords: ["gst", "return", "filing", "monthly", "quarterly"],
        },
        {
            name: "Income Tax Filing",
            url: "/business-tax-filling",
            category: "Compliance",
            keywords: ["income", "tax", "filing", "itr", "return"],
        },
        {
            name: "TDS Filing",
            url: "/tds-filling",
            category: "Compliance",
            keywords: ["tds", "tax", "deducted", "source", "filing"],
        },
        {
            name: "Professional Tax Filing",
            url: "/p-tax-filling",
            category: "Compliance",
            keywords: ["professional", "tax", "filing", "ptax"],
        },
        {
            name: "PF Filing",
            url: "/pf-filling",
            category: "Compliance",
            keywords: ["pf", "provident", "fund", "filing", "esi"],
        },
        {
            name: "Annual Compliance",
            url: "/annual-compliance",
            category: "Compliance",
            keywords: ["annual", "compliance", "mca", "filing"],
        },
        {
            name: "Statutory Audit",
            url: "/statutory-audit",
            category: "Compliance",
            keywords: ["statutory", "audit", "company", "books"],
        },
        {
            name: "Internal Audit",
            url: "/internal-audit",
            category: "Compliance",
            keywords: ["internal", "audit", "risk", "management"],
        },
        {
            name: "External Audit",
            url: "/external-audit",
            category: "Compliance",
            keywords: ["external", "audit", "independent", "auditor"],
        },
        {
            name: "Form 16 Services",
            url: "/form-16",
            category: "Compliance",
            keywords: ["form", "16", "salary", "certificate", "tds"],
        },

        // Consulting Services
        {
            name: "Virtual CFO Services",
            url: "/virtual-cfo-service",
            category: "Consulting",
            keywords: ["virtual", "cfo", "chief", "financial", "officer"],
        },
        {
            name: "Management Consulting",
            url: "/management-consulting",
            category: "Consulting",
            keywords: ["management", "consulting", "strategy", "business"],
        },
        {
            name: "Account Outsourcing",
            url: "/account-outsourcing",
            category: "Consulting",
            keywords: ["account", "outsourcing", "bookkeeping", "accounting"],
        },
        {
            name: "Property Tax Assessment",
            url: "/property-tax-assessment",
            category: "Consulting",
            keywords: ["property", "tax", "assessment", "valuation"],
        },
        {
            name: "Property Registration",
            url: "/property-registration",
            category: "Consulting",
            keywords: ["property", "registration", "deed", "sale"],
        },
        {
            name: "GST Notice Services",
            url: "/gst-notice",
            category: "Consulting",
            keywords: ["gst", "notice", "reply", "department"],
        },
        {
            name: "Income Tax Notice",
            url: "/income-tax-notice",
            category: "Consulting",
            keywords: ["income", "tax", "notice", "scrutiny", "assessment"],
        },
        {
            name: "Company Strike Off",
            url: "/strike-off",
            category: "Consulting",
            keywords: ["company", "strike", "off", "closure", "wind"],
        },
        {
            name: "HR Services",
            url: "/hr",
            category: "Consulting",
            keywords: ["hr", "human", "resource", "recruitment", "policy"],
        },
        {
            name: "Payroll Management",
            url: "/payroll-management",
            category: "Consulting",
            keywords: ["payroll", "salary", "management", "processing"],
        },
    ];

    // Enhanced search functionality
    const searchInput = document.getElementById("searchInput");
    const searchResults = document.getElementById("searchResults");

    if (searchInput && searchResults) {
        searchInput.addEventListener("input", function () {
            const query = this.value.toLowerCase().trim();

            if (query.length < 2) {
                searchResults.style.display = "none";
                return;
            }

            const filteredServices = services.filter((service) => {
                return (
                    service.name.toLowerCase().includes(query) ||
                    service.category.toLowerCase().includes(query) ||
                    service.keywords.some((keyword) =>
                        keyword.toLowerCase().includes(query)
                    )
                );
            });

            displaySearchResults(filteredServices.slice(0, 8), query);
        });

        // Hide results when clicking outside
        document.addEventListener("click", function (e) {
            if (
                !searchInput.contains(e.target) &&
                !searchResults.contains(e.target)
            ) {
                searchResults.style.display = "none";
            }
        });
    }

    function displaySearchResults(services, query) {
        if (services.length === 0) {
            searchResults.innerHTML =
                '<div class="search-result-item no-results">No services found</div>';
            searchResults.style.display = "block";
            return;
        }

        const resultsHtml = services
            .map(
                (service) => `
            <a href="${service.url}" class="search-result-item">
                <div class="service-name">${highlightMatch(
                    service.name,
                    query
                )}</div>
                <div class="service-category">${service.category}</div>
            </a>
        `
            )
            .join("");

        searchResults.innerHTML = resultsHtml;
        searchResults.style.display = "block";
    }

    function highlightMatch(text, query) {
        const regex = new RegExp(`(${query})`, "gi");
        return text.replace(regex, "<mark>$1</mark>");
    }
}

// Add search styles
const searchStyles = `
    .search-result-item {
        display: block;
        padding: 12px 16px;
        border-bottom: 1px solid #e9ecef;
        text-decoration: none;
        color: #333;
        transition: background-color 0.2s;
    }

    .search-result-item:hover {
        background-color: #f8f9fa;
        text-decoration: none;
        color: #2575fc;
    }

    .search-result-item:last-child {
        border-bottom: none;
    }

    .service-name {
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 2px;
    }

    .service-category {
        font-size: 12px;
        color: #6c757d;
    }

    .search-result-item mark {
        background-color: #2575fc;
        color: white;
        padding: 1px 3px;
        border-radius: 2px;
    }

    .no-results {
        color: #6c757d;
        font-style: italic;
        text-align: center;
    }

    .result-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        max-height: 400px;
        overflow-y: auto;
        z-index: 1000;
        margin-top: 4px;
    }

    .search-dropdown {
        display: none;
    }
`;

// Inject search styles
const styleSheet = document.createElement("style");
styleSheet.textContent = searchStyles;
document.head.appendChild(styleSheet);

// Additional standalone functions
function createFloatingOrbs() {
    const container = document.querySelector(".simple-bg-wrapper");
    if (!container) return;

    // Simple floating elements - removed for clean design
}

// Simple CSS animations
document.addEventListener("DOMContentLoaded", function () {
    // Add simple entrance animations
    const elements = document.querySelectorAll(
        ".section-badge, .section-title, .section-subtitle, .mv-card"
    );
    elements.forEach((element, index) => {
        element.style.opacity = "0";
        element.style.transform = "translateY(20px)";

        setTimeout(() => {
            element.style.transition = "all 0.6s ease-out";
            element.style.opacity = "1";
            element.style.transform = "translateY(0)";
        }, index * 100);
    });
});
