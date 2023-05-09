package sampletestng;

public class encapsulation {

	private String name;
	public String getname()
	{
		return name;
	}
	
	public void setName(String n)
	{
		this.name=n;
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		encapsulation e=new encapsulation();
		e.setName("Sara");
		System.out.println(e.getname());
	}

}
