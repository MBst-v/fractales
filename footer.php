  <?php require __DIR__ . '/templates/contacts.php' ?>
  </main>
  
  <footer class="ftr text-ls">
    <div class="container">
      <div class="ftr__inner">
        <p class="ftr__rights">© focus agency, 2022</p>
        
        <div class="ftr__contacts">
          <a href="mailto:<?php echo CONTACTS['email'] ?>" class="ftr__contacts-item ftr__contacts-item--email">
            <?php echo CONTACTS['email'] ?>
          </a>
          <span class="ftr__contacts-item ftr__contacts-item--address">
            <?php echo CONTACTS['address'] ?>
          </span>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>