function getPassword() {
  const chars =
    "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ......-----";
  const passwordLength = 19;
  let password = "";

  for (let i = 0; i < passwordLength; i++) {
    let randomNumber = Math.floor(Math.random() * chars.length);
    password += chars.charAt(randomNumber);
  }
  document.getElementById("password").value = password;
}

const superBtn = document.getElementById("btn");
const passwordField = document.getElementById("password");

function textChange() {
  superBtn.classList.toggle("clicked");
  passwordField.select();
  document.execCommand("Copy");
}

superBtn.addEventListener("click", function () {
  getPassword();
  textChange();
});
