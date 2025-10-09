<!DOCTYPE html>
<html lang="en">
<head>
<title>Tokyo - CSS Only Design</title>
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
  max-width: 900px;
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
}

article p {
  margin-bottom: 1rem;
  line-height: 1.7;
  font-size: 1.05rem;
  text-align: center;
}

.tokyo-image {
  width: 100%;
  max-width: 400px;
  border-radius: 10px;
  margin-bottom: 1.5rem;
  box-shadow: 0 2px 12px rgba(0,0,0,0.10);
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
}
</style>
</head>
<body>

<header>
  Welcome to Tokyo
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
    <img src="img/TOKYO.png" alt="Tokyo cityscape" class="tokyo-image">
    <h2>Tokyo</h2>
    <p>Tokyo, the dazzling capital of Japan, is a city where tradition meets innovation. From the serene Meiji Shrine and historic temples to the neon-lit streets of Shibuya and futuristic skyscrapers, Tokyo offers a unique blend of old and new.</p>
    <p>Experience the vibrant culture, savor world-famous sushi, or explore the bustling districts that make Tokyo a city like no other. Discover the energy and wonder of Tokyo today!</p>
  </article>
</section>

<footer>
  &copy Tokyo Page
</footer>

</body>
</html>
