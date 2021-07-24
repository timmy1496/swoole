const express = require('express')
const server = express()

server.get('/', (req, res) => res.send('Hello from express' + str))

let str = '';
for (let i = 0; i < 1000; i++) {
    str += 's';
}

server.listen(3000, () => console.log('Express server listen on port 3000'))