<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Library</title>
  <!-- Link to external stylesheet for page styling -->
  <link rel="stylesheet" href="css/explore.css">
</head>
<body>
  <!-- Header Section with Navigation -->
  <header>
     <!--Logo section -->
  <img src="FIGMA_ASSETS/ReadScape.png" alt="Logo" class="logo">

    <!-- Navigation bar -->
  <div class="nav-wrapper">
    <nav>
        <!-- Main navigation links -->
      <a href="index.php">Home</a>
      <a href="explore.php">Explore</a>
      <a href="bookreviews.php">Book Reviews</a>
      <a href="library.php">Library</a>
      <a href="logout.php">Logout</a>

       <!-- User profile/avatar -->
      <a href="">
        <img src="FIGMA_ASSETS/tyy.jpg" alt="User" class="user-avatar" />
      </a>
    </nav>
  </div>
</header>

  <!-- Main Content Area -->
  <main>
     <!-- Search bar for books, articles, users, etc. -->
    <div class="search-bar">
      <input type="text" placeholder="Search stories, articles, books or people">
      <button class="search-icon">⌕</button>
    </div>

    <!-- Book List Display -->
    <div class="book-list">
      <!-- Book Item 1 -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/hp.jpg" alt="Harry Potter">
        <div class="book-info">
          <h3>Harry Potter and the Sorcerer’s Stone<br><span>by J.K. Rowling</span></h3>
          <p>A quirky, calm beginning before the magical chaos begins.</p>
        </div>
      </div>

      <!-- Book Item 2 -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/a1.jpg" alt="Birmingham Jail">
        <div class="book-info">
          <h3>Letter from Birmingham Jail<br><span>by Martin Luther King Jr. (1963)</span></h3>
          <p>A powerful defense of nonviolent protest against racial injustice... highlights the urgency of social change.</p>
        </div>
      </div>
      <!-- Book Item 3 -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/lp.jpg" alt="The Little Prince">
        <div class="book-info">
          <h3>The Little Prince<br><span>by Antoine de Saint-Exupéry</span></h3>
          <p>Begins with childhood wonder and imagination that sets the tone.</p>
        </div>
      </div>
      <!-- Book Item 4 -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/ta.jpg" alt="The Case for Reparations">
        <div class="book-info">
          <h3>The Case for Reparations<br><span>Ta-Nehisi Coates (The Atlantic, 2014)</span></h3>
          <p>This article dives into the historical and present-day consequences of slavery and systemic racism in the US...</p>
        </div>
      </div>

      <!-- Book Item 5 -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/mb.jpg" alt="To Kill a Mockingbird">
        <div class="book-info">
          <h3>To Kill a Mockingbird<br><span>by Harper Lee</span></h3>
          <p>A reflective start that hints at past events full of lessons.</p>
        </div>
      </div>

      <!-- Book Item 6 -->
      <div class="book-item">
        <img src="FIGMA_ASSETS/sl.jpg" alt="Self-Reliance">
        <div class="book-info">
          <h3>Self-Reliance<br><span>Ralph Waldo Emerson (1841)</span></h3>
          <p>A timeless essay on the value of individualism, independence... a foundational work in American literature.</p>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
