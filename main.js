
document.addEventListener('DOMContentLoaded', function () {
  BarraFija();
});

// Cambiar barra de navegacion y circulo al bajar
function BarraFija() {
  window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.remove("header", window.scrollY > 715);
    header.classList.toggle("headerFijo", window.scrollY > 715);
  })
};


document.getElementById("forgotpassw").addEventListener("click", function(){
  document.getElementsByClassName("container-login")[0].style.display = "none";
  document.getElementsByClassName("recordar-passw")[0].style.display = "block";
});


//funcion DARK MODE
function darkmode(iconID) {
  var r = document.querySelector(':root');
  var element = document.body;
  element.classList.toggle("dark-mode");
  
  if (document.getElementById(iconID).className == "fa-solid fa-moon") {
    setTimeout(() => {
      
    }, 900);
    document.getElementById(iconID).className = "fa-solid fa-sun";
    document.getElementById("logonavbar").src="/img/logos/logo_uem_claro.png";
    //dicionario de colores cambiado a darkmode
    r.style.setProperty('--footer-color', '#121212');
    r.style.setProperty('--header-color', '#121212');
    r.style.setProperty('--gris-color', 'rgb(30, 30, 30)');
    r.style.setProperty('--h1-color', 'rgb(219, 219, 219)');
    r.style.setProperty('--h2-color', 'rgb(219, 219, 219)');
    r.style.setProperty('--p-color', 'rgb(219, 219, 219)');
    document.getElementById("botonDarkMode").firstChild.src = "images/darkMode0.png";
  
  } else {
    setTimeout(() => {
      
    }, 900);
    document.getElementById(iconID).className = "fa-solid fa-moon";
    document.getElementById("logonavbar").src="/img/logos/logo_uem_oscuro.png";
    //dicionario de colores cambiado a light mode
    r.style.setProperty('--footer-color', 'white');
    r.style.setProperty('--header-color', 'white');
    r.style.setProperty('--gris-color', 'rgb(245, 245, 245)');
    r.style.setProperty('--h1-color', 'rgb(36, 36, 36)');
    r.style.setProperty('--h2-color', 'rgb(36, 36, 36)');
    r.style.setProperty('--p-color', 'rgb(36, 36, 36)');
  }
};


// FUNCION PARA INICIAR SESION EN LA WEB

// Inicializamos una variable que indica si el usuario ha iniciado sesión
let loggedIn = false;

const buttonlogin = document.getElementById('buttonlogin');
const avatar = document.getElementById('avatar');

window.addEventListener('load', () => {
  // Comprobamos si el usuario ha iniciado sesión
  if (localStorage.getItem('loggedIn')) {
    loggedIn = true;
  }
  // Si el usuario ha iniciado sesión
  if (loggedIn) {
    // Ocultamos el botón de inicio de sesión
    buttonlogin.style.display = 'none';
    
    // Mostramos el avatar del usuario
    avatar.style.display = 'block';

    // Cuando se haga clic en el avatar
    avatar.addEventListener('click', () => {
      // Redirigimos al usuario a su perfil
      window.location.replace('profile.html');
      // show the user's wallet address
      showUserWalletAddress();
      // get the user's wallet balance
      getWalletBalance();

    });
  }
});

//WEB 3.0 FUNCIONES DESDE AQUI HACIA ABAJO!!!
// 1. Web3 login function
const loginWithMetamask = async () => {
  // 1.1 check if there is global window.web3 instance
  if (window.web3) {
    try {
      // 2. get the user's ethereum account - prompts metamask to login
      const selectedAccount = await window.ethereum
        .request({
          method: "eth_requestAccounts",
        })
        .then((accounts) => accounts[0])
        .catch(() => {
          // 2.1 if the user cancels the login prompt
          throw Error("Please select an account");
        });

      // 3. set the global userWalletAddress variable to selected account
      window.userWalletAddress = selectedAccount;

      // 4. store the user's wallet address in local storage
      window.localStorage.setItem("userWalletAddress", selectedAccount);
      
      
      // Guardamos una clave en el almacenamiento local para indicar que el usuario ha iniciado sesión
      loggedIn = true;
      localStorage.setItem('loggedIn', true);

      // 5. show the user dashboard
      showUserDashboard();

      

    } catch (error) {
      alert(error);
    }
  } else {
    alert("Wallet not found");
  }
};

// function to show the user dashboard
const showUserDashboard = async () => {
  // if the user is not logged in - userWalletAddress is null
  if (!window.userWalletAddress) {

    // change the page title
    document.title = "Web3 Login";

    // show the login section
    document.querySelector(".login-metamask-section").style.display = "block";

    // hide the user dashboard section
    document.querySelector(".dashboard-section").style.display = "none";

    //MOSTRAMOS EL MENU DE LOGIN 
    document.querySelector(".container-login").style.display = "block";

    //ESCONDEMOS AVATAR
    document.querySelector(".perfil").style.display = "none";

    // return from the function
    return false;
  }

  window.location.href = "/index.html";

  //ESCONDEMOS EL MENU DE LOGIN
  buttonlogin.style.display = "none";

  //MOSTRAMOS AVATAR
  avatar.style.display = "block";

  
  // change the page title
  //document.title = "Web3 Dashboard 🤝";

  // hide the login section
  //document.querySelector(".login-metamask-section").style.display = "none";

  // show the dashboard section
  //document.querySelector(".dashboard-section").style.display = "flex";

  //ESCONDEMOS EL MENU DE LOGIN
  //document.querySelector(".container").style.display = "none";

  //MOSTRAMOS AVATAR
  //document.querySelector(".perfil").style.display = "block";
};

// web3 logout function
const logout = () => {
  // set the global userWalletAddress variable to null
  window.userWalletAddress = null;

  // remove the user's wallet address from local storage
  window.localStorage.removeItem("userWalletAddress");

  loggedIn = false;
  window.localStorage.removeItem("loggedIn");
  
  window.location.href = "/login.html";
};

// when the user clicks the logout button run the logout function
document.querySelector(".logout-btn").addEventListener("click", logout);

// 6. when the user clicks the login button run the loginWithMetamask function
document.querySelector(".login-btn").addEventListener("click", loginWithMetamask);

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