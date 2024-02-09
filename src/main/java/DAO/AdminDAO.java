package DAO;

import java.util.*;
import java.sql.*;
import Models.*;

public class AdminDAO {
	
	Connection con = null; // declare connection
	ResultSet resultset = null; // declare result set
	Statement statement = null; // declare statement
	PreparedStatement stmt = null; // declare prepare statement
	
	// admin data access object model ( constructor work first)
<<<<<<< HEAD
	public AdminDAO() throws ClassNotFoundException, SQLException{
		con = Config.config.getConnections();
	}
	
	// get all admins
	public List<Admin> get(){
		List<Admin> admins = null;  // create empty admin list to store admins
		Admin admin = null; // create admin object which is from model
		// surround with try and catch block 
		try {
			admins = new ArrayList<Admin>(); // create ArrayList admin object
			String query = "SELECT * FROM admin"; // prepare query
			statement = con.createStatement(); // create statement
			resultset = statement.executeQuery(query); // execute that query and store that into resultset variable
			while(resultset.next()) {  // until end
				admin = new Admin(); // create admin object
				admin.setId(resultset.getInt("id"));  // set admin id from admin table's data
				admin.setName(resultset.getString("name"));
				admin.setEmail(resultset.getString("email"));
				admin.setPhone(resultset.getString("phone"));
				admin.setImage(resultset.getString("image"));
				admins.add(admin);
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return admins; // return that list
	}
	
	// get by id
	public Admin getById(int id) {
		Admin admin = new Admin();
		try {
			String query = "SELECT * FROM admin WHERE id = " + id;
			statement = con.createStatement();
			resultset = statement.executeQuery(query);
			// resultset to admin object
			if(resultset.next()) {
				admin.setId(resultset.getInt("id"));
				admin.setName(resultset.getString("name"));
				admin.setEmail(resultset.getString("email"));
				admin.setPhone(resultset.getString("phone"));
				admin.setImage(resultset.getString("image"));
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return admin; // return object admin
	}
	
	// get by name
	public Admin getByName(String name) throws SQLException {
		Admin admin = new Admin();
		String query = "SELECT * FROM admin WHERE name = ?" ;
		stmt = con.prepareStatement(query);
		stmt.setString(1, name);
		resultset = stmt.executeQuery();
		if(resultset.next()) {
			admin.setId(resultset.getInt("id"));
			admin.setName(resultset.getString("name"));
			admin.setEmail(resultset.getString("email"));
			admin.setPhone(resultset.getString("phone"));
			admin.setImage(resultset.getString("image"));
		}
		return admin;
	}
	
	// create admin
	public boolean create(Admin admin) throws SQLException {
		boolean flag = false;
		String query = "INSERT INTO admin (name,email,password,phone,image)"
				+ "VALUES (?,?,?,?,?)";
		stmt = con.prepareStatement(query);
		stmt.setString(1, admin.getName());
		stmt.setString(2, admin.getEmail());
		stmt.setString(3, admin.getPassword());
		stmt.setString(4, admin.getPhone());
		stmt.setString(5, admin.getImage());
		int rowInserted = stmt.executeUpdate();
		if(rowInserted > 0) flag =true;
		return flag;
	}
	
	// get by email
	public Admin getAdminByEmail(String email) throws SQLException {
		Admin admin = new Admin();
		String query = "SELECT * FROM admin WHERE email=?";
		stmt = con.prepareStatement(query);
		stmt.setString(1, email);
		resultset = stmt.executeQuery();
		while(resultset.next()) {
			admin.setEmail(resultset.getString("email"));
			admin.setId(resultset.getInt("id"));
			admin.setName(resultset.getString("name"));
			admin.setEmail(resultset.getString("email"));
			admin.setPhone(resultset.getString("phone"));
			admin.setImage(resultset.getString("image"));
		}
		return admin;
=======
	AdminDAO() throws ClassNotFoundException, SQLException{
		con = Config.config.getConnections();
	}
	
	// get all admins
	public List<Admin> get(){
		List<Admin> admins = null;  // create empty admin list to store admins
		Admin admin = null; // create admin object which is from model
		// surround with try and catch block 
		try {
			admins = new ArrayList<Admin>(); // create ArrayList admin object
			String query = "SELECT * FROM admin"; // prepare query
			statement = con.createStatement(); // create statement
			resultset = statement.executeQuery(query); // execute that query and store that into resultset variable
			while(resultset.next()) {  // until end
				admin = new Admin(); // create admin object
				admin.setId(resultset.getInt("id"));  // set admin id from admin table's data
				admin.setName(resultset.getString("name"));
				admin.setEmail(resultset.getString("email"));
				admin.setPhone(resultset.getString("phone"));
				admin.setImage(resultset.getString("image"));
				admins.add(admin);
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return admins; // return that list
	}
	
	// get by id
	public Admin getById(int id) {
		Admin admin = new Admin();
		try {
			String query = "SELECT * FROM admin WHERE id = " + id;
			statement = con.createStatement();
			resultset = statement.executeQuery(query);
			// resultset to admin object
			if(resultset.next()) {
				admin.setId(resultset.getInt("id"));
				admin.setName(resultset.getString("name"));
				admin.setEmail(resultset.getString("email"));
				admin.setPhone(resultset.getString("phone"));
				admin.setImage(resultset.getString("image"));
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return admin; // return object admin
	}
	
	// get by name
	public Admin getByName(String name) throws SQLException {
		Admin admin = new Admin();
		String query = "SELECT * FROM admin WHERE name = ?" ;
		stmt = con.prepareStatement(query);
		stmt.setString(1, name);
		resultset = stmt.executeQuery();
		if(resultset.next()) {
			admin.setId(resultset.getInt("id"));
			admin.setName(resultset.getString("name"));
			admin.setEmail(resultset.getString("email"));
			admin.setPhone(resultset.getString("phone"));
			admin.setImage(resultset.getString("image"));
		}
		return admin;
	}
	
	// create admin
	public boolean create(Admin admin) throws SQLException {
		boolean flag = false;
		String query = "INSERT INTO admin (name,email,password,phone,image)"
				+ "VALUES (?,?,?,?,?)";
		stmt = con.prepareStatement(query);
		stmt.setString(1, admin.getName());
		stmt.setString(2, admin.getEmail());
		stmt.setString(3, admin.getPassword());
		stmt.setString(4, admin.getPhone());
		stmt.setString(5, admin.getImage());
		int rowInserted = stmt.executeUpdate();
		if(rowInserted > 0) flag =true;
		return flag;
>>>>>>> branch 'master' of https://github.com/DevGeeksMyanmar/shop-dot-com.git
	}
	
	// delete admin
	public boolean delete(int id) throws SQLException {
		boolean flag = false;
		String query = "DELETE FROM admin WHERE id = " + id;
		statement = con.createStatement();
		int deletedRow = statement.executeUpdate(query);
		if(deletedRow > 0) flag = true;
		return flag;
	}
	
	// update admin
	public boolean update(Admin admin) throws SQLException {
		boolean flag = false;
		String query = "UPDATE admin SET name=? , email=?, phone=?, image=? WHERE id=?";
		stmt = con.prepareStatement(query);
		stmt.setString(1, admin.getName());
		stmt.setString(2, admin.getEmail());
		stmt.setString(3, admin.getPhone());
		stmt.setString(4, admin.getImage());
		stmt.setInt(5, admin.getId());
		int updatedRow = stmt.executeUpdate();
		if(updatedRow > 0) flag = true;
		return flag;
	}
	
	// testing method
	public static void main(String args[]) throws ClassNotFoundException, SQLException {
			AdminDAO dao = new AdminDAO();
	
			// testing getting by name
			Admin adminbyname = dao.getByName("dd");
			System.out.println(adminbyname.getEmail());
			
			// testing inserting
//			Admin newAdmin = new Admin();
//			newAdmin.setName("Mg Mg");
//			newAdmin.setEmail("mgmg@gmail.com");
//			newAdmin.setPassword("mgmg");
//			newAdmin.setPhone("12345678");
//			newAdmin.setImage("mgmg.img");
//			boolean newAdminFlag = dao.create(newAdmin);
//			if(newAdminFlag) {
//				System.out.println("Created new admin successfully");
//			}
			
			// testing delete admin
//			boolean deleteAdminFlag = dao.delete(1);
//			if(deleteAdminFlag) System.out.println("deleted success");
			
			// testing update admin
			Admin updatedAdmin = new Admin();
			updatedAdmin.setId(2);
			updatedAdmin.setName("mgba");
			updatedAdmin.setEmail("mgba@gmail.com");
			updatedAdmin.setPhone("12222222");
			updatedAdmin.setImage("mgba.img");
			boolean updateAdminFlag = dao.update(updatedAdmin);
			if(updateAdminFlag) System.out.println("update success");
			
			// testing get all admins
			List<Admin> all = dao.get();
			for(Admin admin : all) {
				System.out.println(admin.getName());
				System.out.println(admin.getEmail());
				System.out.println(admin.getPhone());
			}
			
	}
	

}
