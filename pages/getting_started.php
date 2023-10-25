
<!doctype html>
<html lang="en">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>Getting started | Create your Space.</title>
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
		
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
    <link href="../css/sidebars.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body {
  padding-top: 50px;
}
@media (max-width: 979px) {
  body {
    padding-top: 0px;
  }
}
</style>
<script>
    function openCity(cityName) {
      var i;
      var x = document.getElementsByClassName("city");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      document.getElementById(cityName).style.display = "block";
    }
  </script>
<body>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#page-top">Mango</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Download</a></li>
                    </ul>
                    <button class="btn btn-dark rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Send Feedback</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
<header>




  <!-- Page content-->
  <div class="container mt-5">
            <div class="row">

            <!-- left side widgets-->
                <div class="col-lg-3">
                <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
    <a href="#" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom" onclick="openCity('getting-started')">
    <img class="bd-placeholder-img bd-placeholder-img-lg img-fluid me-3" style= "height: 1.5rem; width: 1.5rem;" src="../images/planet2.png"></img>
      <span class="fs-5 fw-semibold">Getting started</span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Home
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Overview</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('new-features')">Updates</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Reports</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#createyourspace-collapse" aria-expanded="false">
          Create your Space
        </button>
        <div class="collapse" id="createyourspace-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Overview</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Activities</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Spaces</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">People</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#communities-collapse" aria-expanded="false">
          Communities
        </button>
        <div class="collapse" id="communities-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Overview</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Events</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Community Rules</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Annually</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#contributors-collapse" aria-expanded="false">
          Contributors
        </button>
        <div class="collapse" id="contributors-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Overview</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Weekly</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Monthly</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Annually</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#accessibility-collapse" aria-expanded="false">
          Accessibility
        </button>
        <div class="collapse" id="accessibility-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Overview</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Weekly</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Monthly</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Annually</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#features-collapse" aria-expanded="false">
          Features
        </button>
        <div class="collapse" id="features-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded" onclick="openCity(event, 'London')">Read</a></li>
            <li><a href="#" class="link-dark rounded">Listen</a></li>
            <li><a href="#" class="link-dark rounded">Tags</a></li>
            <li><a href="#" class="link-dark rounded">Friends</a></li>
            <li><a href="#" class="link-dark rounded">Feeds</a></li>
            <li><a href="#" class="link-dark rounded">Chat</a></li>
            <li><a href="#" class="link-dark rounded">Videos</a></li>
            <li><a href="#" class="link-dark rounded">Charts</a></li>
            <li><a href="#" class="link-dark rounded">Notifications</a></li>
            <li><a href="#" class="link-dark rounded">Liking post</a></li>
            <li><a href="#" class="link-dark rounded">Connectors</a></li>
            <li><a href="#" class="link-dark rounded">Groups</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#insights-collapse" aria-expanded="false">
          Insights
        </button>
        <div class="collapse" id="insights-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Best Practices</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Top Features</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Making Editorials</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('overview')">Support Information</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#policy-collapse" aria-expanded="false">
        Content Policy Standards 
        </button>
        <div class="collapse" id="policy-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded" onclick="openCity('copyright')">Copyright</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('rules')">Rules</a></li>
            <li><a href="#" class="link-dark rounded" onclick="openCity('rewards')">Rewards</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">New...</a></li>
            <li><a href="#" class="link-dark rounded">Profile</a></li>
            <li><a href="#" class="link-dark rounded">Settings</a></li>
            <li><a href="#" class="link-dark rounded">Sign out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
                </div>
                <div class="col-lg-6  w3-animate-bottom">
                    <!-- Post content-->
                    <article id="getting-started" class="city">
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Getting started on Mango!</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on August 9, 2022 by Start me</div>
                            <!-- Post categories-->
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">Freebies</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">Science is an enterprise that should be cherished as an activity of the free human mind. Because it transforms who we are, how we live, and it gives us an understanding of our place in the universe.</p>
                            <p class="fs-5 mb-4">The universe is large and old, and the ingredients for life as we know it are everywhere, so there's no reason to think that Earth would be unique in that regard. Whether of not the life became intelligent is a different question, and we'll see if we find that.</p>
                            <p class="fs-5 mb-4">If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.</p>
                            <h2 class="fw-bolder mb-4 mt-5">I have odd cosmic thoughts every day</h2>
                            <p class="fs-5 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.</p>
                            <p class="fs-5 mb-4">Venus has a runaway greenhouse effect. I kind of want to know what happened there because we're twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It's bone dry today. Something bad happened there as well.</p>
                        </section>
                    </article>

                     <!-- Post content-->
                     <article id="overview" class="city w3-animate-left" style="display:none">
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">This is Overview!</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on August 9, 2022 by Start me</div>
                            <!-- Post categories-->
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">Freebies</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">Science is an enterprise that should be cherished as an activity of the free human mind. Because it transforms who we are, how we live, and it gives us an understanding of our place in the universe.</p>
                            <p class="fs-5 mb-4">The universe is large and old, and the ingredients for life as we know it are everywhere, so there's no reason to think that Earth would be unique in that regard. Whether of not the life became intelligent is a different question, and we'll see if we find that.</p>
                            <p class="fs-5 mb-4">If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.</p>
                            <h2 class="fw-bolder mb-4 mt-5">I have odd cosmic thoughts every day</h2>
                            <p class="fs-5 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.</p>
                            <p class="fs-5 mb-4">Venus has a runaway greenhouse effect. I kind of want to know what happened there because we're twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It's bone dry today. Something bad happened there as well.</p>
                        </section>
                    </article>

                    <!-- Post content-->
                    <article id="new-features" class="city" style="display:none">
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">This is New-Features!</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on August 9, 2022 by Start me</div>
                            <!-- Post categories-->
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">Freebies</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">Science is an enterprise that should be cherished as an activity of the free human mind. Because it transforms who we are, how we live, and it gives us an understanding of our place in the universe.</p>
                            <p class="fs-5 mb-4">The universe is large and old, and the ingredients for life as we know it are everywhere, so there's no reason to think that Earth would be unique in that regard. Whether of not the life became intelligent is a different question, and we'll see if we find that.</p>
                            <p class="fs-5 mb-4">If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.</p>
                            <h2 class="fw-bolder mb-4 mt-5">I have odd cosmic thoughts every day</h2>
                            <p class="fs-5 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.</p>
                            <p class="fs-5 mb-4">Venus has a runaway greenhouse effect. I kind of want to know what happened there because we're twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It's bone dry today. Something bad happened there as well.</p>
                        </section>
                    </article>

                    <!-- Post content-->
                    <article id="copyright" class="city" style="display:none">
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Copyright</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on August 9, 2022 by Olatunji Opemipo</div>
                            <!-- Post categories-->
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">Freebies</a>
                        </header>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">Our law is in line with Nigeria copyright law (Cap 28, Laws of the Federation of Nigeria) which permits the holder of copyrighted works to reproduce the work in any material form, publish the work, perform the work in public, produce, reproduce, perform or publish any translation of the work, make any adaptation of the work, etc.</p>
                            <p class="fs-5 mb-4">Mango does not allow downloading of content posted by a user for any other user or third party.Users are allowed to listen, read, discover and interact with uploads. All contributors contents are protected from any form of infringement or copyright violation by Mango content policy standards.</p>
                            <p class="fs-5 mb-4">In any case, if you discover a user has gone against your rights as a content creator on Mango for example your book or music is being posted by another user without your authorization or permission please don’t hesitate to report such an individual or account to @mangocare. We promise to protect and be in your best interests throughout your experience on Mango.</p>
                        </section>
                    </article>

                    <!-- Post content-->
                    <article id="rules" class="city" style="display:none">
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Rules of Engagement</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on August 22, 2022 by O.Olatunji</div>
                            <!-- Post categories-->
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">Freebies</a>
                        </header>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">On Mango, every user is a contributor who owns a space where they can create songs and books, post pictures, videos, and interact with their new and existing friends or audiences. Our platform allows users to get up to billion friends and live off their content by allowing followers and friends to read, listen and interact more with the content as permitted by the owner.</p>
                            <p class="fs-5 mb-4">So, this means that some content may not be to each individual liking or content that Mango endorses. There’s no cause for alarm, but that doesn’t mean you will experience anything out-of-the-bound on Mango. This is just an addition to the terms that you agreed to guide your use of our services, these rules help ensure that everyone has a safe and enjoyable space on Mango.</p>
                            <p class="fs-5 mb-4">A contributor could a musician, author, artist, blogger, or any form of occupation. It’s very important to be aware of what is not allowed on Mango. The examples below are for illustrative purposes and are not exhaustive. </p>
                            <h2 class="fw-bolder mb-4 mt-5">Dangerous Content</h2>
                            <p class="fs-5 mb-4">Mango is a space for communities where people can create, express themselves, read, listen, share, and get inspired. Don’t promote violence, aggravated hatred, harass or engage in harmful behavior that can put people at serious risk of physical harm or death.</p>
                            <h3 class="fw-bolder mb-4 mt-5">Content to Avoid</h3>
                              <ul>
                                <li>Content that advocates or glorifies serious physical harm toward an individual or group</li>
                                <li>Content that targets an individual or identifiable group for harassment or related abuse</li>
                                <li>Content that incites violence or hatred towards a person or group of people based on race, religion, gender identity or expression, sex, ethnicity, nationality, sexual orientation, veteran status, age, disability, or other characteristics associated with systemic discrimination or marginalization</li>
                                <li>Content that promotes dangerous false or dangerous deceptive medical information that may cause offline harm or poses a direct threat to public health </li>
                                <li>Content that illicitly promotes the sale of regulated or illegal goods</li>
                                <li>Content that promotes, solicits or facilitates child sexual abuse or exploitation</li>
                              </ul>
                              <h2 class="fw-bolder mb-4 mt-5">Deceptive Content</h2>
                              <p class="fs-5 mb-4">Creating a space on Mango requires that people are who they are, that they won’t get scammed in any form and no one is trying to manipulate our platform.</p>
                              <h3 class="fw-bolder mb-4 mt-5">Content to Avoid</h3>
                              <ul>
                                <li>Content that impersonates others to deceive</li>
                                <li>Content that promotes manipulated and synthetic media as authentic in ways that pose the risk of harm </li>
                                <li>Content that attempts to manipulate or interfere with the election-related process </li>
                                <li>Content that attempts to take advantage of Mango communities.</li>
                              </ul>
                              <h2 class="fw-bolder mb-4 mt-5">Sensitive Content</h2>
                              <p class="fs-5 mb-4">There is a lot of amazing content on Mango but there is certain content we don’t allow on our platform. We don’t want users to post excessively violent or graphic content and don’t post sexually explicit content.</p>
                              <h3 class="fw-bolder mb-4 mt-5">Content to Avoid</h3>
                              <ul>
                                <li>Content that promotes graphic or gratuitous depictions of violence, gore, or other shocking imagery</li>
                                <li>Content that contains sexually explicit material</li>
                              </ul>
                              <h2 class="fw-bolder mb-4 mt-5">Illegal Content </h2>
                              <p class="fs-5 mb-4">Mango is an organization that respects the processes and instructions of the Nigerian constitution because it’s our responsibility to comply with applicable laws and regulations.</p>
                              <h3 class="fw-bolder mb-4 mt-5">Content to Avoid</h3>
                              <ul>
                                <li>Content that violates applicable laws and regulations </li>
                                <li>Content that infringes the intellectual property rights of others</li>
                              </ul>
                              <h2 class="fw-bolder mb-4 mt-5">What happens when the rule is broken?</h2>
                              <p class="fs-5 mb-4">We take our disciplinary decisions seriously and keep the context in mind when making them. Breaking the rules may result in the violative content being removed on Mango. Repeated violations may result in the account being suspended or terminated.</p>
                              <h2 class="fw-bolder mb-4 mt-5">What more do I need to know?</h2>
                              <p class="fs-5 mb-4">Mango will help ensure that everyone is free and safe in their space. We will continue to evaluate and update you soon this information as needed.</p>
                              <h2 class="fw-bolder mb-4 mt-5">How can I report an issue?</h2>
                              <p class="fs-5 mb-4">If you found or noticed an issue with a piece of content or account on Mango? If so please kindly let us know by reporting to @mangocare.</p>
                        </section>
                    </article>

                    <!-- Post content-->
                    <article id="rewards" class="city" style="display:none">
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Mango Rewards</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on August 22, 2022 by O.Olatunji</div>
                            <!-- Post categories-->
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">rewards</a>
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">returns</a>
                            <a class="badge bg-dark text-decoration-none link-light" href="#!">da pada</a>
                        </header>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">Mango is free! despite that, we still recognize our users from all communities as contributors which means every user is part of Mango’s growing family. We sincerely appreciate every user's impact on the growth of each community they represent and we seek to show some form of rewards to users who can generate some impressions and leads to their page on Mango. The listed items below are examples of how Mango chooses to reward a contributor.</p>
                            <ul>
                              <li>Integration by featuring on Mango segments</li>
                              <li>Getting paid per thousand impressions </li>
                              <li>Getting endorsed by Mango </li>
                            </ul>
                       </section>
                    </article>
                    
                </div>
                <!-- Side widgets-->
                <div class="col-lg-3">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>

</div>
<footer class="footer mt-auto py-3 bg-dark">
  <div class="container align-items-center justify-content-center d-flex">
    <span class="text-muted">Mango. Create your Space™ | ©2022, all rights reserved</span>
  </div>
</footer>

 <!-- Feedback Modal-->
 <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered bg-dark">
                <div class="modal-content">
                    <div class="modal-header bg-dark p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To be a part of our ever growing communities, sign up on
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">Mango.</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-dark rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../js/sidebars.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"737cde7d9c0706d1","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>

</body>
</html>