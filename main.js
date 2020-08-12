const { app, BrowserWindow, ipcMain } = require("electron");
const path = require("path");
const { menu } = require("./menu");

let mainWindow, imputerWindow, dailyReport, dailyActivity;

const isWindows = process.platform === "win32";

function createWindow() {
  mainWindow = new BrowserWindow({
    width: 800,
    height: 600,
    webPreferences: {
      preload: path.join(__dirname, "preload.js")
    },
    frame: isWindows ? false : true
  });

  imputerWindow = new BrowserWindow({
    width: 800,
    height: 600,
    webPreferences: {
      preload: path.join(__dirname, "preload.js")
    },
    frame: isWindows ? false : true
  });

  dailyReport = new BrowserWindow({
    width: 800,
    height: 600,
    webPreferences: {
      preload: path.join(__dirname, "preload.js")
    },
    frame: isWindows ? false : true
  });
  
  dailyActivity = new BrowserWindow({
    width: 800,
    height: 600,
    webPreferences: {
      preload: path.join(__dirname, "preload.js")
    },
    frame: isWindows ? false : true
  });
  
  superadminWindow = new BrowserWindow({
    width: 800,
    height: 600,
    webPreferences: {
      preload: path.join(__dirname, "preload.js")
    },
    frame: isWindows ? false : true
  });
  
  userManagementWindow = new BrowserWindow({
    width: 800,
    height: 600,
    webPreferences: {
      preload: path.join(__dirname, "preload.js")
    },
    frame: isWindows ? false : true
  });

  mainWindow.loadFile("login.html");
  imputerWindow.loadFile("dashboard-imputer.html");
  dailyReport.loadFile("daily-report.html");
  dailyActivity.loadFile("daily-activity.html");
  superadminWindow.loadFile("sa-addunit.html");
  userManagementWindow.loadFile("sa-usermanagement.html");


  mainWindow.on("closed", function() {
    mainWindow = null;
  });

  imputerWindow.on("closed", function(){
    imputerWindow = null;
  });
  
  dailyReport.on("closed", function(){
    dailyReport = null;
  });
  
  dailyActivity.on("closed", function(){
    dailyActivity = null;
  });
}

app.on("ready", createWindow);

app.on("window-all-closed", function() {
  if (process.platform !== "darwin") app.quit();
});

app.on("activate", function() {
  if (mainWindow === null) createWindow();
  if (imputerWindow === null) createWindow();
});

// Register an event listener. When ipcRenderer sends mouse click co-ordinates, show menu at that point.
ipcMain.on(`display-app-menu`, function(e, args) {
  if (isWindows && mainWindow) {
    menu.popup({
      window: mainWindow,
      x: args.x,
      y: args.y
    });
  }
});