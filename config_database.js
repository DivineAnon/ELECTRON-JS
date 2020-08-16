const mysql = require('promise-mysql');

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'password',
  database: 'bodc_cyber',
  port: 3306
});

function getConnection() {
  return connection;
}

module.exports = { getConnection };