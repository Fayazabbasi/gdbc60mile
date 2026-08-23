@extends('frontend.layouts.app')
@section('title','Admissions - 60 Mile Degree College')
@section('content')

 

   

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Admissions</h1>
              <p class="mb-0">
                Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo
                odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum
                debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat
                ipsum dolorem.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Admissions</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Admissions Section -->
    <section id="admissions" class="admissions section">

      <div class="container">

        <div class="admission-hero">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <div class="hero-content">
                <h2>Begin Your Academic Journey</h2>
                <p>Discover a transformative educational experience where innovation meets tradition. Our admissions process is designed to identify passionate learners ready to make their mark on the world.</p>
                <!-- <div class="hero-stats">
                  <div class="stat-item">
                    <span class="stat-number">89%</span>
                    <span class="stat-label">Acceptance Rate</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number">$28K</span>
                    <span class="stat-label">Average Financial Aid</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number">15:1</span>
                    <span class="stat-label">Student-Faculty Ratio</span>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="col-lg-4">
              <div class="hero-image">
                <img src="{{ asset('storage/students-3.png')}}" class="img-fluid" alt="Students">
                <div class="floating-badge">
                  <i class="bi bi-mortarboard"></i>
                  <span>Join 12,000+ Alumni</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="application-timeline">
          <div class="timeline-header">
            <h3>Application Process</h3>
            <p>Four simple steps to start your journey with us</p>
          </div>
          <div class="timeline-container">
            <div class="timeline-item">
              <div class="timeline-marker">
                <i class="bi bi-file-earmark-text"></i>
              </div>
              <div class="timeline-content">
                <h4>Submit Application</h4>
                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed.</p>
                <span class="timeline-duration">2-3 days</span>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-marker">
                <i class="bi bi-files"></i>
              </div>
              <div class="timeline-content">
                <h4>Document Review</h4>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec rutrum congue leo eget malesuada.</p>
                <span class="timeline-duration">5-7 days</span>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-marker">
                <i class="bi bi-chat-dots"></i>
              </div>
              <div class="timeline-content">
                <h4>Assessment Interview</h4>
                <p>Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.</p>
                <span class="timeline-duration">1-2 weeks</span>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-marker">
                <i class="bi bi-check-circle"></i>
              </div>
              <div class="timeline-content">
                <h4>Final Decision</h4>
                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et.</p>
                <span class="timeline-duration">2-3 weeks</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row gy-5 mt-4">
          <div class="col-lg-6">
            <div class="requirements-checklist">
              <h3>Admission Requirements</h3>
              <div class="checklist-grid">
                <div class="checklist-item">
                  <div class="check-icon">
                    <i class="bi bi-check2"></i>
                  </div>
                  <div class="check-content">
                    <h5>Academic Transcripts</h5>
                    <p>Official high school or college records</p>
                  </div>
                </div>
                <div class="checklist-item">
                  <div class="check-icon">
                    <i class="bi bi-check2"></i>
                  </div>
                  <div class="check-content">
                    <h5>Standardized Tests</h5>
                    <p>SAT, ACT, or equivalent scores</p>
                  </div>
                </div>
                <div class="checklist-item">
                  <div class="check-icon">
                    <i class="bi bi-check2"></i>
                  </div>
                  <div class="check-content">
                    <h5>Personal Statement</h5>
                    <p>500-800 word essay on your goals</p>
                  </div>
                </div>
                <div class="checklist-item">
                  <div class="check-icon">
                    <i class="bi bi-check2"></i>
                  </div>
                  <div class="check-content">
                    <h5>Recommendation Letters</h5>
                    <p>Two letters from academic references</p>
                  </div>
                </div>
                <div class="checklist-item">
                  <div class="check-icon">
                    <i class="bi bi-check2"></i>
                  </div>
                  <div class="check-content">
                    <h5>Portfolio (if applicable)</h5>
                    <p>For art, design, and creative programs</p>
                  </div>
                </div>
                <div class="checklist-item">
                  <div class="check-icon">
                    <i class="bi bi-check2"></i>
                  </div>
                  <div class="check-content">
                    <h5>Application Fee</h5>
                    <p>$75 processing fee (waived for qualified students)</p>
                  </div>
                </div>
              </div>
              <div class="international-note">
                <i class="bi bi-globe"></i>
                <div>
                  <h6>International Students</h6>
                  <p>Additional requirements include English proficiency scores (TOEFL/IELTS) and visa documentation.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="tuition-overview">
              <h3>Investment in Your Future</h3>
              <div class="tuition-cards">
                <div class="tuition-card domestic">
                  <div class="card-header">
                    <h4>Domestic Students</h4>
                    <span class="program-type">Per Academic Year</span>
                  </div>
                  <div class="pricing-details">
                    <div class="price-item">
                      <span class="label">Undergraduate Tuition</span>
                      <span class="amount">$34,200</span>
                    </div>
                    <div class="price-item">
                      <span class="label">Graduate Programs</span>
                      <span class="amount">$41,800</span>
                    </div>
                    <div class="price-item">
                      <span class="label">Room &amp; Board</span>
                      <span class="amount">$14,500</span>
                    </div>
                  </div>
                </div>
                <div class="tuition-card international">
                  <div class="card-header">
                    <h4>International Students</h4>
                    <span class="program-type">Per Academic Year</span>
                  </div>
                  <div class="pricing-details">
                    <div class="price-item">
                      <span class="label">Undergraduate Tuition</span>
                      <span class="amount">$44,700</span>
                    </div>
                    <div class="price-item">
                      <span class="label">Graduate Programs</span>
                      <span class="amount">$52,300</span>
                    </div>
                    <div class="price-item">
                      <span class="label">Room &amp; Board</span>
                      <span class="amount">$14,500</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="financial-support">
                <h5>Financial Support Available</h5>
                <p>Over 80% of students receive financial assistance through scholarships, grants, and work-study programs. Merit scholarships range from $8,000 to full tuition coverage.</p>
                <a href="#" class="support-link">Explore Financial Aid Options <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="deadlines-showcase mt-5">
          <div class="showcase-header">
            <h3>Key Dates &amp; Deadlines</h3>
            <p>Stay on track with these important milestones for the upcoming academic year</p>
          </div>
          <div class="deadlines-slider">
            <div class="deadline-card priority">
              <div class="date-badge">Oct 15</div>
              <h4>Early Action</h4>
              <p>Non-binding early application deadline with priority consideration</p>
              <div class="card-footer">Priority Deadline</div>
            </div>
            <div class="deadline-card">
              <div class="date-badge">Jan 1</div>
              <h4>Regular Decision</h4>
              <p>Standard application deadline for Fall semester admission</p>
              <div class="card-footer">Final Deadline</div>
            </div>
            <div class="deadline-card">
              <div class="date-badge">Feb 15</div>
              <h4>Scholarship Applications</h4>
              <p>Complete FAFSA and scholarship applications for maximum aid</p>
              <div class="card-footer">Financial Aid</div>
            </div>
            <div class="deadline-card">
              <div class="date-badge">May 1</div>
              <h4>Decision Day</h4>
              <p>Confirm enrollment and submit deposit to secure your place</p>
              <div class="card-footer">Enrollment</div>
            </div>
          </div>
        </div>

        <div class="contact-section mt-5">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <div class="contact-content">
                <h3>Connect with Our Admissions Team</h3>
                <p>Have questions about your application or need personalized guidance? Our dedicated admissions counselors are here to help you navigate the process and make informed decisions about your academic future.</p>
                <form action="forms/contact.php" class="inquiry-form php-email-form">
                  <div class="form-group-row">
                    <div class="form-group">
                      <input type="text" name="name" placeholder="Full Name*" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" placeholder="Email Address*" required="">
                    </div>
                  </div>
                  <div class="form-group-row">
                    <div class="form-group">
                      <input type="tel" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                      <select name="subject" required="">
                        <option selected="" disabled="">Program Interest*</option>
                        <option>Undergraduate</option>
                        <option>Graduate</option>
                        <option>Doctorate</option>
                        <option>Certificate</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group full-width">
                    <textarea name="message" rows="5" placeholder="Tell us about your interests and goals..."></textarea>
                  </div>
                  <div class="form-actions">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your inquiry has been sent. Thank you!</div>
                    <button type="submit" class="submit-btn">Send Inquiry</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="visit-invitation">
                <div class="visit-image">
                  <img src="{{ asset('storage/campus-8.png')}}" class="img-fluid" alt="Campus" loading="lazy">
                  <div class="visit-overlay">
                    <i class="bi bi-play-circle"></i>
                    <span>Virtual Campus Tour</span>
                  </div>
                </div>
                <div class="visit-details">
                  <h4>Experience Our Campus</h4>
                  <div class="visit-options">
                    <div class="visit-option">
                      <i class="bi bi-calendar3"></i>
                      <div>
                        <span class="option-title">In-Person Tours</span>
                        <span class="option-detail">Monday - Friday, 10 AM &amp; 2 PM</span>
                      </div>
                    </div>
                    <div class="visit-option">
                      <i class="bi bi-camera-video"></i>
                      <div>
                        <span class="option-title">Virtual Experience</span>
                        <span class="option-detail">Interactive online campus tours available 24/7</span>
                      </div>
                    </div>
                    <div class="visit-option">
                      <i class="bi bi-people"></i>
                      <div>
                        <span class="option-title">Information Sessions</span>
                        <span class="option-detail">Meet with admissions counselors and current students</span>
                      </div>
                    </div>
                  </div>
                  <a href="#" class="schedule-btn">Schedule Your Visit</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Admissions Section -->

  

@endsection