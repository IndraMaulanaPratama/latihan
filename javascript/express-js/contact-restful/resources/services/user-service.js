const model = require("../application/connection");
const ResponseError = require("../utillities/response/error");
const { resgisterValidation } = require("../validation/user-validation")
const validate = require("../validation/validation")
const bcrypt = require('bcrypt');
const { v4: uuid } = require('uuid')


const userRegistration = async (request) => {
    // Vlidasi Request Body
    const user = validate(resgisterValidation, request);

    // Validasi Username
    const countUser = await model.user.count({ where: { username: user.username } });
    console.log(countUser).end();
    
    if (null != countUser) {
        throw new ResponseError(400, 'Username already exists')
    }

    // Registration new user
    user.passowrd = bcrypt.hashSync(user.passowrd, 10)
    return await model.user.create({
        data: user,
        select: {
            username: true,
            name: true,
        }
    })
}

module.exports = {
    userRegistration,
}