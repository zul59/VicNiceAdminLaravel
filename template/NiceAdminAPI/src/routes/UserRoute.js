module.exports = (app) => {
    const user = require("../controllers/UserController");
  
    app.post("/login", user.login);
    app.post("/register", user.register);
};