<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Andrew Ashraf Weddings</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.6.0/css/lightgallery-bundle.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background-color: #2a2a2a; /* خلفية داكنة مريحة للعين */
      color: #f1f1f1; /* لون النص الفاتح ليتناسب مع الخلفية الداكنة */
    }

    header {
      height: 100vh;
      background: url('image1.jpg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      position: relative;
    }

    header::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.4);
    }

    header h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      z-index: 1;
      position: relative;
    }

    .contact {
      text-align: center;
    }

    .contact form {
      max-width: 600px;
      margin: 2rem auto;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .contact input, .contact textarea {
      padding: 1rem;
      font-size: 1rem;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .contact button {
      padding: 1rem 2rem;
      background-color: #111;
      color: white;
      border: none;
      border-radius: 25px;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .contact button:hover {
      background-color: #444;
    }
  </style>
</head>

<body>
  <section class="section" id="contact">
    <h2 data-aos="fade-up">Let's Create Together</h2>
    <div class="contact" data-aos="fade-up" data-aos-delay="200">
      <p>Ready to make magic? Reach out to book your date.</p>
      <form action="send_email.php" method="POST">
        <input type="text" placeholder="Your Name" name="name" required>
        <input type="email" placeholder="Your Email" name="email" required>
        <textarea placeholder="Your Message" rows="5" name="message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>
</body>

</html>
