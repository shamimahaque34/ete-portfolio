@extends('frontend.master')

@section('body')
 <!--Page Title Starts Here-->
 <div class="container section-padding">
    <div class="row">
      <div class="col-md-12 page-title">
        <h3>ABOUT ME</h3>
      </div>
    </div>
  </div>
  <!--Page Title Ends Here-->

  <!--About-Me Starts Here-->
  <div class="container about">
    <div class="row">
      <div class="col-md-4 about-img">
        <img src="{{ asset('/') }}frontend/assets/images/profile.jpeg" alt="profile" class="img-fluid" />
      </div>

      <div class="col-md-8 about-content">
        <ul class="nav nav-pills about-tab" id="pills-tab" role="tablist">
          <li class="nav-item about-item">
            <a
              class="nav-link active"
              id="pills-home-tab"
              data-toggle="pill"
              href="#pills-home"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
            >
              Profile
            </a>
          </li>
          <li class="nav-item about-item">
            <a
              class="nav-link"
              id="pills-profile-tab"
              data-toggle="pill"
              href="#pills-profile"
              role="tab"
              aria-controls="pills-profile"
              aria-selected="false"
            >
              Skills
            </a>
          </li>
          <li class="nav-item about-item">
            <a
              class="nav-link"
              id="pills-contact-tab"
              data-toggle="pill"
              href="#pills-contact"
              role="tab"
              aria-controls="pills-contact"
              aria-selected="false"
            >
              Contact
            </a>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
          <!--Tab-One Starts Here-->
          <div
            class="tab-pane fade show active tab-detail"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <h1 class="pt-25">Shamima Haque</h1>
            <p>
              I'm working as a web developer with more than 3years of
              experience of Local and International online marketplace leading
              website design projects, for the customers. This year, I've
              joined an IT firm named Novus Interactive. Besides, I'm training
              some students under my sector for 2 months. I'm focused on
              creating clean, robust code with exceptional security and also
              able to achieve compatibility targets.
            </p>

            <a href="{{ asset('/') }}frontend/assets/images/resume.pdf" target="_blank">
              <button type="button" class="main-button">My Resume</button>
            </a>

            <!-- Button trigger modal Starts Here-->
            <button
              type="button"
              class="another-button"
              data-toggle="modal"
              data-target="#exampleModal"
            >
              Hire Me
            </button>
            <!-- Button trigger modal Ends Here-->

            <!-- Modal Starts Here -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      Hire Me
                    </h5>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="name">Your name</label>
                          <input
                            type="text"
                            name="name"
                            placeholder="Enter your name"
                            class="form-control"
                          />
                        </div>

                        <div class="form-group">
                          <label for="email">Your email</label>
                          <input
                            type="text"
                            name="email"
                            placeholder="Enter your email"
                            class="form-control"
                          />
                        </div>

                        <div class="form-group">
                          <label for="budget">What is your budget?</label>
                          <select name="budget" class="form-control">
                            <option value="">Select your budget</option>
                            <option value="500">$100 to $500</option>
                            <option value="1000">$500 to $1000</option>
                            <option value="5000">$1000 to $5000</option>
                            <option value="5000">$5000+</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="message">Your message</label>
                          <textarea
                            name="message"
                            rows="4"
                            placeholder="Enter your message"
                            class="form-control"
                          ></textarea>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button
                          type="button"
                          class="main-button"
                          data-dismiss="modal"
                        >
                          Close
                        </button>
                        <button type="submit" class="another-button">
                          Send Offer
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Ends Here -->
          </div>
          <!--Tab-One Ends Here-->

          <!-- Tab-Two Starts Here -->
          <div
            class="tab-pane fade tab-detail"
            id="pills-profile"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
          >
            <div class="skill pt-25">
              <h6>Front-End</h6>
              <div class="skill-content">
                <span>HTML5</span>
                <span>CSS3</span>
                <span>Bootstrap</span>
                <span>SASS</span>
                <span>JavaScript</span>
                <span>jQuery</span>
              </div>
            </div>

            <div class="skill">
              <h6>Server</h6>
              <div class="skill-content">
                <span>Cpanel</span>
                <span>SSL</span>
                <span>Domain &amp; Hosting Configuration</span>
              </div>
            </div>

            <div class="skill">
              <h6>Others</h6>
              <div class="skill-content">
                <span>WordPress</span>
                <span>Github</span>
                <span>WEB Image Optimization</span>
                <span>Adobe Photoshop</span>
                <span>Project Planning</span>
                <span>Client Handling</span>
              </div>
            </div>
          </div>
          <!-- Tab-Two Ends Here -->

          <!-- Tab-Three Starts Here -->
          <div
            class="tab-pane fade"
            id="pills-contact"
            role="tabpanel"
            aria-labelledby="pills-contact-tab"
          >
            <div class="pt-25">
              <div class="tab-connect">
                <div class="tab-connect-info">
                  <strong>Phone</strong>
                  <p>+880 1313 924 759</p>
                </div>

                <div class="tab-connect-info">
                  <strong>Email</strong>
                  <p>haqueshamima34@gmail.com</p>
                </div>

                <div class="tab-connect-info">
                  <strong>Address</strong>
                  <p>68/8-B,Zigatola,Dhanmondi,Dhaka-1209,Bangladesh</p>
                </div>

                <div class="tab-connect-info">
                  <ul>
                    <li>
                      <a
                        href="https://www.facebook.com/shamima.haque.92560"
                        target="_blank"
                      >
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>

                    <li>
                      <a
                        href="https://www.linkedin.com/in/shamima-haque-dev"
                        target="_blank"
                      >
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>

                    <li>
                      <a
                        href="https://github.com/shamimahaque34"
                        target="_blank"
                      >
                        <i class="fab fa-github"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Tab-Three Ends Here -->
        </div>
      </div>
    </div>
  </div>
  <!--About-Me Ends Here-->

@endsection
