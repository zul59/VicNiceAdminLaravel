const client = require("../../connect");
const { v1: uuidV1 } = require("uuid");

exports.createUnit = async (req, res) => {
    const { name } = req.body;

    const insertQuery = `INSERT INTO "MsUnit" (unit_id, unit_name) VALUES ($1, $2);`;

    try {
        await client.query(insertQuery, [uuidV1(), name]);

        return res.status(200).send({
            status: 200,
            message: "Created successfully",
        });

    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while creating new unit",
            exception: err,
        });
    }
}

exports.deleteUnit = async (req, res) => {
    const { deletedId } = req.body;

    const deleteQuery = `DELETE FROM "MsUnit" WHERE unit_id = $1`;

    try {
        await client.query(deleteQuery, [deletedId]);

        return res.status(200).send({
            status: 200,
            message: "Removed successfully",
        });

    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while removing the item",
            exception: err,
        });
    }
}

exports.createRiskCategory = async (req, res) => {
    const { name } = req.body;

    const insertQuery = `INSERT INTO "MsRiskCategory" (risk_category_id, risk_category_name) VALUES ($1, $2);`;

    try {
        await client.query(insertQuery, [uuidV1(), name]);

        return res.status(200).send({
            status: 200,
            message: "Created successfully",
        });

    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while creating new unit",
            exception: err,
        });
    }
}

exports.deleteRiskCategory = async (req, res) => {
    const { deletedId } = req.body;

    const deleteQuery = `DELETE FROM "MsRiskCategory" WHERE risk_category_id = $1`;

    try {
        await client.query(deleteQuery, [deletedId]);

        return res.status(200).send({
            status: 200,
            message: "Removed successfully",
        });

    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while removing the item",
            exception: err,
        });
    }
}

exports.createSourceOfRisk = async (req, res) => {
    const { name } = req.body;

    const insertQuery = `INSERT INTO "MsSourceOfRisk" (source_of_risk_id, source_of_risk_name) VALUES ($1, $2);`;

    try {
        await client.query(insertQuery, [uuidV1(), name]);

        return res.status(200).send({
            status: 200,
            message: "Created successfully",
        });

    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while creating new unit",
            exception: err,
        });
    }
}

exports.deleteSourceOfRisk = async (req, res) => {
    const { deletedId } = req.body;

    const deleteQuery = `DELETE FROM "MsSourceOfRisk" WHERE source_of_risk_id = $1`;

    try {
        await client.query(deleteQuery, [deletedId]);

        return res.status(200).send({
            status: 200,
            message: "Removed successfully",
        });

    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while removing the item",
            exception: err,
        });
    }
}

exports.createStandarAcademic = async (req, res) => {
    const { name } = req.body;

    const insertQuery = `INSERT INTO "MsStandarAcademic" (standar_academic_id, standar_academic_name) VALUES ($1, $2);`;

    try {
        await client.query(insertQuery, [uuidV1(), name]);

        return res.status(200).send({
            status: 200,
            message: "Created successfully",
        });

    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while creating new unit",
            exception: err,
        });
    }
}

exports.deleteStandarAcademic = async (req, res) => {
    const { deletedId } = req.body;

    const deleteQuery = `DELETE FROM "MsStandarAcademic" WHERE standar_academic_id = $1`;

    try {
        await client.query(deleteQuery, [deletedId]);

        return res.status(200).send({
            status: 200,
            message: "Removed successfully",
        });

    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while removing the item",
            exception: err,
        });
    }
}

exports.getUnit = async (req, res) => {
    const allQuery = `SELECT * FROM "MsUnit"`;
    try {
        const result = await client.query(allQuery, []);

        return res.status(200).send({
            status: 200,
            message: "Get All Unit Successfully",
            data: result.rows
        });
    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while getting all data",
            exception: err,
        });
    }
}

exports.getAdminUnit = async (req, res) => {
    const unitAllQuery = `SELECT * FROM "MsUnit"`;
    const riskCategoryAllQuery = `SELECT * FROM "MsRiskCategory"`;
    const sourceOfRiskAllQuery = `SELECT * FROM "MsSourceOfRisk"`;
    const standarAcademicAllQuery = `SELECT * FROM "MsStandarAcademic"`;

    try {
        const [units, riskCategories, sourceOfRisks, standarAcademics] = await Promise.all([
            client.query(unitAllQuery, []),
            client.query(riskCategoryAllQuery, []),
            client.query(sourceOfRiskAllQuery, []),
            client.query(standarAcademicAllQuery, []),
        ])

        return res.status(200).send({
            status: 200,
            message: "Get All Unit Successfully",
            data: {
                units: units.rows,
                riskCategories: riskCategories.rows,
                sourceOfRisks: sourceOfRisks.rows,
                standarAcademics: standarAcademics.rows
            }
        });
    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while getting all data",
            exception: err,
        });
    }
}
