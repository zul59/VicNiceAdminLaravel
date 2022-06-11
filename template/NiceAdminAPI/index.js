require("dotenv").config();

const express = require("express");
const cors = require("cors");
const app = express();
const port = process.env.PORT || 3000;

app.use(cors());
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

const client = require("./connect");

client
  .connect()
  .then(() => {
    console.log("Success connect to postresql");
  })
  .catch((err) => {
    console.log("Failed to connect to postgresql, " + err);
  });

app.get("/", (req, res) => {
  res.json({ message: "Welcome to Nice Admin API" });
});

require("./src/routes/UserRoute.js")(app);
require("./src/routes/RiskRoute.js")(app);
require("./src/routes/UnitRoute.js")(app);

app.listen(port, () => {
  console.log("Success connect to port: " + port);
});