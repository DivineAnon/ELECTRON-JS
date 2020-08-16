const { BrowserWindow } = require("electron");
const path = require('path');

window.addEventListener("DOMContentLoaded", ()=>{
const dashboard = document.getElementById("login");
dashboard.addEventListener('click', e => {
  let win = new BrowserWindow({
      width: 800,
      height: 600,webPreferences: {
        preload: path.join(__dirname, "preload.js")
      },
      frame: isWindows ? false : true
    });
  win.loadURL("pages/Imputer/dashboard-imputer.html")
  win.show(); 
  win.on("closed", function() {
      win = null;
    });
  })
})




