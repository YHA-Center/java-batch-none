package Config;

import java.sql.*;

public class getConnection {
	
	public static Connection getConnections() throws ClassNotFoundException, SQLException {
		Class.forName("com.mysql.cj.jdbc.Driver");
		Connection con = null;
		try {
			con = DriverManager.getConnection("jdbc:mysql://localhost/", "root", "ykpt22270");
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return con;
	}
	
}
