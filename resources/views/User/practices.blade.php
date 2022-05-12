<!DOCTYPE html>
<html lang="en">
    @include('User.files.style_files')
</html>
<body class="aos-all" id="transcroller-body">

    @include('layouts.User.nav_bar')

  <div class="main_content top-fixed">
    <input type="checkbox" id="target-modal">
    <div class="modal">
      <div class="modal-inner">
        <label class="close-modal" for="target-modal"></label>
        <div class="contact" id="contact">
          <form class="contact-form" action="#" id="contact">
            <h5 class="title">Contact Us</h5>
            <p class="description mb-5">Feel free to contact us if you need any assistance, any help or another question.</p>
            <Fieldset>
              <input type="text" id="name" placeholder="Your name" required autofocus tabindex="1">
            </Fieldset>
            <Fieldset>
              <input type="text" id="email" placeholder="Your email" required tabindex="2">
            </Fieldset>
            <Fieldset>
              <textarea placeholder="Your message" required tabindex="3"> </textarea>
            </Fieldset>
            <div class="button-group d-flex-centered"><a class="btn btn-lg btn-primary send_mail">Send Message</a></div>
          </form>
        </div>
      </div>
      <label class="overlay-modal" for="target-modal"></label>
    </div>
    <section class="lg-padding" id="widget">
      <div class="no-padding" id="widget_information">
        <div class="aos-item" data-aos="fade-up" data-aos-duration="350" data-aos-delay="0" data-aos-easing="ease-out" data-aos-anchor-placement="top-bottom">
          <div class="aos-item__inner">
            <div class="container container-header">
              <div class="subtitle"><span>How many people die from drug use?</span></div>
            </div>
            <div class="container">
              <div class="quote pt-3">
                <blockquote>
                  <p class="pt-1">The CDC reports that in 2016, the rate of overdose deaths was more than three times the rate in 1999.6 The pattern of drugs involved in drug overdose deaths has changed in recent years. The rate of drug overdose deaths involving synthetic opioids other than methadone doubled from 3.1 per 100,000 in 2015 to 6.2 in 2016, with about half of all overdose deaths being related to the synthetic opioid fentanyl, which is cheap to get and added to a variety of illicit drugs.</p>
                </blockquote>
              </div>
              <div class="text text-gray"><small class="italic did-you-know">For more information about drug overdose rates, please go to <a href="https://cdc.gov/drugoverdose/data">cdc.gov/drugoverdose/data</a></small></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="lg-padding bg-gray" id="person_centered">
      <div class="aos-item" data-aos="fade-up" data-aos-duration="350" data-aos-delay="0" data-aos-easing="ease-out" data-aos-anchor-placement="top-bottom">
        <div class="aos-item__inner">
          <div class="container">
            <div class="container">
              <div class="split">
                <div class="content">
                  <div class="description left margin text-dark">
                    <div class="container-header">
                      <div class="title">
                        <h2 class="subtitle">Person-Centered Approach</h2>
                      </div>
                    </div>
                    <div class="text mt-4">
                      <p>Person-centered approach is a judgment free zone. A no-judgment environment is important when an individual dealing with substance use disorder is on the path to recovery. Using drugs and alcohol is damaging emotionally and that often involves past trauma that the participant may not want to talk about.</p>
                    </div>
                  </div>
                </div>
                <div class="content d-flex-centered">
                  <button id="button"> <i class="fa fa-play" aria-hidden="true"></i></button>
                  <div class="media"><img src="src/img/uploads/IMG_1882.jpg"></div>
                </div>
              </div>
              <div class="content text text-dark">
                <p>Take a moment to listen to Drug Court Team members talk about the importance of a person-centered approach in working with clients to help them achieve their full potential.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="lg-padding" id="widget">
      <div class="no-padding" id="widget_information">
        <div class="aos-item" data-aos="fade-up" data-aos-duration="350" data-aos-delay="0" data-aos-easing="ease-out" data-aos-anchor-placement="top-bottom">
          <div class="aos-item__inner">
            <div class="container container-header">
              <div class="subtitle">
                <h2></h2>
              </div>
            </div>
            <div class="container">
              <div class="quote">
                <blockquote>
                  <p class="mt-1">A drug court coordinator oversees the activity of the team, conducts quality assurance of each  team member, maintains client data, and many other functions. </p>
                </blockquote>
              </div>
              <div class="text text-gray"><small class="italic did-you-know">Did you Know</small></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="lg-padding bg-gray2" id="understanding_trauma">
      <div class="aos-item" data-aos="fade-down" data-aos-duration="250" data-aos-delay="0" data-aos-easing="ease-out" data-aos-anchor-placement="top-bottom">
        <div class="aos-item__inner">
          <div class="container">
            <div class="container container-header">
              <div class="title"><span class="subtitle">Understanding Trauma</span></div>
            </div>
            <div class="container">
              <div class="container card">
                <div class="text-dark">
                  <p class="bold">Trauma</p>
                  <p>“Individual trauma results from an event, series of events, or set of circumstances that is experienced by an individual as physically or emotionally harmful or life threatening and that has lasting adverse effects on the individual’s functioning and mental, physical, social, emotional, or spiritual well-being.“</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="aos-item" data-aos="fade-up" data-aos-duration="350" data-aos-delay="0" data-aos-easing="ease-out" data-aos-anchor-placement="top-bottom">
        <div class="aos-item__inner">
          <div class="container">
            <div class="container">
              <div class="split">
                <div class="content">
                  <div class="description left margin text-dark">
                    <div class="text text-dark mt-4">
                      <p class="bold">Listen to a Drug Court Team Practitioner talk about the importance of understanding trauma for participants.</p>
                      <p>The correlation between trauma and substance use disorders is off the charts. And it's a combination that complicates the addiction treatment and recovery process for many patients. A simple definition is trauma is really an event that has an effect on somebody psychologically, spiritually, emotionally, where they have experienced some kind of threat, some kind of harm.</p>
                    </div>
                  </div>
                </div>
                <div class="content d-flex-centered">
                  <button id="button"> <i class="fa fa-play" aria-hidden="true"></i></button>
                  <div class="media"><img src="src/img/uploads/IMG_1900.jpg"></div>
                </div>
              </div>
              <div class="text text-dark mt-4">
                <p class="bold">There are 6 principles of TIC (Trauma Informed Treatment Courts): </p>
                <div class="text no-margin">
                  <p>●	safety </p>
                  <p>●	trustworthiness and transparency </p>
                  <p>●	peer support and mutual self-help </p>
                  <p>●	collaboration and mutuality </p>
                  <p>●	empowerment, voice, and choice </p>
                  <p>●	cultural, historical, and gender issues</p>
                </div>
                <p>The common thread running through these principles is a focus on addressing the individual’s unique needs by creating a safe, respectful, and reciprocal treatment environment. The goal is to fully engage participants by minimizing perceived threats, avoiding re-traumatization, and supporting recovery.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="lg-padding" id="widget">
      <div class="no-padding" id="widget_information">
        <div class="aos-item" data-aos="fade-up" data-aos-duration="350" data-aos-delay="0" data-aos-easing="ease-out" data-aos-anchor-placement="top-bottom">
          <div class="aos-item__inner">
            <div class="container container-header">
              <div class="subtitle">
                <h2></h2>
              </div>
            </div>
            <div class="container">
              <div class="quote">
                <blockquote>
                  <p class="mt-1">In many Drug Courts, participants can be referred to multiple treatment agencies or providers for substance abuse treatment and other complementary services such as mental health counseling or vocational rehabilitation.</p>
                </blockquote>
              </div>
              <div class="text text-gray"><small class="italic did-you-know">Did you Know</small></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="lg-padding bg-gray" id="person_centered">
      <div class="aos-item" data-aos="fade-up" data-aos-duration="350" data-aos-delay="0" data-aos-easing="ease-out" data-aos-anchor-placement="top-bottom">
        <div class="aos-item__inner">
          <div class="container">
            <div class="container">
              <div class="split">
                <div class="content">
                  <div class="description left margin text-dark">
                    <div class="container-header">
                      <div class="title">
                        <h2 class="subtitle">Incentives and Sanctions</h2>
                      </div>
                    </div>
                    <div class="text mt-4">
                      <p>The Drug Court places as much emphasis on incentivizing productive behaviors as it does on reducing crime, substance use, and other infractions.</p>
                      <p>Jail sanctions are imposed judiciously and sparingly. Unless a participant poses an immediate risk to public safety, jail sanctions are administered after less severe consequences have been ineffective at deterring infractions. Jail sanctions are definite in duration and typically last no more than three to five days.</p>
                    </div>
                  </div>
                </div>
                <div class="content d-flex-centered">
                  <button id="button"> <i class="fa fa-play" aria-hidden="true"></i></button>
                  <div class="media"><img src="src/img/uploads/mar_14_1_06_51_PM.jpg"></div>
                </div>
              </div>
              <div class="content text text-dark">
                <p><strong>Listen to the Honorable Judge Marcia Hirsch speak to this balance of using incentives and sanctions</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="lg-padding" id="widget">
      <div class="no-padding" id="widget_information">
        <div class="aos-item" data-aos="fade-up" data-aos-duration="350" data-aos-delay="0" data-aos-easing="ease-out" data-aos-anchor-placement="top-bottom">
          <div class="aos-item__inner">
            <div class="container container-header">
              <div class="subtitle">
                <h2></h2>
              </div>
            </div>
            <div class="container">
              <div class="quote">
                <blockquote>
                  <p class="mt-1">A drug court defense counsel informs the drug court participant about the rigors of drug court, preserves all legal rights of the client, and advocates for fair and equal treatment of the client.</p>
                </blockquote>
              </div>
              <div class="text text-gray"><small class="italic did-you-know">Did you Know</small></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="lg-padding bg-gray" id="story_recovery">
      <div class="aos-item" data-aos="fade-up" data-aos-duration="350" data-aos-delay="0" data-aos-easing="ease-out" data-aos-anchor-placement="top-bottom">
        <div class="aos-item__inner">
          <div class="container">
            <div class="container-header">
              <div class="subtitle mb-3"><span>What can you do in Treatment Court?</span></div>
            </div>
            <!---->
            <div class="content">
              <div class="split margin-row">
                <div class="card blue_card"><a class="content pt-3 pb-3" href="#roles_judge">
                    <div class="container-header">
                      <div class="title">
                        <p>Judge</p>
                      </div>
                    </div>
                    <div class="details">
                      <p>Demonstrate a commitment to providing trauma-informed care; consider the language used in the courtroom and by the team.</p>
                    </div></a></div>
                <div class="card blue_card"><a class="content pt-3 pb-3" href="#roles_coordinator">
                    <div class="container-header">
                      <div class="title">
                        <p>Coordinator</p>
                      </div>
                    </div>
                    <div class="details">
                      <p>Conduct trauma screen; compile list of trauma resources and programs for participants; plan trainings on trauma; reexamine policies and procedures.</p>
                    </div></a></div>
                <div class="card blue_card"><a class="content pt-3 pb-3" href="#roles_case_manager">
                    <div class="container-header">
                      <div class="title">
                        <p>Case Manager</p>
                      </div>
                    </div>
                    <div class="details">
                      <p>Conduct a thorough and accurate assessment of the participant. This assessment is critical to the identification of participant needs and the successful matching of those needs to effective treatment and community services.</p>
                    </div></a></div>
              </div>
              <div class="split">
                <div class="card blue_card"><a class="content pt-3 pb-3" href="#roles_treatment_provider">
                    <div class="container-header">
                      <div class="title">
                        <p>Treatment Provider</p>
                      </div>
                    </div>
                    <div class="details">
                      <p>Conduct a validated trauma assessment and provide or refer the individual to appropriate trauma-informed treatment services.</p>
                    </div></a></div>
                <div class="card blue_card"><a class="content pt-3 pb-3" href="#roles_defense_counsel">
                    <div class="container-header">
                      <div class="title">
                        <p>Defense Counsel</p>
                      </div>
                    </div>
                    <div class="details">
                      <p>Receive training on trauma; learn grounding techniques to help your client feel safe; communicate with your client in a respectful manner.</p>
                    </div></a></div>
                <div class="card blue_card"><a class="content pt-3 pb-3" href="#roles_prosecutor">
                    <div class="container-header">
                      <div class="title">
                        <p>Prosecutor</p>
                      </div>
                    </div>
                    <div class="details">
                      <p>Receive training on trauma; be transparent in interactions with participants.</p>
                    </div></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="text-dark">
      <div class="container pt-2">
        <div class="content">
          <div class="footer-content">
            <div class="copyright">
              <p>Center for Court Innovation © All Rights Reserved</p>
            </div>
            <div class="social"><a class="btn btn-lg btn-circle btn-social d-flex-centered"><i class="fab fa-facebook-f"></i></a><a class="btn btn-lg btn-circle btn-social d-flex-centered"><i class="fab fa-twitter"></i></a></div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div class="shaded" id="backToTop" onclick="goTop()"><i class="fas fa-angle-up"> </i></div>
</body>
@include('User.files.script_files')
<script>
  AOS.init({
      easing: 'ease-in-out-sine'
  });
</script>
