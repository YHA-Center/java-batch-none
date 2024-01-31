package DAO;

import java.sql.*;

public class AdminADO {
	
	public static void main(String args[]) throws ClassNotFoundException, SQLException {
		Connection con = Config.config.getConnections();
		if(con != null) {
			System.out.print("connected");
		}
	}

}
