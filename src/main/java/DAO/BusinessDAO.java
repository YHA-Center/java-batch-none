package DAO;

import java.sql.*;
import java.util.*;
import Models.Business;

public class BusinessDAO {
	
	Connection con = null;
	PreparedStatement stmt = null;
	Statement statement = null;
	ResultSet resultset = null;
	
	public BusinessDAO() throws ClassNotFoundException, SQLException {
		con = Config.config.getConnections();
	}
	
	// get all businesses
	public List<Business> get() throws SQLException{
		List<Business> businesses = new ArrayList<Business>();
		String query = "SELECT * FROM businesses";
		statement = con.createStatement();
		resultset = statement.executeQuery(query);
		while(resultset.next()) {
			Business business = new Business();
			business.setId(resultset.getInt("id"));
			business.setName(resultset.getString("name"));
			
			businesses.add(business);
		}
		return businesses;
	}
	
	public static void main(String args[]) throws ClassNotFoundException, SQLException {
		List<Business> bus = new ArrayList<Business>();
		BusinessDAO busDAO = new BusinessDAO();
		bus = busDAO.get();
		
		for(Business buss : bus) {
			System.out.println(buss.getId());
			System.out.println(buss.getName());
		}
		
	}
}
