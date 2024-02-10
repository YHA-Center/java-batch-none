package DAO;

import java.sql.*;
import java.util.*;
import Models.*;

public class ProductDAO {
	
	Connection con;
	Statement statement;
	PreparedStatement stmt;
	ResultSet resultSet;
	
	// constructor
	ProductDAO() throws ClassNotFoundException, SQLException{
		con = Config.config.getConnections();
	}
	
	// get all products
	public List<Product> get() throws SQLException{
		List<Product> products = new ArrayList<Product>();
		String query = "SELECT products.*, categories.name as category_name, sellers.name as seller_name FROM products"
				+ "LEFT JOIN categories ON products.category_id = categories.id"
				+ "LEFT JOIN sellers ON products.seller_id = sellers.id";
		statement = con.createStatement();
		resultSet = statement.executeQuery(query);
		while(resultSet.next()) {
			Product product = new Product();
			product.setId(resultSet.getInt("id"));
			product.setName(resultSet.getString("name"));
			product.setPrice(resultSet.getInt("price"));
			product.setDescription(resultSet.getString("description"));
			product.setCount(resultSet.getInt("count"));
			product.setCategory_id(resultSet.getInt("category_id"));
			product.setSeller_id(resultSet.getInt("seller_id"));
		}
		return products;
		
	}
	
	
	// testing method
	public static void main(String args[]) throws ClassNotFoundException, SQLException {
		ProductDAO dao = new ProductDAO();
	}
}
