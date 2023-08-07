require('dotenv/config');
const logger = require('./application/log');
const errorMiddleware = require('./application/middleware/error-middleware');
const app = require('./application/web');
const publicRoute = require('./routes/public-route');

// Routes 
app.use(publicRoute)
app.use('/test', (req, res) => {
    res.status(200).json({
        status: 200,
        data: 'Selamat Datang'
    })
})

// Middleware
app.use(errorMiddleware);

// Run Applications
app.listen(process.env.APP_PORT, logger.info(`Server running at ${process.env.APP_HOST}:${process.env.APP_PORT}`));