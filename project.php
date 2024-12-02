  <style>
    .project{
        font-size: 42px;
        text-align: center;
        color: #f39c12;
    }
     .container {
      display: flex;
      flex-wrap: wrap; /* Allows wrapping to the next line */
      justify-content: space-around; /* Centers cards and adds spacing */
      padding: 20px;
      gap: 20px; /* Space between cards */
    }

    .card {
  background-color: #2c2c2c; /* Darker background color */
  width: 30%; /* Makes sure 3 cards fit in one row */
  border: 1px solid #444; /* Subtle darker border */
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5); /* Slightly stronger shadow for dark theme */
  overflow: hidden;
  transition: transform 0.3s, box-shadow 0.3s;
  color: #f1f1f1; /* Light text for readability */
}

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
      text-align: center;
    }

    .card-content h3 {
      margin: 10px 0;
      font-size: 1.2rem;
      color: white;
    }

    .card-content p {
      font-size: 0.9rem;
      color: white;
    }
    
    .btn{
        display: inline-block;
        align-items: center;
        justify-content: center;
        padding: 8px 20px;
        width: 200px;
        height: 50px;
        color: #fff;
        font-weight: 700;
        border-radius: 0;
        text-transform: uppercase;
        margin: 25px;
        overflow: hidden;
        position: relative;
    }
    .btn ::before{
        content: "";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(120deg, transparent, #00fffc, transparent);
        transform: translateX(-100%);
        transition: 0.6s;
        position: absolute;
    }
    .btn:hover{
        background: transparent;
        box-shadow: 0 0 20px 5px #00fffc;
    }
    

    /* Responsive Design */
    @media (max-width: 768px) {
      .card {
        width: 45%; /* Two cards per row on smaller screens */
      }
      .btn {
    width: 70%; /* Reduce width for tablets */
    font-size: 0.9rem; /* Adjust font size for smaller screens */
  }
    }

    @media (max-width: 480px) {
      .card {
        width: 100%; /* One card per row on mobile */
      }
      .project{
        font-size: 16px;
      }
      .btn {
    width: 90%; /* Nearly full width on small screens */
    font-size: 0.8rem; /* Smaller font for mobile */
    padding: 10px; /* Adjust padding for better proportions */
    margin: 20px auto; /* Ensure it's centered */
  }
    }
  </style>
  </style>
</head>
<body>
<section>
<div class="project">
<h1>My Projects</h1>
</div>
  <div class="container">
    <!-- Card 1 -->
    <div class="card">
      <img src="https://via.placeholder.com/300x150" alt="Project 1">
      <div class="card-content">
        <h3>Project 1</h3>
        <p>Short description of the first project.</p>
        <a href="#" class="btn">View Project</a>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card">
  <img src="https://via.placeholder.com/300x150" alt="Project 2">
  <div class="card-content">
    <h3>Project 2</h3>
    <p>Short description of the second project.</p>
    <a href="#" class="btn">View Project</a>
  </div>
</div>

    <!-- Card 3 -->
    <div class="card">
      <img src="https://via.placeholder.com/300x150" alt="Project 3">
      <div class="card-content">
        <h3>Project 3</h3>
        <p>Short description of the third project.</p>
        <a href="#" class="btn">View Project</a>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="card">
      <img src="https://via.placeholder.com/300x150" alt="Project 4">
      <div class="card-content">
        <h3>Project 4</h3>
        <p>Short description of the fourth project.</p>
        <a href="#" class="btn">View Project</a>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="card">
      <img src="https://via.placeholder.com/300x150" alt="Project 5">
      <div class="card-content">
        <h3>Project 5</h3>
        <p>Short description of the fifth project.</p>
        <a href="#" class="btn">View Project</a>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="card">
      <img src="https://via.placeholder.com/300x150" alt="Project 6">
      <div class="card-content">
        <h3>Project 6</h3>
        <p>Short description of the sixth project.</p>
        <a href="#" class="btn">View Project</a>
      </div>
    </div>
  </div>
  </section>
</body>
</html>
