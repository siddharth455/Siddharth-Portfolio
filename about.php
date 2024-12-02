<div class="main-port">
<div class="port">
<h1>My Portfolio</h1>
</div>
<section id="about">
    <div class="intro-container">
        <div class="intro-image">
            <img src="upload/sid.jpg" alt="Siddharth">
        </div>
        <div class="intro-description">
            <h2>About Me</h2>
            <p id="intro-text">Hi, I'm Siddharth Sharma, a passionate web developer specializing in front-end technologies. I excel in creating visually 
                engaging and responsive websites using HTML, CSS, Bootstrap and JavaScript. With additional experience in PHP, I build dynamic websites with server-side 
                functionality. I also have a strong understanding of databases, including MySQL and basic knowledge of MongoDB, which aids in developing
                 scalable applications. Familiar with Node.js, I create efficient back-end solutions. I constantly explore new technologies, and my interest 
                 in cloud computing has introduced me to AWS, enabling me to deploy and manage cloud-based applications. Always eager to learn and grow!</p>
        </div>
    </div>
    </div>
</div>
</section>


<script>
 // Wait for the DOM to fully load before running the script
document.addEventListener("DOMContentLoaded", function () {
    const introText = document.getElementById("intro-text"); // Select the text container
    const text = introText.textContent;  // Get the full text content
    introText.textContent = "";  // Clear the content initially

    let i = 0;
    const typingSpeed = 50;  // Speed at which each character will be typed (in milliseconds)

    function typeWriter() {
        if (i < text.length) {
            introText.textContent += text.charAt(i);  // Append one character at a time
            i++;
            setTimeout(typeWriter, typingSpeed);  // Call typeWriter again after delay
        }
    }

    typeWriter();  // Start the typing effect when the DOM is ready
});


</script>

<style>
    .main-port{
        font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #fff; /* White text for contrast */
    background: linear-gradient(135deg, #000, #1a1a1a, #333); /* Black gradient */
    background-attachment: fixed; /* Makes gradient stay fixed during scroll */
    background-size: cover;
    height: auto;
    margin: 0;
    }
    .port{
        font-size: 42px;
        text-align: center;
        color: #f39c12;
    }
/* About Section */
#about {
    padding: 50px 0;
    text-align: center;
}

/* Container for Image and Description */
.intro-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: auto;
    gap: 40px;  /* Space between image and description */
}

/* Image Styling */
.intro-image {
    display: flex;
    justify-content: center;
    align-items: center;
}

.intro-image img {
    width: 320px;  /* Set image size */
    height: 320px;  /* Set image size */
    border-radius: 50%;  /* Circular border */
    object-fit: cover;  /* Ensure the image covers the circular area */
    border: 5px solid #f39c12;  /* Gold border */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);  /* Shadow around the image */
}

/* Description Styling (Boxed with Glowing Effect) */
.intro-description {
    flex: 1;
    background: rgba(0, 0, 0, 0.6);  /* Slightly darker background */
    padding: 20px;
    border-radius: 10px;
    color: #fff;
    text-align: left;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);  /* Shadow for the description box */
    animation: glowBox 3s infinite;  /* Glowing animation with slower glow */
}

/* Keyframes for the Glowing Box (Less Intense Glow) */
@keyframes glowBox {
    0%, 100% {
        box-shadow: 0 0 10px #00bfff, 0 0 20px #00bfff; /* Light blue glow (less intense) */
        background: rgba(0, 0, 0, 0.7);  /* Darker background when glowing */
    }
    50% {
        box-shadow: 0 0 15px #00bfff, 0 0 30px #00bfff; /* Slightly increased glow */
        background: rgba(0, 0, 0, 0.6);  /* Slightly lighter background */
    }
}

/* Heading Styling */
.intro-description h2 {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 20px;
    color: #f39c12;
}

/* Paragraph Styling */
/* Typing Effect for Description Text */
/* Description Box Styling */
.intro-description {
    flex: 1;
    background: rgba(0, 0, 0, 0.6);  /* Slightly darker background */
    padding: 20px;
    border-radius: 10px;
    color: #fff;
    text-align: left;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);  /* Shadow for the description box */
    animation: glowBox 3s infinite;  /* Glowing animation */
}

/* Typing Effect - Basic Text Styling */
.intro-description p {
    font-size: 1.1rem;
    line-height: 1.6;
    white-space: wrap;  /* Prevent text from wrapping */
    display: inline-block;
    margin-bottom: 10px;
}

/* Glowing Box Effect */
@keyframes glowBox {
    0%, 100% {
        box-shadow: 0 0 10px #00bfff, 0 0 20px #00bfff; /* Light blue glow */
    }
    50% {
        box-shadow: 0 0 15px #00bfff, 0 0 30px #00bfff; /* Slightly brighter glow */
    }
}



/* Mobile View - Stacked Layout */
@media (max-width: 768px) {
    .port{
        font-size: 24px;
        text-align: center;
    }
    .intro-container {
        flex-direction: column;  /* Stack the image and description vertically */
        text-align: center;  /* Center align text */
    }

    .intro-image img {
        max-width: 80%;  /* Make image smaller on mobile */
        width: 320px;  /* Set image size */
        height: 320px;  /* Set image size */
        margin-bottom: 20px;  /* Add space between image and description */
    }

    .intro-description h2 {
        font-size: 1.6rem;
    }

    .intro-description p {
        font-size: 1rem;
    }
    .intro-description {
    flex: 1;
    background: rgba(0, 0, 0, 0.6);  /* Slightly darker background */
    padding: 20px;
    border-radius: 10px;
    color: #fff;
    text-align: left;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);  /* Shadow for the description box */
    animation: glowBox 3s infinite;  /* Glowing animation with slower glow */
    margin: 10px;
}
}



</style>