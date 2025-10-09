<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Only Design</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background: #f8f9fa;
  color: #222;
}

header {
  background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
  padding: 2rem 0;
  text-align: center;
  color: #fff;
  letter-spacing: 2px;
  font-size: 2.5rem;
  font-weight: bold;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

section {
  display: flex;
  max-width: 1100px;
  margin: 2rem auto;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.07);
  overflow: hidden;
}

nav {
  background: #e3e6ea;
  width: 30%;
  min-width: 180px;
  padding: 2rem 1rem;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

nav ul {
  list-style: none;
  width: 100%;
}

nav ul li {
  margin-bottom: 1.2rem;
}

nav ul li:last-child {
  margin-bottom: 0;
}

nav ul li a {
  text-decoration: none;
  color: #182848;
  font-weight: 600;
  font-size: 1.1rem;
  padding: 0.5rem 1rem;
  border-radius: 6px;
  transition: background 0.2s, color 0.2s;
  display: block;
}

nav ul li a:hover,
nav ul li a:focus {
  background: #4b6cb7;
  color: #fff;
}

article {
  flex: 1;
  padding: 2rem;
  background: #f9fafc;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

article h2 {
  color: #4b6cb7;
  margin-bottom: 1rem;
  font-size: 2rem;
  font-weight: 700;
  text-align: center;
}

.cities-container {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  justify-content: center;
  margin-top: 2rem;
}

.city-card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  width: 270px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 1.2rem 1rem 1.5rem 1rem;
  transition: transform 0.15s;
  text-align: center;
}

.city-card:hover {
  transform: translateY(-6px) scale(1.03);
  box-shadow: 0 6px 20px rgba(75,108,183,0.13);
}

.city-card img {
  width: 100%;
  max-width: 220px;
  border-radius: 8px;
  margin-bottom: 1rem;
  box-shadow: 0 2px 8px rgba(0,0,0,0.10);
}

.city-card h3 {
  color: #4b6cb7;
  margin-bottom: 0.5rem;
  font-size: 1.25rem;
  font-weight: 700;
}

.city-card a {
  margin-top: 0.7rem;
  display: inline-block;
  background: #4b6cb7;
  color: #fff;
  text-decoration: none;
  padding: 0.45rem 1.2rem;
  border-radius: 5px;
  font-weight: 600;
  font-size: 1rem;
  transition: background 0.2s;
}

.city-card a:hover {
  background: #182848;
}

article p {
  margin-bottom: 1rem;
  line-height: 1.7;
  font-size: 1.05rem;
  text-align: center;
}

footer {
  background: #182848;
  color: #fff;
  text-align: center;
  padding: 1rem 0;
  font-size: 1rem;
  letter-spacing: 1px;
  margin-top: 2rem;
}

@media (max-width: 1050px) {
  .cities-container {
    flex-direction: column;
    align-items: center;
    gap: 1.5rem;
  }
  .city-card {
    width: 90%;
    max-width: 350px;
  }
}

@media (max-width: 700px) {
  section {
    flex-direction: column;
    margin: 1rem;
    border-radius: 8px;
  }
  nav {
    width: 100%;
    min-width: unset;
    align-items: stretch;
    padding: 1.2rem 1rem;
  }
  article {
    padding: 1.2rem;
  }
  .cities-container {
    gap: 1rem;
  }
}
</style>
</head>
<body>

<header>
  Explore World Cities
</header>

<section>
  <nav>
    <ul>
      <li><a href="HOMEPAGE.php">HOME</a></li>
      <li><a href="LONDON.php">LONDON</a></li>
      <li><a href="PARIS.php">PARIS</a></li>
      <li><a href="TOKYO.php">TOKYO</a></li>
    </ul>
  </nav>
  
  <article>
    <h2>Welcome! Discover London, Paris, and Tokyo</h2>
    <p>Journey through three of the world's most iconic cities. Click below to explore the history, culture, and beauty of London, Paris, and Tokyo.</p>
    <div class="cities-container">
      <div class="city-card">
        <img src="img/LONDON.png" alt="London cityscape">
        <h3>London</h3>
        <p>Experience the vibrant capital of England, famous for its rich history and landmarks like Big Ben and Tower Bridge.</p>
        <a href="LONDON.php">See London</a>
      </div>
      <div class="city-card">
        <img src="img/PARIS.png" alt="Paris cityscape">
        <h3>Paris</h3>
        <p>Discover the romance and elegance of Paris, home to the Eiffel Tower, charming cafés, and world-class art.</p>
        <a href="PARIS.php">See Paris</a>
      </div>
      <div class="city-card">
        <img src="img/TOKYO.png" alt="Tokyo cityscape">
        <h3>Tokyo</h3>
        <p>Explore Tokyo, where tradition meets innovation in a dazzling city of temples, neon lights, and delicious cuisine.</p>
        <a href="TOKYO.php">See Tokyo</a>
      </div>
    </div>
  </article>
</section>

<footer>
  &copy World Cities Homepage
</footer>

</body>
</html>
