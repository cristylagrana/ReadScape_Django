<?php
// 1
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['user_id'])) {
    $errorM = "Login First!";
    header("Location: login.php?error=$errorM");
    exit;
}
// 2
include 'db_conn.php';

// 3
function makeHashtagsClickable($text) {
    return preg_replace('/#(\w+)/', '<a href="dashboard.php?tag=$1" class="hashtag">#$1</a>', $text);
}


//4 Handle new post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user_id'];
    $content = trim($_POST['content'] ?? '');

    $username = $_SESSION['username'] ?? 'Tyy_Writes';
    $userAvatar = $_SESSION['avatar'] ?? 'FIGMA_ASSETS/tyy.jpg';

    $imagePath = null;

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir);
        }

        $fileName = time() . '_' . basename($_FILES['image']['name']);
        $targetPath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            $imagePath = $targetPath;
        }
    }

    if ($content !== '' || $imagePath !== null) {
        $stmt = $conn->prepare("INSERT INTO posts (user_id, username, user_avatar, content, image, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
        $stmt->execute([$userId, $username, $userAvatar, $content, $imagePath]);
        header("Location: index.php");
        exit;
    }
}

// 5 Get posts
$stmt = $conn->prepare("SELECT * FROM posts ORDER BY created_at DESC");
$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ReadScape</title>
  <link rel="stylesheet" href="css/newsfeed.css" />
  <link rel="stylesheet" href="css/post_style.css" />
  <link rel="stylesheet" href="css/modal.css">
</head>
<body>
<header>
  <img src="FIGMA_ASSETS/ReadScape.png" alt="Logo" class="logo" />
  <div class="nav-user-wrapper">
    <nav>
      <a href="index.php">Home</a>
      <a href="explore.php">Explore</a>
      <a href="bookreviews.php">Book Reviews</a>
      <a href="library.php">Library</a>
      <a href="logout.php">Logout</a>
      <a href=""><img src="FIGMA_ASSETS/tyy.jpg" alt="User" class="user-avatar" /></a>
    </nav>
  </div>
</header>

<!-- 6 -->
<main>
  <!-- Post Form -->
  <form method="POST" enctype="multipart/form-data" id="postForm" class="post-box">
    <img src="FIGMA_ASSETS/p2.jpg" class="user-avatar" alt="User" />
    <input type="text" name="content" id="postContent" placeholder="Write a Post?" autocomplete="off" />
    <input type="file" name="image" id="imageInput" style="display:none" accept="image/*" />

    <!-- REQUIRED hidden fields -->
    <input type="hidden" name="user_id" value="1">
    <input type="hidden" name="username" value="TyyWrites">
    <input type="hidden" name="avatar" value="FIGMA_ASSETS/tyy.jpg">

    <div class="post-buttons">
      <button type="button" id="pickImageBtn" title="Pick Image">＋</button>
      <button type="submit" title="Post">📖</button>
      <button type="button" id="clearBtn" title="Clear">ⓧ</button>
    </div>
  </form>

  <!-- 7 -->
  <!-- Existing Hardcoded Posts -->
  <div class="post">
    <div class="post-user">
      <img src="FIGMA_ASSETS/p1.jpg" class="user-avatar" alt="Mia">
      <span>@MiaLoveBooks</span>
    </div>
    <div class="post-content">
      <div class="post-images"><img src="FIGMA_ASSETS/s1.jpg" alt=""></div>
      <div class="post-text">
        <p>"Some days are for escaping into the world of books,<br> and other days are for tackling that never-ending study list.<br>How do you manage your reading and study time?”<br>
        <a href="dashboard.php?tag=Books">#Books</a> 
        <a href="dashboard.php?tag=StudyTime">#ReadScape</a>
        <div class="post-stats">
          <span>♡ 10k likes</span>
          <span>💬 15k comments</span>
          <span>🔁 20k shares</span>
          <span>💾 15k saves</span>
          <button class="viewBtn" onclick="viewPost(this)">👁️ View Post</button>
        </div>
      </div>
    </div>
  </div>

  <!-- More Hardcoded Posts -->
  <div class="post">
    <div class="post-user">
      <img src="FIGMA_ASSETS/p3.jpg" class="user-avatar" alt="Sophie">
      <span>@Sophie_bookworm</span>
    </div>
    <div class="post-content">
      <div class="post-images"><img src="FIGMA_ASSETS/s3.jpg" alt=""></div>
      <div class="post-text">
        <p>"Journaling, planning, and a little bit of creative chaos—<br>it's all part of the process... What’s your favorite way to stay organized?”<br>
        <a href="dashboard.php?tag=Books">#Books</a> 
        <a href="dashboard.php?tag=StudyTime">#ReadScape</a>
        </p>
        <div class="post-stats">
          <span>♡ 9k likes</span>
          <span>💬 13k comments</span>
          <span>🔁 15k shares</span>
          <span>💾 13k saves</span>
          <button class="viewBtn" onclick="viewPost(this)">👁️ View Post</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Post 3 -->
