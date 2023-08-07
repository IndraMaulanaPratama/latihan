require('dotenv/config')
const request = require('supertest');
const app = require('../web');
const model = require('../connection');

describe('GET /test', function () {

    it('Test Route API', async () => {
        const result = await request(app)
        .get('/test')
        .set("Accept", "Aplication/json")

        expect(result).toEqual(200)
    });
});

// describe('POST /api/register', function () {
//     afterEach(async () => {
//         model.user.deleteMany({where: {username: 'user-test'}});
//     })

//     it('Should can register new user', async() => {
//         const result = await supertest(app)
//         .post('/api/register')
//         .send({
//             username: "user-test",
//             password: "password",
//             name: "user-test",
//         })

//         expect(result.status).toBe(201);
//         expect(result.data.username).toBe('user-test');
//         expect(result.data.name).toBe('user-test');
//         expect(result.data.password).toBeUndefined(); 
//     })
// });