const Joi = require('joi');

const resgisterValidation = Joi.object({
    username: Joi.string().max(100).required(),
    password: Joi.string().max(100).required(),
    name: Joi.string().max(100).required(),
    token: Joi.string().max(100),
})

module.exports = {
    resgisterValidation,
}