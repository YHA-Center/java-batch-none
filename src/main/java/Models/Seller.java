package Models;

public class Seller {

	// variable names which are same as names in database
	private int id;
	private String email;
	private String password;
	private String phone;
	private String image;
	private String address;
	private String name;
<<<<<<< HEAD
	private int business;
	private String company;
	
	
	public int getBusiness() {
		return business;
	}
	public void setBusiness(int business) {
=======
	private String business;
	private String company;
	
	
	public String getBusiness() {
		return business;
	}
	public void setBusiness(String business) {
>>>>>>> branch 'master' of https://github.com/DevGeeksMyanmar/shop-dot-com.git
		this.business = business;
	}
	public String getCompany() {
		return company;
	}
	public void setCompany(String company) {
		this.company = company;
	}
	
	// and then generated getter and setter 
		// methods in order to manipulate with database
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	public String getPassword() {
		return password;
	}
	public void setPassword(String password) {
		this.password = password;
	}
	public String getPhone() {
		return phone;
	}
	public void setPhone(String phone) {
		this.phone = phone;
	}
	public String getImage() {
		return image;
	}
	public void setImage(String image) {
		this.image = image;
	}
	public String getAddress() {
		return address;
	}
	public void setAddress(String address) {
		this.address = address;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	
	
}
