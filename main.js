const { app, BrowserWindow, ipcMain } = require("electron");
const path = require("path");
const {getConnection} = require("./config_database");

let mainWindow;

const updateUser = async (id, user, req, res)=>{
  var username = req.body.username;
  var mysql = "UPDATE bodc_cyber.user SET status = 'ONLINE', jm_login = '" + time + "', tgl_login = '" + date + "' WHERE username = '" + username + "'"
  const conn = await getConnection();
  const result = await conn.query("UPDATE product SET ? WHERE Id = ?", [
    product,
    id,
  ]);
  console.log(result)
}

const loginUser = async(user, req, res) =>{
  try{
    var sess = req.session;
    var message = '';
    var username = req.body.username;
    var password = req.body.password;
    var sql = "SELECT * FROM `user` WHERE `username`= '"+username+"' and `password` = '"+password+"'"
    const conn = await getConnection();
    const results = await conn.query(sql, function(err, result){
      if(result.length){
        req.session.username = result[0].username;
        req.session.name = result[0].name;
        req.session.nrp = result[0].nrp;
        req.session.id_role = result[0].id_role;
        if(result[0].id_role == '4'){
          res.redirect('./pages/Radio/dashboard-radio.html')
        }
        else if(result[0].id_role == '3'){
          res.redirect('./pages/Imputer/dashboard-imputer.html')
        }
        else if(result[0].id_role == '2'){
          res.redirect('./pages/Validator/dashboard-validator.html')
        }
        else{
          res.redirect('./pages/Admin/dashboard-superadmin.html')
        }
      }
      else{
        message = 'Wrong Username / Password';
        res.render('./pages/login.html', {message: message});
      }
    })
  }
  catch(error){
    console.log(error);
  }
}

const isWindows = process.platform === "win32";

function createWindow() {
  mainWindow = new BrowserWindow({
    width: 800,
    height: 600,
    webPreferences: {
      preload: path.join(__dirname, "preload.js"),
      nodeIntegration: true
    },
    frame: isWindows ? false : true
  });
  
  mainWindow.loadFile("pages/login.html");


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