const client = require("../../connect");
const { v1: uuidV1 } = require("uuid");

exports.register = async (req, res) => {

    const { username, name, email, password } = req.body;

    const getDuplicateUserQuery = `SELECT * FROM "MsUser" WHERE username = $1 OR email = $2 LIMIT 1`;    

    const result = await client.query(getDuplicateUserQuery, [username, email]);

    if (result.rowCount > 0) {
        return res.status(400).send({
            status: 400,
            message: "Duplicate username or email found!",
        })
    }

    const insertQuery = `INSERT INTO "MsUser" (user_id, username, email, \"name\", \"password\") VALUES ($1, $2, $3, $4, $5);`;

    client
        .query(insertQuery, [uuidV1(), username, email, name, password])
        .then(() => {
            return res.status(200).send({
                status: 200,
                message: "User registered successfully",
            });
        })
        .catch((err) => {
            return res.status(500).send({
                status: 500,
                message: "Something wrong occured while registering the user",
                exception: err,
            });
        });
};
  
exports.login = (req, res) => {
    const user = {
        username: req.body.username,
        password: req.body.password,
    };

    const getUserQuery = `SELECT * FROM "MsUser" WHERE username = $1 LIMIT 1`;

    client
        .query(getUserQuery, [user.username])
        .then((result) => {
            if (!result.rows || result.rows.length == 0) {
                return res.status(400).send({
                    status: 400,
                    message: "Username or password is incorrect",
                });
            }

            const { password, ...rest } = result.rows[0];
            if (user.password !== password) {
                return res.status(400).send({
                    status: 400,
                    message: "Username or password is incorrect",
                });
            }

            return res.status(200).send({
                status: 200,
                message: "Login success",
                data: rest,
            });
        })
        .catch((err) => {
            return res.status(500).send({
                status: 500,
                message: "Something wrong occured while logging in",
            });
        });
};