<div class="post">
  <div class="post-user">
    <img src="FIGMA_ASSETS/aids.jpg" class="user-avatar" alt="Sophie">
    <span>@LitWithAdrianne</span>
  </div>
  <div class="post-content">
    <div class="post-images">
      <img src="FIGMA_ASSETS/post.jpg" alt="">
    </div>
    <div class="post-text">
      <p>
       Hidden in shadows and stories, she slipped between shelves like a ghost.<br> Yet the books always remembered her.<br>
       <a href="dashboard.php?tag=Books">#Books</a> 
       <a href="dashboard.php?tag=StudyTime">#StudyTime</a>
      </p>
      <div class="post-stats">
        <span>♡ 9k likes</span>
        <span>💬 13k comments</span>
        <span>🔁 15k shares</span>
        <span>💾 13k saves</span>
        <button class="viewBtn" onclick="viewPost(this)">👁️ View Post</button>
      </div>
    </div>
  </div>
</div>

<!-- 8 -->
  <!-- Dynamic Posts from Database -->
  <?php foreach ($posts as $post): ?>
    <div class="post">
      <div class="post-user">
        <img src="<?= $post['user_avatar'] ?>" class="user-avatar" alt="User Avatar" />
        <span>@<?= $post['username'] ?></span>
      </div>
      <div class="post-content">
        <?php if (!empty($post['image'])): ?>
          <div class="post-images">
            <img src="<?= $post['image'] ?>" alt="Post Image" />
          </div>
        <?php endif; ?>
        <div class="post-text">
          <p><?= makeHashtagsClickable(nl2br(htmlspecialchars($post['content']))) ?></p>
          <div class="post-stats">
            <span>♡ 15k likes</span>
            <span>💬 13k comments</span>
            <span>🔁 12k shares</span>
            <span>💾 11k saves</span>
            <button class="viewBtn" onclick="viewPost(this)">👁️ View Post</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <!-- 9 -->
  <script>
  const pickImageBtn = document.getElementById('pickImageBtn');
  const imageInput = document.getElementById('imageInput');
  const clearBtn = document.getElementById('clearBtn');
  const postContent = document.getElementById('postContent');

  pickImageBtn.addEventListener('click', () => {
    imageInput.click();
  });

  clearBtn.addEventListener('click', () => {
    postContent.value = '';
    imageInput.value = '';
  });
</script>

<!-- Modal HTML -->
<div id="postModal" class="modal" style="display:none;">
  <div class="modal-content">
    <button class="close-btn" onclick="closeModal()">✖</button>
    <div class="modal-header">
      <img id="modalProfilePic" src="FIGMA_ASSETS/p1.jpg" alt="Profile Pic" class="modal-avatar" />
      <strong id="modalUser">Username</strong>
    </div>
    <img id="modalImage" src="" alt="Post Image" class="modal-image" />
    <p id="modalContent" class="modal-text">Post content</p>
    <small id="modalDate" class="modal-date"></small>
  </div>
</div>

<!-- 10 -->
<script>window.viewPost = function(button) {
  const postCard = button.closest('.post');
  const username = postCard.querySelector('.post-user span').textContent.replace('@','');
  const content = postCard.querySelector('.post-text p').textContent;
  const image = postCard.querySelector('.post-images img');
  const profilePic = postCard.querySelector('.profilePic')?.src || 'FIGMA_ASSETS/p1.jpg';
  const date = postCard.querySelector('.postDate')?.textContent || '';

  document.getElementById('modalUser').textContent = username;
  document.getElementById('modalContent').textContent = content;
  document.getElementById('modalDate').textContent = date ? "Posted on: " + date : "";
  document.getElementById('modalProfilePic').src = profilePic;

  const modalImage = document.getElementById('modalImage');
  if (image) {
    modalImage.src = image.src;
    modalImage.style.display = 'block';
  } else {
    modalImage.style.display = 'none';
  }

  // Show modal (flex for centering)
  const modal = document.getElementById('postModal');
  modal.style.display = 'flex';
};

// 11
function closeModal() {
  document.getElementById('postModal').style.display = 'none';
}
</script>
</main>
</body>
</html>
