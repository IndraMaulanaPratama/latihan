const ResponseError = require("../../utillities/response/error")

const errorMiddleware = (errors, request, response, next) => {
    if (!errors) {
        next();
        return
    }

    if (errors instanceof ResponseError) {
        response.status(errors.status)
            .json({
                error: errors.message
            }).end();

    } else {
        response.status(500)
            .json({
                error: errors.message
            }).end();
    }
}

module.exports = errorMiddleware