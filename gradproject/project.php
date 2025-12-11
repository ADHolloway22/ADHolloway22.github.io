<!--
  File: projects.html
  Author: Ashton Holloway
  Date: November 16, 2025
  Description: Projects and experience showcase page featuring business case studies,
               leadership lessons, and educational resources with responsive grid layout
               and anchor navigation.
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projects</title>
  
  <!-- Custom font used here -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="nav.css" />
</head>

<body>
   <?php include "header.html"; ?>

  <main>
    <section class="page-intro">
      <h2>My Projects & Experience</h2>
      <p>I have worked on bigger projects that include working with businesses at a bank and dealing with their large amounts of money. Along with this, I have been a financial representative and helped inform them on where they should put their money to avoid bad habits. Dealing with money can be a big deal. I have worked in restaurants, gas stations, etc. since the age of 14. Money is not something that is taken for granted and can be a pretty big deal at times. Through my internships, I have truly learned the importance of customer service and being educated to help others.</p>
    </section>

    <!-- Competency 1: Business Case Studies -->
    <!-- Anchor link target: #business-cases -->
    <section id="business-cases" class="competency-section">
      <h3>1. Business Case Studies</h3>
      <p>I enjoy digging into real business situations and figuring out what worked, what didn't, and why. From these case studies, I pull out lessons that can help anyone think more strategically and make better decisions.</p>

      <div class="artifacts-container">
        <article class="artifact">
          <figure>
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=500&h=300&fit=crop" alt="Business analysis with charts and documents">
            <figcaption>Banking Industry Analysis</figcaption>
          </figure>
          <h4>Financial Services Case Study</h4>
          <p>Analysis of banking operations and customer financial management strategies, highlighting best practices for helping clients make informed investment decisions.</p>
          <a href="project1.html" class="artifact-link">Read Case Study</a>
        </article>

        <article class="artifact">
          <figure>
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&h=300&fit=crop" alt="Business strategy meeting with data">
            <figcaption>Small Business Growth Strategy</figcaption>
          </figure>
          <h4>Restaurant Management Study</h4>
          <p>Examining operational efficiency and customer service excellence in the food service industry, drawing from hands-on experience since age 14.</p>
          <a href="project2.html" class="artifact-link">View Analysis</a>
        </article>

        <article class="artifact">
          <figure>
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=500&h=300&fit=crop" alt="Financial graphs and analytics">
            <figcaption>Customer Financial Behavior</figcaption>
          </figure>
          <h4>Financial Habits Research</h4>
          <p>Study on common financial pitfalls and strategies to help clients develop better money management practices through education and guidance.</p>
          <a href="project3.html" class="artifact-link">Explore Research</a>
        </article>
      </div>
    </section>

    <!-- Competency 2: Leadership Lessons -->
    <!-- Anchor link target: #leadership -->
    <section id="leadership" class="competency-section">
      <h3>2. Leadership Lessons</h3>
      <p>A big part of my journey has been shaped by leadership experiences both on the basketball court and in the classroom. I share simple stories and reflections that highlight what I've learned about teamwork, communication, and persistence.</p>

      <div class="artifacts-container">
        <article class="artifact">
          <figure>
            <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?w=500&h=300&fit=crop" alt="Basketball team huddle">
            <figcaption>Leadership on the Court</figcaption>
          </figure>
          <h4>Basketball Team Leadership</h4>
          <p>Reflections on building team chemistry, communicating under pressure, and leading by example through athletic competition and collaboration.</p>
          <a href="#" class="artifact-link">Read Story</a>
        </article>

        <article class="artifact">
          <figure>
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500&h=300&fit=crop" alt="Students collaborating in classroom">
            <figcaption>Academic Leadership Experience</figcaption>
          </figure>
          <h4>Classroom Collaboration</h4>
          <p>Lessons learned from group projects and peer mentorship, emphasizing the importance of clear communication and mutual support in achieving common goals.</p>
          <a href="#" class="artifact-link">Learn More</a>
        </article>

        <article class="artifact">
          <figure>
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=300&fit=crop" alt="Professional team meeting">
            <figcaption>Workplace Leadership Growth</figcaption>
          </figure>
          <h4>Customer Service Excellence</h4>
          <p>How internships and work experience taught me the value of persistence, adaptability, and leading with empathy in diverse customer-facing roles.</p>
          <a href="#" class="artifact-link">View Insights</a>
        </article>
      </div>
    </section>

    <!-- Competency 3: Educational Tools & Resources -->
    <!-- Anchor link target: #educational-tools -->
    <section id="educational-tools" class="competency-section">
      <h3>3. Educational Tools & Resources</h3>
      <p>I've also created practical tools like goal-setting templates, time-management tips, and step-by-step guides that make it easier to take action. These resources are meant to give you something you can actually use right away.</p>

      <div class="artifacts-container">
        <article class="artifact">
          <figure>
            <img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=500&h=300&fit=crop" alt="Goal planning notebook and pen">
            <figcaption>Goal-Setting Framework</figcaption>
          </figure>
          <h4>Goal-Setting Template</h4>
          <p>A practical, step-by-step template to help you define clear objectives, break them into actionable steps, and track your progress toward success.</p>
          <a href="#" class="artifact-link">Download Template</a>
        </article>

        <article class="artifact">
          <figure>
            <img src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe?w=500&h=300&fit=crop" alt="Time management clock and calendar">
            <figcaption>Time Management System</figcaption>
          </figure>
          <h4>Time-Management Guide</h4>
          <p>Simple yet effective strategies for prioritizing tasks, managing your schedule, and making the most of every day without feeling overwhelmed.</p>
          <a href="#" class="artifact-link">Get the Guide</a>
        </article>

        <article class="artifact">
          <figure>
            <img src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=500&h=300&fit=crop" alt="Educational resources and books">
            <figcaption>Action-Oriented Learning Tools</figcaption>
          </figure>
          <h4>Step-by-Step Action Guides</h4>
          <p>Comprehensive guides covering everything from financial literacy basics to professional development strategies that you can implement immediately.</p>
          <a href="#" class="artifact-link">Access Resources</a>
        </article>
      </div>
    </section>
  </main>

  <?php include "footer.html"; ?>
</body>
</html>