const electron = require('electron');
const path = require('path');
const BrowserWindow = electron.remote.BrowserWindow;

const dashboard = document.getElementById('login');

dashboard.addEventListener('click', function(event){
 const modalPath = path.join('file://', __dirname, 'dashboard-imputer.html');
 let win = new BrowserWindow({
    width: 800,
    height: 600,
    frame: isWindows ? false : true
  });
 win.on('close', function(){
  win == null
 });
 win.loadURL(modalPath);
 win.show()
})