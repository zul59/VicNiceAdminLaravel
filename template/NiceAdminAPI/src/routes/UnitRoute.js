module.exports = (app) => {
    const unit = require("../controllers/UnitController");
  
    app.get("/unit", unit.getUnit);
    app.get("/adminUnit", unit.getAdminUnit);

    app.post("/unit", unit.createUnit);
    app.delete("/unit", unit.deleteUnit);
    app.post("/riskCategory", unit.createRiskCategory);
    app.delete("/riskCategory", unit.deleteRiskCategory);
    app.post("/sourceOfRisk", unit.createSourceOfRisk);
    app.delete("/sourceOfRisk", unit.deleteSourceOfRisk);
    app.post("/standarAcademic", unit.createStandarAcademic);
    app.delete("/standarAcademic", unit.deleteStandarAcademic);
};