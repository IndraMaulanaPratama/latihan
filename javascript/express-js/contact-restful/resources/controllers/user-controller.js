const { userRegistration } = require("../services/user-service")
const ResponseSuccess = require("../utillities/response/success")

const register = (request, response, next) => {
    try {
        const result = userRegistration(request.body)
        return ResponseSuccess(201, result);
    } catch (error) {
        next(error)
    }
}

module.exports = {
    register
}