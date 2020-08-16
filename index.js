const { remote } = require("electron");
const main = remote.require("./login");

const login = document.querySelector("#login");
const username = document.querySelector("#username");
const password = document.querySelector("#password");

login.addEventListener("submit", async (e) => {
  try {
    e.preventDefault();

    const user = {
      username: username.value,
      password: password.value,
    };
      const savedUser = await main.loginUser(user);
      console.log(savedUser);

    login.reset();
    login.focus();
  } catch (error) {
    console.log(error);
  }
});