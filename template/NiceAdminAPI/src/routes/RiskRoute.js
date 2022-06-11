module.exports = (app) => {
    const risk = require("../controllers/RiskController");
  
    app.get("/risk", risk.all);
    app.get("/risk/:risk_id", risk.getOne);
    app.post("/risk", risk.create);
    app.put("/risk", risk.update);
    app.delete("/risk", risk.remove);
};