import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;

class servlet extends HttpServlet {
	public void doGet(HttpServletRequest requets, HttpServletResponse response) 
	throws ServletException {
		response.setContextType("text/html");
		PrintWriter out = response.getWriter();
		out.println("<html><body>");
		out.println("<h1>Hello World</h1>");
		out.println("</body></html>");
	}
 } 