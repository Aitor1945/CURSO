const http = require('http');
const fs = require('fs');
const path = require('path');
const PORT = 8083;
const server = http.createServer((req, res) => {
if (req.url === '/hora') {
res.writeHead(200, {'Content-Type': 'text/plain'});
res.end(new Date().toLocaleTimeString());
} else {
let filePath = path.join(__dirname, req.url === '/' ? 'index.html' : req.url);
fs.readFile(filePath, (err, content) => {
if (err) {
res.writeHead(404, {'Content-Type': 'text/plain'});
res.end('Archivo no encontrado');
} else {
let ext = path.extname(filePath);
let contentType = 'text/html';
if (ext === '.css') contentType = 'text/css';
if (ext === '.js') contentType = 'text/javascript';
res.writeHead(200, {'Content-Type': contentType});
res.end(content);
}
});
}
});
server.listen(PORT, () => {
console.log(`Servidor Node corriendo en http://localhost:${PORT}`);
});