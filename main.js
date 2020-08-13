const { app, BrowserWindow, ipcMain } = require("electron");
const path = require("path");
const { menu } = require("./menu");

let mainWindow;

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

// <<<<<<< HEAD
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
  userManagementWindow.loadFile("pages/Radio/add-breakdown-information.html");
// =======
  mainWindow.loadFile("pages/login.html");
// >>>>>>> 7edfffbb338ff378720127b4e521ae7e482ff307


  mainWindow.on("closed", function() {
    mainWindow = null;
  });
}

app.on("ready", createWindow);

app.on("window-all-closed", function() {
  if (process.platform !== "darwin") app.quit();
});

app.on("activate", function() {
  if (mainWindow === null) createWindow();
});