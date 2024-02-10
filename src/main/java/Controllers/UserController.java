package Controllers;

import java.io.IOException;
import java.sql.*;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import Models.Customer;
import Models.Seller;
import DAO.CustomerDAO;


public class UserController extends HttpServlet {
	private static final long serialVersionUID = 1L;
	
	Connection con = null;
	PreparedStatement stmt = null;
	Statement statement = null;
	ResultSet resultset = null;
	RequestDispatcher dispatcher = null;
	CustomerDAO customerDAO = null;

    public UserController() throws ClassNotFoundException, SQLException {
        super();
        customerDAO = new CustomerDAO();
    }

    // do post method
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String action = request.getParameter("action");
		if(action != null) {
			switch(action) {
			
			
			case "login":
				// do the login process
				try {
					login(request, response);
				} catch (ServletException | IOException | SQLException e) {
					e.printStackTrace();
				}
				break;
				
				
			case "register":
				// do the register process
				try {
					register(request, response);
				} catch (ServletException | IOException | SQLException e) {
					e.printStackTrace();
				}
				break;
				
				
			default:
				break;
			}
		}
	}
	
	
	// login process
	private void login(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException, SQLException {
		Customer customer = new Customer();
		String email = request.getParameter("email");
		String password = request.getParameter("password");
		customer = customerDAO.getUserByEmail(email);
		
		if(customer.getPassword().equals(password)) {
			dispatcher = request.getRequestDispatcher("/views/user/dashboard.jsp");
		    dispatcher.forward(request, response);
		}else {
			request.setAttribute("error", "Passwords do not match");
            RequestDispatcher dispatcher = request.getRequestDispatcher("/views/user/form.jsp");
            dispatcher.forward(request, response);
		}
	}
	
	// register process
	private void register(HttpServletRequest request, HttpServletResponse reponse) throws ServletException, IOException, SQLException {
		boolean flag = false;
		
		String name = request.getParameter("name");
		String email = request.getParameter("email");
		String password = request.getParameter("password");
		String cpassword = request.getParameter("cpassword");
		String image = "assets/image/troll.jpg";
		String phone = request.getParameter("phone");
		String address = request.getParameter("address");
		
		if(isValid(name, email, password, cpassword, phone, address)) {
			Customer newCustomer = new Customer();
			
			newCustomer.setName(name);
			newCustomer.setEmail(email);
			newCustomer.setPassword(cpassword);
			newCustomer.setPhone(phone);
			newCustomer.setAddress(address);
			newCustomer.setImage(image);
			
			flag = customerDAO.create(newCustomer);
			
			if(flag) {
				dispatcher = request.getRequestDispatcher("/views/user/dashboard.jsp");
				dispatcher.forward(request, reponse);
			}
			
		}else {
			dispatcher = request.getRequestDispatcher("/views/user/form.jsp");
			dispatcher.forward(request, reponse);
		}
		
	}
	
	// custom validation
	private boolean isValid(String name, String email, String password, String cpassword, String phone, String address) {
		return !name.equals("") && !email.equals("") && !phone.equals("") && !address.equals("") && password.equals(cpassword);
	}

}
