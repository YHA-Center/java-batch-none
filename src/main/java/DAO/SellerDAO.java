package DAO;

import java.sql.*;
import java.util.*;
import Models.*;

public class SellerDAO {
	
	Connection con = null;
	Statement statement = null;
	PreparedStatement stmt = null;
	ResultSet resultset = null;
	
	// default constructor
	public SellerDAO() throws ClassNotFoundException, SQLException {
		con = Config.config.getConnections();
	}
	
	// get all customer
	public List<Seller> get() throws SQLException{
		List<Seller> sellers = new ArrayList<Seller>();
		String query = "SELECT * FROM sellers";
		statement = con.createStatement();
		ResultSet resultSet = statement.executeQuery(query);
		while(resultSet.next()) {
			Seller seller = new Seller();
			seller.setId(resultSet.getInt("id"));
			seller.setName(resultSet.getString("name"));
			seller.setEmail(resultSet.getString("email"));
			seller.setPhone(resultSet.getString("phone"));
			seller.setImage(resultSet.getString("image"));
			seller.setAddress(resultSet.getString("address"));
			sellers.add(seller);
		}
		return sellers;
	}
	
	// get by customer id
	public Seller getById(int id) throws SQLException {
		Seller seller = new Seller();
		String query = "SELECT * FROM sellers WHERE id=" + id;
		statement = con.createStatement();
		resultset = statement.executeQuery(query);
		if(resultset.next()) {
			seller.setId(resultset.getInt("id"));
			seller.setName(resultset.getString("name"));
			seller.setEmail(resultset.getString("email"));
			seller.setPhone(resultset.getString("phone"));
			seller.setAddress(resultset.getString("address"));
		}
		return seller;
	}
	
	// get by customer name
	public Seller getByName(String name) throws SQLException {
		Seller seller = new Seller();
		String query = "SELECT * FROM sellers WHERE name = ?";
		stmt = con.prepareStatement(query);
		stmt.setString(1, name);
		resultset = stmt.executeQuery();
		if(resultset.next()) {
			seller.setId(resultset.getInt("id"));
			seller.setName(resultset.getString("name"));
			seller.setEmail(resultset.getString("email"));
			seller.setPhone(resultset.getString("phone"));
			seller.setAddress(resultset.getString("address"));
		}
		return seller;
	}
	
	// create new customer
	public boolean create(Seller seller) throws SQLException {
		boolean flag = false;
		String query = "INSERT INTO sellers (name, email, password, phone, address, image)"
				+ "VALUES (?,?,?,?,?,?)";
		stmt = con.prepareStatement(query);
		stmt.setString(1, seller.getName());
		stmt.setString(2, seller.getEmail());
		stmt.setString(3, seller.getPassword());
		stmt.setString(4, seller.getPhone());
		stmt.setString(5, seller.getAddress());
		stmt.setString(6, seller.getImage());
		int insertedRow = stmt.executeUpdate();
		if(insertedRow > 0) flag = true;
		return flag;
	}
	
	// delete customer
	public boolean delete(int id) throws SQLException {
		boolean flag = false;
		String query = "DELETE FROM sellers WHERE id = " +id;
		statement = con.createStatement();
		int deletedRow = statement.executeUpdate(query);
		if(deletedRow > 0) flag = true;
		return flag;
	}
	
	// update customer
	public boolean update(Seller seller) throws SQLException {
		boolean flag = false;
		String query = "UPDATE sellers SET name=?, email=?, phone=?, address=?, image=? WHERE id=?";
		stmt = con.prepareStatement(query);
		stmt.setString(1, seller.getName());
		stmt.setString(2, seller.getEmail());
		stmt.setString(3, seller.getPhone());
		stmt.setString(4, seller.getAddress());
		stmt.setString(5, seller.getImage());
		stmt.setInt(6, seller.getId());
		int updatedRow = stmt.executeUpdate();
		if(updatedRow > 0) flag = true;
		return flag;
	}
	
	// testing method
	public static void main(String args[]) throws SQLException, ClassNotFoundException {
		// create new instance of boject Customer DAO
		SellerDAO dao = new SellerDAO();
		Seller seller = new Seller();
		
		// testing get customer by id
//		customer = customerDAO.getById(2);
//		System.out.println(customer.getName());
		
		// testing customer delete
//		boolean deleteFlag = customerDAO.delete(1);
//		if(deleteFlag) System.out.println("Deleted success");
		
		// testing update customer
//		Customer newcustomer = new Customer();
//		newcustomer.setName("Aung Aung");
//		newcustomer.setEmail("aung@gmail.com");
//		newcustomer.setPhone("111222333");
//		newcustomer.setAddress("Pyay");
//		newcustomer.setImage("aung.img");
//		newcustomer.setId(2);
//		boolean updateFlag = customerDAO.update(newcustomer);
//		if (updateFlag) System.out.println("updated success");
		
		// testing get customer by name
//		seller = dao.getByName("Mg Mg");
//		System.out.println(seller.getEmail());
		
//		 testing create new seller
//		seller.setName("Ma Ma");
//		seller.setEmail("mama@gmail.com");
//		seller.setPassword("mama123");
//		seller.setPhone("123456");
//		seller.setAddress("Yangon");
//		seller.setImage("mama.jpg");
//		boolean createFlag = dao.create(seller);
//		if(createFlag) System.out.println("created success");
		
//		 testing get all seller
		List<Seller> sellers = dao.get();
		for(Seller user : sellers) {
			System.out.println("Name " + user.getName());
			System.out.println("Email " + user.getEmail());
			System.out.println("Address " + user.getAddress());
			System.out.println("Image " + user.getImage());
			System.out.println("--------------------------");
		}
	}

	
}
