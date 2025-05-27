<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Sets character encoding to UTF-8 -->
  <meta charset="UTF-8">
  <!-- Makes the page responsive to different screen sizes -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Library</title>
  <!-- Links external CSS file for styling -->
  <link rel="stylesheet" href="css/explore.css">
</head>
<body>

  <!-- Header Section -->
  <header>
    <!-- Website logo -->
    <img src="FIGMA_ASSETS/ReadScape.png" alt="Logo" class="logo">
    
    <!-- Navigation Bar -->
    <div class="nav-wrapper">
      <nav>
        <!-- Navigation links -->
        <a href="index.php">Home</a>
        <a href="explore.php">Explore</a>
        <a href="bookreviews.php">Book Reviews</a>
        <a href="library.php">Library</a>
        <a href="logout.php">Logout</a>
        
        <!-- User avatar (placeholder) -->
        <a href="">
          <img src="FIGMA_ASSETS/tyy.jpg" alt="User" class="user-avatar" />
        </a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main>
    <!-- Search bar section -->
    <div class="search-bar">
      <input type="text" placeholder="Search stories, articles, book reviews">
      <button class="search-icon">⌕</button>
    </div>

    <!-- Book list display section -->
    <div class="book-list">
      <!-- Book 1: Harry Potter -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/hp.jpg" alt="Harry Potter">
        <div class="book-info">
          <h3>Harry Potter and the Sorcerer’s Stone<br><span>by J.K. Rowling</span></h3>
          <div class="book-stats">
            <span class="views">👁️ 1.2M</span>
            <span class="rating">⭐ 1.1M</span>
          </div>
          <p>A quirky, calm beginning before the magical chaos begins.</p>
        </div>
      </div>

      <!-- Book 2: Letter from Birmingham Jail -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/a1.jpg" alt="Birmingham Jail">
        <div class="book-info">
          <h3>Letter from Birmingham Jail<br><span>by Martin Luther King Jr. (1963)</span></h3>
          <div class="book-stats">
            <span class="views">👁️ 120K</span>
            <span class="rating">⭐ 110K</span>
          </div>
          <p>A powerful defense of nonviolent protest against racial injustice... highlights the urgency of social change.</p>
        </div>
      </div>

      <!-- Book 3: The Little Prince -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/lp.jpg" alt="The Little Prince">
        <div class="book-info">
          <h3>The Little Prince<br><span>by Antoine de Saint-Exupéry</span></h3>
          <div class="book-stats">
            <span class="views">👁️ 300K</span>
            <span class="rating">⭐ 200K</span>
          </div>
          <p>Begins with childhood wonder and imagination that sets the tone.</p>
        </div>
      </div>

      <!-- Book 4: The Case for Reparations -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/ta.jpg" alt="The Case for Reparations">
        <div class="book-info">
          <h3>The Case for Reparations<br><span>Ta-Nehisi Coates (The Atlantic, 2014)</span></h3>
          <div class="book-stats">
            <span class="views">👁️ 200K</span>
            <span class="rating">⭐ 200K</span>
          </div>
          <p>This article dives into the historical and present-day consequences of slavery and systemic racism in the US...</p>
        </div>
      </div>

      <!-- Book 5: To Kill a Mockingbird -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/mb.jpg" alt="To Kill a Mockingbird">
        <div class="book-info">
          <h3>To Kill a Mockingbird<br><span>by Harper Lee</span></h3>
          <div class="book-stats">
            <span class="views">👁️ 500K</span>
            <span class="rating">⭐ 400K</span>
          </div>
          <p>A reflective start that hints at past events full of lessons.</p>
        </div>
      </div>

      <!-- Book 6: Self-Reliance -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/sl.jpg" alt="Self-Reliance">
        <div class="book-info">
          <h3>Self-Reliance<br><span>Ralph Waldo Emerson (1841)</span></h3>
          <div class="book-stats">
            <span class="views">👁️ 1M</span>
            <span class="rating">⭐ 1M</span>
          </div>
          <p>A timeless essay on the value of individualism, independence... a foundational work in American literature.</p>
        </div>
      </div>
    </div>
  </main>

</body>
</html>
