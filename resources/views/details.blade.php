@extends('layout.app')
@section('title','Career Details | Worldwide Services ')

@section('content')
    <!-- ======= Hero Section ======= -->
    <div id="banner">
      <div class="container-fluid p-0">
        <div class="d-none d-md-block">
          <img src="{{asset('frontend/assets/img/banner/about-us-web.png')}}" class="img-fluid">
        </div>
        <div class="d-md-none d-sm-block">
          <img src="{{asset('frontend/assets/img/banner/about-us-mobile.png')}}" class="img-fluid">
        </div>
      </div>
    </div>
    <!-- End Hero -->
    <main id="main">
      <section class="career-section">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-12">
              <div class="details_content">
                <div class="details_one">
                  <h2>COMPLIANCE OFFICER</h2>
                  <p class="my-4">We are looking for a Compliance Officer to keep our organization with a strong compliance department and continuous with a perfect internal and external </p>
                  <p>regulations. A Successful Compliance Officer is proficient with local and international laws, standards and the auditing techniques and procedures relating to their organization. </p>
                </div>
                <!-- --------two------- -->
                <div class="details-two ">
                  <h6>What are we offering?</h6>
                  <p>
                    <span class="fw-bold me-3">Salary:</span> £25,000 to £30,000 per year (depending on the experience and background)
                  </p>
                  <p>
                    <span class="fw-bold me-3">Hours:</span> Full time
                  </p>
                  <p>
                    <span class="fw-bold me-3">Holidays:</span> 28 days including bank holidays
                  </p>
                  <p>
                    <span class="fw-bold me-3">Job type:</span> Permanent
                  </p>
                  <p>
                    <span class="fw-bold me-3">Closing date:</span> 13 August 2022
                  </p>
                </div>
                <!-- -------==========- -->
                <div>
                  <h6>Accepting you, for you.</h6>
                  <p class="m-0">We want you to feel accepted for who you are and to feel safe, valued and to help us build a culture of true belonging. Worldwide is proud to be an equal opportunity employer and we take affirmative action to create a more inclusive and equitable world of work. We are committed to equal employment opportunities regardless of age, disability, gender identity, marital status, race, ethnicity, faith or belief, sexual orientation, socioeconomic background, Veteran status or whether you’re pregnant or on family leave. </p>
                </div>
                <!-- -----=========- -->
                <div>
                  <h6>Job Description</h6>
                  <p class="m-0">
                    <span class="me-2">•</span> Performing routine risk assessments to help organizations understand compliance risk, scope and significance
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span> Monitoring the organization's compliance with regulations and internal policies to ensure they are up to date with the relevant laws
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span> Educating employees on compliance regulations and the impact of non-compliance on the organization
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span> Recording their findings properly and following up with management to ensure the issues are rectified
                  </p>
                </div>
                <!-- -------=--------- -->
                <div>
                  <h6>Required Skills</h6>
                  <p class="m-0">
                    <span class="me-2">•</span> Critical problem-solving skills and the ability to make informed decisions quickly
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span> Excellent analytical skills and the ability to interpret information rapidly
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span>Attention to details and the ability to comprehend information thoroughly and understand its significance
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span> Excellent leadership and management skills
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span> High ethical standards
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span> Excellent verbal and written communication skills
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span> Good interpersonal and conflict management skills
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span>Excellent presentation and public speaking skills
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span> Reviewing marketing materials, websites, and presentations to ensure compliance with regulations
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span> Assisting in the gathering of information internally in response to requests by regulatory organizations
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span> Performing administrative tasks such as file creation and maintaining files of ongoing projects
                  </p>
                  <p class="m-0">
                    <span class="me-2">•</span>Collaborating with management from other departments to ensure compliance and investigating irregularities
                  </p>
                </div>
                <div class="mt-4">
                  <h2 style="font-size: 24px;font-family: 'Inter', sans-serif;font-weight: 600;"> To Apply Please Submit Your CV with Cover Letter to <span style="color:#3CB4E7 ;"> hr@worldwidesvc.com</span>
                  </h2>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class="details_content">
                <img class="img-fluid mb-3" src="{{asset('frontend/assets/img/logo/logo.svg')}}" alt="">
                <h6>Why choose us?</h6>
                <p> An essential component of excellent customer service is listening to the customers’ needs. You hear their concerns. You try to understand where they are coming from. You leverage emotional intelligence to show empathy.</p>
                <p class="my-4"> Now, imagine actively doing all of that with coworkers. Think how much more likely your team is to pull in the same direction and applaud each other’s successes. Better listening can bring greater success overall.</p>
                <p> This is our policy in Worldwide: “We are each other's customers”. In Worldwide we are treating colleagues as customers, and it dramatically enhance the culture in our work environment. When employees all treat each other with respect and look for ways to help one another, the business benefits.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->
   @endsection