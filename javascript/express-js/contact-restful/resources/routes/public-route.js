const express = require('express')
const { register } = require('../controllers/user-controller')
const publicRoute = express.Router()

publicRoute.post('/api/register', register)

module.exports = publicRoute