<?php include './components/header.php'; ?>
    <main>
      <div style="padding: 2em 2em 1em 2em">
        <h1>Dashboard</h1>
      </div>

      <div class="container">
        <!-- Menu Sidebar -->
        <aside class="menu box">
          <div class="menu-container">
            <div class="dashboard-title">
              <h3>Menu</h3>
            </div>
            <a href="#" class="menu-lines">
              <div class="menu-line menu-line1"></div>
              <div class="menu-line menu-line2"></div>
              <div class="menu-line menu-line3"></div>
            </a>
          </div>
          <!-- <div class="menu-add-book-btn"> -->
          <!-- <a class="menu-add-book" href="#"
            ><i class="fa-solid fa-plus"></i>&nbsp;Add a book</a
          > -->
          <!-- </div> -->
          <div class="menu-left-sidebar">
            <ul class="menu-list">
              <li><a class="menu-link" href="/">Home</a></li>
              <li><a class="menu-link" href="pages/library.php" target>My Library</a></li>
              <!-- <li><a class="menu-link" href="#">Authors</a></li>
              <li><a class="menu-link" href="#">Genres</a></li> -->
            </ul>
          </div>
        </aside>
        <!-- /Menu Sidebar -->

        <!-- Main Content -->
        <div class="content box">
          <div class="dashboard-title add-book--title">

            <h3>Add a book</h3>

            <button id="add-show--form">
              <i class="fa-solid fa-plus"></i>
            </button>
          </div>
          <form class="content-form show-form" method="POST" action="add_book.php">
            <label for="name">Author's Name</label>
            <input
              class="content-input content-name"
              type="name"
              name="author"
              placeholder="Author's Name"
            />
            <label for="name">Name of Book</label>
            <input
              class="content-input content-book"
              type="text"
              name="book_name"
              placeholder="Name of Book"
            />
            <label for="name">Genre</label>
            <input
              class="content-input content-genre"
              type="text"
              name="genre"
              placeholder="Genre"
            />

            <input class="content-btn" type="submit" value="Add New Book" />
          </form>
        </div>
        <!-- /Main Content -->

        <!-- Collection Sidebar -->
        <aside class="collection box">
          <div class="dashboard-title">
            <h3>Book Collection</h3>
            <small>Book Count: 3</small>
          </div>
          <div>
            <ul class="collection-list">
              <li>
                <!-- <span>X</span> -->
                <a class="collection-link" href="#"
                  >Dave Ramsey - The Total Money Makeover - Self-help</a
                >
              </li>
              <li>
                <!-- <span>X</span> -->
                <a class="collection-link" href="#"
                  >David Goggins - Can't Hurt Me - Autobiography</a
                >
              </li>
              <li>
                <a href="#">
                  <!-- <span>X</span> -->
                </a>
                <a class="collection-link" href="#"
                  >Ryan Holiday - Ego Is The Enemy - Self-help</a
                >
              </li>
            </ul>
          </div>
        </aside>
        <!-- /Collection Sidebar -->
      </div>
    </main>
<?php include './components/footer.php'; ?>

