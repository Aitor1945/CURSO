from http.server import SimpleHTTPRequestHandler, HTTPServer
from datetime import datetime


class Handler(SimpleHTTPRequestHandler):
    def do_GET(self):
        if self.path == '/hora':
            self.send_response(200)
            self.send_header('Content-type', 'text/plain')
            self.end_headers()
            self.wfile.write(datetime.now().strftime("%H:%M:%S").encode())
        else:
            super().do_GET()


if __name__ == "__main__":
    server_address = ("", 8082)
    httpd = HTTPServer(server_address, Handler)
    print("Servidor Python corriendo en http://localhost:8082")
    httpd.serve_forever()
