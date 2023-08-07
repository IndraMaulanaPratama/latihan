const { PrismaClient, Prisma } = require('@prisma/client');
const logger = require('./log');

const model = new PrismaClient({
    // Configuring Logging that using winston logger
    log: [
        {
            emit: 'event',
            level: 'query',
        },
        {
            emit: 'event',
            level: 'error',
        },
        {
            emit: 'event',
            level: 'info',
        },
        {
            emit: 'event',
            level: 'warn',
        },
    ],
});

model.$on('query', (event) => { logger.query(event) })
model.$on('error', (event) => { logger.error(event) })
model.$on('info', (event) => { logger.info(event) })
model.$on('warn', (event) => { logger.warn(event) })

module.exports = model