package Models;

public class Category {
	
	// variable names which are same as names in database
	private int id;
	private String name;
	
	// and then generated getter and setter 
	// methods in order to manipulate with database
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	

}
