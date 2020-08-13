const { BrowserWindow } = require("electron");
const path = require('path');

const dashboard = document.getElementById('login');

dashboard.addEventListener('click', function(event){
 let win = new BrowserWindow({
    width: 800,
    height: 600,webPreferences: {
      preload: path.join(__dirname, "preload.js")
    },
    frame: isWindows ? false : true
  });
 win.loadURL("pages/Imputer/dashboard-imputer.html") 
 win.on("closed", function() {
    win = null;
  });
})