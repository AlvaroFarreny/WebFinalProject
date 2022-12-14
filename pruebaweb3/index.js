// 1. Create global userWalletAddress variable
window.userWalletAddress = null;

// 2. when the browser is ready
window.onload = async (event) => {

  // 2.1 check if ethereum extension is installed
  if (window.ethereum) {

    // 3. create web3 instance
    window.web3 = new Web3(window.ethereum);

  } else {

    // 4. prompt user to install Metamask
    alert("Please install MetaMask or any Ethereum Extension Wallet");
  }

  // 5. check if user is already logged in and update the global userWalletAddress variable
  window.userWalletAddress = window.localStorage.getItem("userWalletAddress");

  // 6. show the user dashboard
  showUserDashboard();
};
// function to show the user dashboard
const showUserDashboard = async () => {

  // if the user is not logged in - userWalletAddress is null
  if (!window.userWalletAddress) {

    // change the page title
    document.title = "Web3 Login";

    // show the login section
    document.querySelector(".login-section").style.display = "flex";

    // hide the user dashboard section
    document.querySelector(".dashboard-section").style.display = "none";

    // return from the function
    return false;
  }

  // change the page title
  document.title = "Web3 Dashboard 🤝";

  // hide the login section
  document.querySelector(".login-section").style.display = "none";

  // show the dashboard section
  document.querySelector(".dashboard-section").style.display = "flex";

  // show the user's wallet address
   showUserWalletAddress();

  // get the user's wallet balance
   getWalletBalance();
};
// show the user's wallet address from the global userWalletAddress variable
const showUserWalletAddress = () => {
  const walletAddressEl = document.querySelector(".wallet-address");
  walletAddressEl.innerHTML = window.userWalletAddress;
};
// get the user's wallet balance
const getWalletBalance = async () => {
  // check if there is global userWalletAddress variable
  if (!window.userWalletAddress) {
    return false;
  }

  // get the user's wallet balance
  const balance = await window.web3.eth.getBalance(window.userWalletAddress);

  // convert the balance to ether
  document.querySelector(".wallet-balance").innerHTML = web3.utils.fromWei(
    balance,
    "ether"
  );
};
