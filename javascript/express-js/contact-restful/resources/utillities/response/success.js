const ResponseSuccess = (status, message, response) => {
    return response.status(status).json({
        status,
        data: {
            message
        }
    })
}

module.exports = ResponseSuccess