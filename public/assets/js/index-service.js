// 
document.addEventListener('DOMContentLoaded', function () {
  // Service data
  const services = [{
    icon: "flaticon-calculator",
    title: "Accounting & Auditing Services",
    points: [
      "Maintain clean, up-to-date financial records",
      "Ensure internal & external audit readiness",
      "Customized accounting solutions",
      "MIS reports & actionable financial insights",
      "End-to-end regulatory compliance support"
    ],
    route: "services",
    color: "linear-gradient(135deg, #2575fc 0%, #6a11cb 100%)"
  },
  {
    icon: "flaticon-investment",
    title: "Accounting Outsourcing Services",
    points: [
      "Accurate bookkeeping and financial record maintenance",
      "Salary disbursement with PF, ESI, and TDS compliance",
      "Expert handling of GST, TDS, and income tax returns",
      "Reduce operational cost and improve financial efficiency",
      "Dedicated compliance management for growing businesses"
    ],
    route: "account-outsourcing",
    color: "linear-gradient(135deg, #11998e 0%, #38ef7d 100%)"
  },
  {
    icon: "flaticon-inspiration",
    title: "Business Health Check-Up Services",
    points: [
      "Assess workflow, productivity, and efficiency metrics",
      "Analyze cash flow, profitability, and cost structure",
      "SWOT analysis and performance diagnostics",
      "Design risk mitigation plans",
      "Build custom growth roadmaps"
    ],
    route: "company-helth-checkup",
    color: "linear-gradient(135deg, #FF416C 0%, #FF4B2B 100%)"
  },
  {
    icon: "flaticon-layers",
    title: "E-Cashbook – Smart Accounting Software",
    points: [
      "User-friendly dashboard with intuitive navigation",
      "Real-time income, expense, and transaction tracking",
      "Automated financial report generation",
      "Tax and compliance-ready features",
      "Specially designed for MSMEs & startups"
    ],
    route: "e-cashbook",
    color: "linear-gradient(135deg, #43cea2 0%, #185a9d 100%)"
  },
  {
    icon: "flaticon-investment",
    title: "Company Funding Solutions",
    points: [
      "Assess funding readiness and capital requirement",
      "Connect with lenders, investors, and VCs",
      "Pitch decks, financial projections, and term sheet support",
      "Assistance for MSME/Startup India scheme-based funding",
      "End-to-end documentation & compliance"
    ],
    route: "details-project-report",
    color: "linear-gradient(135deg, #667eea 0%, #764ba2 100%)"
  },
  {
    icon: "flaticon-calculator",
    title: "Management Consulting Services",
    points: [
      "Strategic growth planning and roadmap development",
      "Organizational restructuring and leadership enablement",
      "Workflow optimization for efficiency",
      "Expert-led transition and change management",
      "Innovation strategies for performance improvement"
    ],
    route: "management-consulting",
    color: "linear-gradient(135deg, #0061ff 0%, #60efff 100%)"
  },
  {
    icon: "flaticon-inspiration",
    title: "Company Incorporation & Business Setup",
    points: [
      "Business name reservation and legal registration",
      "MOA & AOA drafting and filing",
      "PAN, TAN, DSC, DIN processing",
      "GST, MSME and other statutory registrations",
      "Advisory on post-incorporation compliance"
    ],
    route: "pvt",
    color: "linear-gradient(135deg, #f83600 0%, #f9d423 100%)"
  },
  {
    icon: "flaticon-calculator",
    title: "GST Registration & Return Filing Services",
    points: [
      "Hassle-free GST registration for startups and MSMEs",
      "Timely monthly/quarterly GST return filings",
      "Accurate GSTR-1, GSTR-3B and reconciliation",
      "Amendments, cancellations, and corrections support",
      "Avoid penalties with expert guidance"
    ],
    route: "gst",
    color: "linear-gradient(135deg, #1a2a6c 0%, #b21f1f 50%, #fdbb2d 100%)"
  },
  {
    icon: "flaticon-layers",
    title: "Licensing & Registration Services",
    points: [
      "Trade & business license application and renewal",
      "UDYAM, ROC, FSSAI, Shops & Establishment registrations",
      "Legal documentation, filing, and follow-up",
      "End-to-end compliance with industry norms"
    ],
    route: "trade",
    color: "linear-gradient(135deg, #00b09b 0%, #96c93d 100%)"
  },
  {
    icon: "flaticon-investment",
    title: "Personal & Business Tax Consultation",
    points: [
      "Personalized income tax planning and savings optimization",
      "Strategic tax advisory for business entities",
      "Accurate and timely tax filing services",
      "Minimize legal liabilities and enhance compliance",
      "Custom support for individuals, startups, and enterprises"
    ],
    route: "business-tax-filling",
    color: "linear-gradient(135deg, #4568dc 0%, #b06ab3 100%)"
  },
  {
    icon: "flaticon-calculator",
    title: "Project Reports & Financing Solutions",
    points: [
      "Draft detailed and bank-compliant project reports",
      "Conduct financial feasibility studies",
      "Assistance in securing bank loans and MSME financing",
      "Tailored financing strategies by business sector",
      "Documentation and liaison services"
    ],
    route: "details-project-report",
    color: "linear-gradient(135deg, #3494e6 0%, #ec6ead 100%)"
  },
  {
    icon: "flaticon-inspiration",
    title: "Property Compliance & Regulatory Support",
    points: [
      "Property valuation and title verification",
      "End-to-end property registration and legal due diligence",
      "Regulatory approvals for property transactions",
      "Stamp duty consultation and transparent cost guidance",
      "Residential & commercial coverage across West Bengal"
    ],
    route: "property-registration",
    color: "linear-gradient(135deg, #5614b0 0%, #dbd65c 100%)"
  },
  {
    icon: "flaticon-layers",
    title: "Legal Advisory & Cybercrime Protection Services",
    points: [
      "Cyber law compliance and data privacy consultation",
      "Drafting cybersecurity policies and legal clauses",
      "Support for online fraud reporting and FIR filing",
      "Digital evidence guidance & documentation",
      "Cyber-risk awareness training for teams"
    ],
    route: "legal-notice",
    color: "linear-gradient(135deg, #2c3e50 0%, #4ca1af 100%)"
  },
  {
    icon: "flaticon-investment",
    title: "Strategic Company Legal Advisory Support",
    points: [
      "ROC compliance, resolutions, and secretarial filings",
      "MOA, AOA, NDAs, agreements, and legal drafting",
      "Structuring advisory and regulatory audits",
      "Dispute resolution and legal representation",
      "Business governance and legal risk management"
    ],
    route: "business-contract",
    color: "linear-gradient(135deg, #396afc 0%, #2948ff 100%)"
  }
  ];

  let currentIndex = 0;
  const totalServices = services.length;
  const unifiedServiceTheme = "linear-gradient(135deg, #2367f3 0%, #4f46e5 100%)";
  let isSwitching = false;

  // DOM elements
  const activeCard = document.getElementById('activeServiceCard');
  const activeIcon = document.getElementById('activeIcon');
  const activeTitle = document.getElementById('activeTitle');
  const activeContent = document.getElementById('activeContent');
  const activeLink = document.getElementById('activeLink');
  const currentServiceIndex = document.getElementById('currentServiceIndex');
  const totalServicesElement = document.getElementById('totalServices');
  const prevBtn = document.getElementById('prevService');
  const nextBtn = document.getElementById('nextService');
  const serviceIndicators = document.getElementById('serviceIndicators');

  // Initialize service indicators
  totalServicesElement.textContent = totalServices;

  // Create mobile-responsive indicators for all 14 services
  services.forEach((service, index) => {
    const indicator = document.createElement('span');
    indicator.className = 'indicator';
    indicator.style.width = 'clamp(10px, 2vw, 12px)';
    indicator.style.height = 'clamp(10px, 2vw, 12px)';
    indicator.style.borderRadius = '50%';
    indicator.style.background = index === 0 ? '#2575fc' : '#e0e0e0';
    indicator.style.transition = 'all 0.3s ease';
    indicator.style.cursor = 'pointer';
    indicator.style.boxShadow = '0 2px 5px rgba(0,0,0,0.15)';
    indicator.style.position = 'relative';
    indicator.style.margin = '0 clamp(1px, 0.5vw, 2px)';
    indicator.style.minWidth = '44px'; // Minimum touch target for mobile
    indicator.style.minHeight = '44px';
    indicator.style.display = 'flex';
    indicator.style.alignItems = 'center';
    indicator.style.justifyContent = 'center';

    // Create mobile-responsive mini tooltip
    const tooltip = document.createElement('span');
    tooltip.textContent = service.title.split(' ')[0]; // First word of service title
    tooltip.style.position = 'absolute';
    tooltip.style.bottom = 'clamp(18px, 4vw, 20px)';
    tooltip.style.left = '50%';
    tooltip.style.transform = 'translateX(-50%) scale(0.8)';
    tooltip.style.background = '#333';
    tooltip.style.color = 'white';
    tooltip.style.padding = 'clamp(2px, 0.5vw, 3px) clamp(6px, 1.5vw, 8px)';
    tooltip.style.borderRadius = '4px';
    tooltip.style.fontSize = 'clamp(9px, 2vw, 10px)';
    tooltip.style.whiteSpace = 'nowrap';
    tooltip.style.opacity = '0';
    tooltip.style.transition = 'all 0.3s ease';
    tooltip.style.pointerEvents = 'none';
    tooltip.style.zIndex = '10';

    // Add tooltip to indicator
    indicator.appendChild(tooltip);

    // Add full tooltip with service name
    indicator.title = service.title;

    // Add hover effect
    indicator.addEventListener('mouseenter', () => {
      if (currentIndex !== index) {
        indicator.style.transform = 'scale(1.4)';
        indicator.style.background = '#a0c0ff';
        tooltip.style.opacity = '1';
        tooltip.style.transform = 'translateX(-50%) scale(1)';
      }
    });

    indicator.addEventListener('mouseleave', () => {
      if (currentIndex !== index) {
        indicator.style.transform = 'scale(1)';
        indicator.style.background = '#e0e0e0';
        tooltip.style.opacity = '0';
        tooltip.style.transform = 'translateX(-50%) scale(0.8)';
      }
    });

    indicator.addEventListener('click', () => {
      updateService(index, true);
    });

    serviceIndicators.appendChild(indicator);
  });

  // Update service display
  function updateService(index, animate = true) {
    if (isSwitching || index < 0 || index >= totalServices) {
      return;
    }

    const direction = index >= currentIndex ? 'next' : 'prev';

    const applyServiceState = () => {
      const service = services[index];

      // Add overlay to improve text contrast
      const overlayColor = 'linear-gradient(145deg, rgba(8, 20, 43, 0.18), rgba(8, 20, 43, 0.06)), ' + unifiedServiceTheme;

      // Update active card background with overlay for better text contrast
      activeCard.style.background = overlayColor;

      // Add text shadow for better readability
      activeTitle.style.textShadow = '0 2px 4px rgba(0, 0, 0, 0.3)';

      // Update icon with glow effect
      activeIcon.className = service.icon;
      activeIcon.style.filter = 'drop-shadow(0 0 8px rgba(255, 255, 255, 0.6))';

      // Update title
      activeTitle.textContent = service.title;

      // Update content with mobile-responsive styling for all services
      let pointsHTML = '<ul style="list-style: none; padding-left: 0; margin-bottom: clamp(18px, 3.6vw, 24px);">';
      service.points.forEach(point => {
        pointsHTML += `
                            <li style="margin-bottom: clamp(12px, 2.5vw, 16px); display: flex; align-items: flex-start;">
                  <span style="background: rgba(255,255,255,0.4); min-width: clamp(20px, 3.6vw, 24px); height: clamp(20px, 3.6vw, 24px); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; margin-right: clamp(8px, 1.5vw, 12px); font-size: clamp(10px, 1.8vw, 12px); box-shadow: 0 3px 10px rgba(0,0,0,0.1); flex-shrink: 0;">✓</span>
                  <span style="font-size: clamp(12px, 2.6vw, 15px); line-height: 1.45; font-weight: 500;">${point}</span>
                            </li>
                        `;
      });
      pointsHTML += '</ul>';

      // Create the route URL using Laravel's route function
      let routeUrl = '';
      switch (service.route) {
        case 'services':
          routeUrl = "{{ route('services') }}";
          break;
        case 'account-outsourcing':
          routeUrl = "{{ route('account-outsourcing') }}";
          break;
        case 'company-helth-checkup':
          routeUrl = "{{ route('company-helth-checkup') }}";
          break;
        case 'e-cashbook':
          routeUrl = "{{ route('e-cashbook') }}";
          break;
        case 'details-project-report':
          routeUrl = "{{ route('details-project-report') }}";
          break;
        case 'management-consulting':
          routeUrl = "{{ route('management-consulting') }}";
          break;
        case 'pvt':
          routeUrl = "{{ route('pvt') }}";
          break;
        case 'gst':
          routeUrl = "{{ route('gst') }}";
          break;
        case 'trade':
          routeUrl = "{{ route('trade') }}";
          break;
        case 'business-tax-filling':
          routeUrl = "{{ route('business-tax-filling') }}";
          break;
        case 'property-registration':
          routeUrl = "{{ route('property-registration') }}";
          break;
        case 'legal-notice':
          routeUrl = "{{ route('legal-notice') }}";
          break;
        case 'business-contract':
          routeUrl = "{{ route('business-contract') }}";
          break;
        default:
          routeUrl = "{{ route('services') }}";
      }

      pointsHTML += `
    <a href="${routeUrl}" class="details-link" style="color: white; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; background: rgba(255,255,255,0.25); padding: clamp(9px, 1.8vw, 12px) clamp(16px, 3.3vw, 24px); border-radius: 50px; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(0,0,0,0.15); backdrop-filter: blur(5px); font-size: clamp(12px, 2.4vw, 14px);">
      See Details <i class="fas fa-arrow-right" style="margin-left: clamp(8px, 1.5vw, 12px);"></i>
    </a>
    `;

      activeContent.innerHTML = pointsHTML;
      activeContent.classList.remove('content-animate');
      requestAnimationFrame(() => {
        activeContent.classList.add('content-animate');
      });

      // Update index counter
      currentServiceIndex.textContent = index + 1;

      // Update indicators
      const indicators = serviceIndicators.querySelectorAll('.indicator');
      indicators.forEach((indicator, i) => {
        if (i === index) {
          indicator.style.background = '#2575fc';
          indicator.style.transform = 'scale(1.5)';
          indicator.style.boxShadow = '0 0 0 4px rgba(37, 117, 252, 0.3)';

          // Show tooltip for active indicator
          const tooltip = indicator.querySelector('span');
          if (tooltip) {
            tooltip.style.opacity = '1';
            tooltip.style.transform = 'translateX(-50%) scale(1)';
          }
        } else {
          indicator.style.background = '#e0e0e0';
          indicator.style.transform = 'scale(1)';
          indicator.style.boxShadow = '0 2px 5px rgba(0,0,0,0.15)';

          // Hide tooltip for inactive indicators
          const tooltip = indicator.querySelector('span');
          if (tooltip) {
            tooltip.style.opacity = '0';
            tooltip.style.transform = 'translateX(-50%) scale(0.8)';
          }
        }
      });

      // Update current index
      currentIndex = index;

      // Update button states
      prevBtn.style.opacity = index === 0 ? '0.5' : '1';
      prevBtn.style.background = index === 0 ? '#f5f5f5' : '#f5f5f5';

      nextBtn.style.opacity = index === totalServices - 1 ? '0.5' : '1';
      nextBtn.style.background = index === totalServices - 1 ? '#f5f5f5' : '#2575fc';
      nextBtn.querySelector('i').style.color = index === totalServices - 1 ? '#2575fc' : 'white';
    };

    if (!animate) {
      applyServiceState();
      return;
    }

    isSwitching = true;
    activeCard.classList.remove('is-leaving-next', 'is-leaving-prev', 'is-entering-next', 'is-entering-prev');
    activeCard.classList.add(`is-leaving-${direction}`);

    setTimeout(() => {
      applyServiceState();
      activeCard.classList.remove(`is-leaving-${direction}`);
      activeCard.classList.add(`is-entering-${direction}`);

      setTimeout(() => {
        activeCard.classList.remove(`is-entering-${direction}`);
        isSwitching = false;
      }, 520);
    }, 220);
  }

  // Event listeners for navigation
  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      updateService(currentIndex - 1, true);
    }
  });

  nextBtn.addEventListener('click', () => {
    if (currentIndex < totalServices - 1) {
      updateService(currentIndex + 1, true);
    }
  });

  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft' && currentIndex > 0) {
      updateService(currentIndex - 1, true);
    } else if (e.key === 'ArrowRight' && currentIndex < totalServices - 1) {
      updateService(currentIndex + 1, true);
    }
  });

  // Initialize with first service
  updateService(0, false);

  // Auto-slide functionality
  let slideInterval;
  let progressInterval;
  let isPaused = false;
  const slideDuration = 10000; // 10 seconds
  const progressBar = document.getElementById('progressBar');
  const autoSlideStatus = document.getElementById('autoSlideStatus');

  // Start auto-sliding
  function startAutoSlide() {
    // Reset and start progress bar
    resetProgressBar();

    // Set the main slide interval
    slideInterval = setInterval(() => {
      if (!isPaused) {
        // Move to next slide or loop back to first
        const nextIndex = (currentIndex + 1) % totalServices;
        updateService(nextIndex, true);
        // Reset progress bar for next slide
        resetProgressBar();
      }
    }, slideDuration);
  }

  // Progress bar animation
  function resetProgressBar() {
    // Clear any existing interval
    if (progressInterval) {
      clearInterval(progressInterval);
    }

    // Reset progress bar
    progressBar.style.width = '0%';

    // Animate progress bar
    const startTime = Date.now();
    progressInterval = setInterval(() => {
      if (!isPaused) {
        const elapsed = Date.now() - startTime;
        const progress = Math.min(elapsed / slideDuration * 100, 100);
        progressBar.style.width = `${progress}%`;

        if (progress >= 100) {
          clearInterval(progressInterval);
        }
      }
    }, 100); // Update every 100ms for smooth animation
  }

  // Pause sliding on hover
  activeCard.addEventListener('mouseenter', () => {
    isPaused = true;
    autoSlideStatus.textContent = 'Paused';
  });

  activeCard.addEventListener('mouseleave', () => {
    isPaused = false;
    autoSlideStatus.textContent = 'Auto';
  });

  // Also pause on navigation hover
  document.querySelector('.service-navigation').addEventListener('mouseenter', () => {
    isPaused = true;
    autoSlideStatus.textContent = 'Paused';
  });

  document.querySelector('.service-navigation').addEventListener('mouseleave', () => {
    isPaused = false;
    autoSlideStatus.textContent = 'Auto';
  });

  // Start auto-sliding
  startAutoSlide();

  // Add hover effects
  const detailsLinks = document.querySelectorAll('.details-link');
  detailsLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
      link.style.background = 'rgba(255,255,255,0.3)';
    });

    link.addEventListener('mouseleave', () => {
      link.style.background = 'rgba(255,255,255,0.2)';
    });
  });

  // Add hover effects to navigation buttons
  prevBtn.addEventListener('mouseenter', () => {
    if (currentIndex > 0) {
      prevBtn.style.background = '#e0e0e0';
    }
  });

  prevBtn.addEventListener('mouseleave', () => {
    prevBtn.style.background = currentIndex === 0 ? '#f5f5f5' : '#f5f5f5';
  });

  nextBtn.addEventListener('mouseenter', () => {
    if (currentIndex < totalServices - 1) {
      nextBtn.style.background = '#1b5dc9';
    }
  });

  nextBtn.addEventListener('mouseleave', () => {
    nextBtn.style.background = currentIndex === totalServices - 1 ? '#f5f5f5' : '#2575fc';
  });

  // Enhanced touch swipe functionality for all 14 services
  let touchStartX = 0;
  let touchEndX = 0;
  let touchStartY = 0;
  let touchEndY = 0;

  activeCard.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
    touchStartY = e.changedTouches[0].screenY;
  });

  activeCard.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    touchEndY = e.changedTouches[0].screenY;
    handleSwipe();
  });

  function handleSwipe() {
    const swipeDistanceX = touchStartX - touchEndX;
    const swipeDistanceY = Math.abs(touchStartY - touchEndY);

    // Only handle horizontal swipes (ignore vertical scrolling)
    if (swipeDistanceY < 100) {
      if (swipeDistanceX > 50 && currentIndex < totalServices - 1) {
        // Swipe left (next service)
        updateService(currentIndex + 1, true);
      } else if (swipeDistanceX < -50 && currentIndex > 0) {
        // Swipe right (previous service)
        updateService(currentIndex - 1, true);
      }
    }
  }
});